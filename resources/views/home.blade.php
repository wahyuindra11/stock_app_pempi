@extends('layouts.master')

@section('top')
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box" style="background-color: #24DBD4">
            <div class="inner">
                <h3>{{ \App\User::count() }}</h3>

                <p>Users</p>
            </div>
            <div class="icon">
                <img src="svg/user.svg" alt="user">
            </div>
            <a href="/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box" style="background-color: #16A93E">
            <div class="inner">
                <h3>{{ \App\Category::count() }}<sup style="font-size: 20px"></sup></h3>

                <p>Category</p>
            </div>
            <div class="icon">
                <img src="svg/category.svg" alt="category">
            </div>
            <a href="{{ route('categories.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box" style="background-color: #F88507">
            <div class="inner">
                <h3>{{ \App\Product::count() }}</h3>
                <p>Product</p>
            </div>
            <div class="icon">
                <img src="svg/apar.svg" alt="apar-icon">
            </div>
            <a href="{{ route('products.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box" style="background-color: #37C4C8">
            <div class="inner">
                <h3>{{ \App\Product::where('category_id', 1)->count() }}</h3>
                <p>Accessories</p>
            </div>
            <div class="icon">
                <img src="svg/cube-solid.svg" alt="apar-icon">
            </div>
            <a href="{{ route('accessories.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box" style="background-color:#EB3314">
            <div class="inner">
                <h3>{{ \App\Product::where('category_id', 2)->count() }}</h3>
                <p>Material</p>
            </div>
            <div class="icon">
                <img src="svg/cubes-stacked-solid.svg" alt="apar-icon">
            </div>
            <a href="{{ route('material.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box" style="background-color: #D75272">
            <div class="inner">
                <h3>{{ \App\Product::where('category_id', 3)->count() }}</h3>
                <p>Finish Good</p>
            </div>
            <div class="icon">
                <img src="svg/fire-extinguisher-solid.svg" alt="apar-icon" style="width: 115px; height:115px">
            </div>
            <a href="{{ route('finishgood.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box" style="background-color: #29D1D6">
            <div class="inner">
                <h3>{{ \App\Supplier::count() }}<sup style="font-size: 20px"></sup></h3>

                <p>Supplier</p>
            </div>
            <div class="icon">
                <img src="svg/supplier.svg" alt="supplier">
            </div>
            <a href="{{ route('suppliers.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box" style="background-color: #25DAA8"> 
            <div class="inner">
                <h3>{{ \App\Customer::count() }}</h3>

                <p>Customer</p>
            </div>
            <div class="icon">
                <img src="svg/customer.svg" alt="customer">
            </div>
            <a href="{{ route('customers.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box" style="background-color: #0BD4F4">
            <div class="inner">
                <h3>{{ \App\Product_Masuk::count() }}</h3>

                <p>Product In</p>
            </div>
            <div class="icon">
                <img src="svg/product-in.svg" alt="product-in">
            </div>
            <a href="{{ route('productsIn.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box" style="background-color: #17AB47">
            <div class="inner">
                <h3>{{ \App\Product_Keluar::count()  }}</h3>

                <p>Product Out</p>
            </div>
            <div class="icon">
                <img src="svg/product-out.svg" alt="product-out">
            </div>
            <a href="{{ route('productsOut.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
{{-- <div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-navy">
            <div class="inner">
                <h3>{{ \App\Sale::count() }}</h3>

                <p>Sales</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="{{ route('sales.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div> --}}
    <!-- ./col -->

    <!-- ./col -->

@endsection

@section('top')
@endsection
