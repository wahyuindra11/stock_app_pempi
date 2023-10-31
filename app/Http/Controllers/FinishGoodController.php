<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class FinishGoodController extends Controller
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
        $category = Category::all()->pluck('name','id');
        $products = Product::all();

        return view('Finish_Good.index', compact('category', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {

        $product = ($id !== null) ? Product::find($id) : null;
        $products = Product::all();
        $category = Category::all();
        return view('Finish_Good.create', compact('product', 'products', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'qty' => 'required|array',
            'accessories_nama' => 'required',
            'material_nama' => 'required'
        ]);

        try {
            // Cari produk 'accessories' berdasarkan nama
            $accessoriesProduct = Product::where('nama', $request->input('accessories_nama'))->first();

            if ($accessoriesProduct) {
                $accessoriesProduct->qty -= $request->input('qty')[1];
                $accessoriesProduct->save();
            }

            // Cari produk 'material' berdasarkan nama
            $materialProduct = Product::where('nama', $request->input('material_nama'))->first();

            if ($materialProduct) {
                $materialProduct->qty -= $request->input('qty')[2];
                $materialProduct->save();
            }

            // Cari produk berdasarkan nama
            $existingProduct = Product::where('nama', $request->input('nama'))->first();

            if ($existingProduct) {
                $existingProduct->qty += $request->input('qty')[0];
                $existingProduct->save();
            } else {
                // Jika produk dengan nama yang sama tidak ditemukan, buat produk baru
                Product::create([
                    'nama' => $request->input('nama'),
                    'qty' => $request->input('qty')[0], // Sesuaikan dengan indeks yang benar
                ]);
            }


            return response()->json([
                'success' => true,
                'message' => 'Product ' . ($existingProduct ? 'Updated' : 'Created')
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage()
            ]);
        }
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
        $category = Category::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');
        $product = Product::find($id);
        return $product;
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
        $category = Category::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        $this->validate($request , [
            'nama'          => 'required|string',          
            'harga_beli'    => 'required',
            'qty'           => 'required',
            'category_id'   => 'required',
            'nomer_spb'     => 'required',
            'keterangan'    => 'required'
        ]);

        $input = $request->except('materials', 'accessories');
        $produk = Product::findOrFail($id);
        
        $produk->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Products Created'
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
        $product = Product::findOrFail($id);

        // if (!$product->image == NULL){
        //     unlink(public_path($product->image));
        // }

        Product::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Products Deleted'
        ]);
    }
    
    public function apiProducts()
        {
            $products = Product::with('category')->whereHas('category', function ($query) {
                $query->where('id', 3);
            })->get();

            return Datatables::of($products)
                ->addColumn('category_name', function ($product){
                    return $product->category->name;
                })
                ->addColumn('action', function($product){
                    return 
                    '<a href="' . route('create.finish.good') . '" class="btn btn-secondary btn-xs" target="_blank"><i class="glyphicon glyphicon-plus"></i><span class="text"> Create</a>' .
                        '<a onclick="editForm('. $product->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                        '<a onclick="deleteData('. $product->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                })
                ->rawColumns(['category_name', 'action'])
                ->make(true);
        }
    }
