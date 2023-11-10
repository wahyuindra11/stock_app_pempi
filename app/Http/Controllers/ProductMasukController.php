<?php

namespace App\Http\Controllers;


use App\Exports\ExportProdukMasuk;
use App\Product;
use App\Product_Masuk;
use App\Supplier;
use PDF;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class ProductMasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin,staff');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('nama','ASC')
        ->get()
        ->pluck('nama','id');

        $suppliers = Supplier::orderBy('nama','ASC')
            ->get()
            ->pluck('nama','id');

        $invoice_data = Product_Masuk::all();
        return view('product_masuk.index', compact('products','suppliers','invoice_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        
        return view('product_masuk.create', compact('products', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'product_id'     => 'required|array',
            'suppliers'      => 'required|array',
            'qty'            => 'required|array',
            'tanggal'        => 'required|array',
            'harga_beli'     => 'required|array'
        ]);
    
        foreach ($request->input("product_id") as $key => $product_id) {
            Product_Masuk::create([
                'product_id'   => $product_id,
                'supplier_id'  => $request->input('suppliers')[$key],
                'qty'          => $request->input('qty')[$key],
                'tanggal'      => $request->input('tanggal')[$key],
                'harga_beli'   => $request->input('harga_beli')[$key]
            ]);
    
            $product = Product::findOrFail($product_id);
            $product->qty += $request->input('qty')[$key];
            $product->harga_beli = $request->input('harga_beli')[$key];
            $product->save();
        }
        
        return response()->json([
            'success'    => true,
            'message'    => 'Produk telah di tambahkan'
        ]);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_masuk = Product_Masuk::find($id);
        return $product_masuk;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_id'     => 'required',
            'supplier_id'    => 'required',
            'qty'            => 'required',
            'tanggal'        => 'required',
            'harga_beli'     => 'required'
        ]);

        $product_masuk = Product_Masuk::findOrFail($id);
        $product_masuk->update($request->all());

        $product = Product::findOrFail($request->product_id);
        $product->qty += $request->qty;
        $product->update();

        return response()->json([
            'success'    => true,
            'message'    => 'Product In Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product_Masuk::destroy($id);

        return response()->json([
            'success'    => true,
            'message'    => 'Products In Deleted'
        ]);
    }



    public function apiProductsIn(){
        $product = Product_Masuk::all();

        return Datatables::of($product)
            ->addColumn('products_name', function ($product){
                return $product->product->nama;
            })
            ->addColumn('supplier_name', function ($product){
                return $product->supplier->nama;
            })
            ->addColumn('action', function($product){
                return 
                    '<a onclick="editForm('. $product->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                    '<a onclick="deleteData('. $product->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a> ';


            })
            ->rawColumns(['products_name','supplier_name','action'])->make(true);

    }

    public function exportProductMasukAll()
    {
        $product_masuk = Product_Masuk::all();
        $timestamp = now()->format('Y-m-d_H-i-s');

        $pdf = PDF::loadView('product_masuk.productMasukAllPDF',compact('product_masuk'));
        $filename = 'product_masuk_' . $timestamp . '.pdf';

        return $pdf->download($filename);
    }


    public function exportExcel()
    {
        $timestamp = now()->format('Y-m-d_H-i-s');

        $filename = 'product_masuk_' . $timestamp . '.xlsx';

        return (new ExportProdukMasuk)->download($filename);
    }
}