<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/
//home route

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
//product route
//
//
Route::group(['prefix' => 'products','as' => 'product.'], function () {
    Route::get('/', 'App\Http\Controllers\ProductController@index')->name("index");
    Route::get('/{id}', 'App\Http\Controllers\ProductController@show')->name("show");
});
Route::middleware('admin')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\admin\AdminHomeController@index')
    ->name("admin.home.index");
    Route::get('/admin/admin/products', 'App\Http\Controllers\admin\AdminProductController@index')
    ->name("admin.product.index");
    Route::post('/admin//admin/products/store', 'App\Http\Controllers\admin\AdminProductController@store')
    ->name("admin.product.store");
    Route::delete('/products/delete/{id}', 'App\Http\Controllers\admin\AdminProductController@delete')
    ->name("admin.product.delete");
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\admin\AdminProductController@edit')
    ->name("admin.product.edit");
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')
    ->name("admin.product.update");
});

Auth::routes();
