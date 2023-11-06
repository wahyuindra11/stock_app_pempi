<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\FinishGoodController;
use FontLib\Table\Type\name;

Route::get('/', function () {
	return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard', function () {
	return view('layouts.master');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('categories', 'CategoryController');
	Route::get('/apiCategories', 'CategoryController@apiCategories')->name('api.categories');
	Route::get('/exportCategoriesAll', 'CategoryController@exportCategoriesAll')->name('exportPDF.categoriesAll');
	Route::get('/exportCategoriesAllExcel', 'CategoryController@exportExcel')->name('exportExcel.categoriesAll');

	Route::resource('customers', 'CustomerController');
	Route::get('/apiCustomers', 'CustomerController@apiCustomers')->name('api.customers');
	Route::post('/importCustomers', 'CustomerController@ImportExcel')->name('import.customers');
	Route::get('/exportCustomersAll', 'CustomerController@exportCustomersAll')->name('exportPDF.customersAll');
	Route::get('/exportCustomersAllExcel', 'CustomerController@exportExcel')->name('exportExcel.customersAll');

	Route::resource('suppliers', 'SupplierController');
	Route::get('/apiSuppliers', 'SupplierController@apiSuppliers')->name('api.suppliers');
	Route::post('/importSuppliers', 'SupplierController@ImportExcel')->name('import.suppliers');
	Route::get('/exportSupplierssAll', 'SupplierController@exportSuppliersAll')->name('exportPDF.suppliersAll');
	Route::get('/exportSuppliersAllExcel', 'SupplierController@exportExcel')->name('exportExcel.suppliersAll');

	Route::resource('products', 'ProductController');
	Route::get('/apiProducts', 'ProductController@apiProducts')->name('api.products');



	Route::resource('accessories', 'ProductMasukController');

	Route::resource('productsOut', 'ProductKeluarController');
	Route::get('/apiProductsOut', 'ProductKeluarController@apiProductsOut')->name('api.productsOut');
	Route::get('/exportProductKeluarAll', 'ProductKeluarController@exportProductKeluarAll')->name('exportPDF.productKeluarAll');
	Route::get('/exportProductKeluarAllExcel', 'ProductKeluarController@exportExcel')->name('exportExcel.productKeluarAll');
	

	Route::resource('productsIn', 'ProductMasukController');
	Route::get('/apiProductsIn', 'ProductMasukController@apiProductsIn')->name('api.productsIn');
	Route::get('/exportProductMasukAll', 'ProductMasukController@exportProductMasukAll')->name('exportPDF.productMasukAll');
	Route::get('/exportProductMasukAllExcel', 'ProductMasukController@exportExcel')->name('exportExcel.productMasukAll');
	Route::get('productsIn/create', 'ProductMasukController@create')->name('create.productsIn');
	Route::post('/productsIn', 'ProductMasukController@store');

	Route::resource('user', 'UserController');
	Route::get('/apiUser', 'UserController@apiUsers')->name('api.users');

	Route::get('/FinishGood', 'FinishGoodController@index')->name('finishgood.index');
	Route::get('/api/products/{category_id}', 'FinishGoodController@apiProducts')->name('api.products.FinishGood');
	Route::get('FinishGood/create-finish-good/{product_id}', 'FinishGoodController@create')->name('create.finish.good');
	Route::post('/FinishGood', 'FinishGoodController@store');

	Route::get('/accessories', [AccessoriesController::class, 'index'])->name('accessories.index');
	Route::get('/api/products/accessories/{accessories_category_id}', 'AccessoriesController@apiProducts')->name('api.products.accessories');


	Route::get('/Material', [MaterialController::class, 'index'])->name('material.index');
	Route::get('/api/products/material/{material_category_id}', 'MaterialController@apiProducts')->name('api.products.Material');

});
