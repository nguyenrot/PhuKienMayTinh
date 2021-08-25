<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/admin', 'App\Http\Controllers\AdminLoginController@login');
Route::post('/admin', 'App\Http\Controllers\AdminLoginController@postLoginAdmin');


Route::middleware(['admin'])->group(function (){

});

Route::prefix('admin')->group(function () {

    Route::prefix('dashboard')->group(function () {
        Route::get('/',[
            'as' =>'dashboard.index',
            'uses' => 'App\Http\Controllers\Dashboard@index',
        ]);
    });

    Route::prefix('categories')->group(function () {
        Route::get('/',[
            'as' =>'categories.index',
            'uses' => 'App\Http\Controllers\CategoryController@index',
        ]);
        Route::get('/create',[
            'as'=>'categories.create',
            'uses' => 'App\Http\Controllers\CategoryController@create',
        ]);
        Route::post('/store',[
            'as'=>'categories.store',
            'uses' => 'App\Http\Controllers\CategoryController@store',
        ]);
        Route::get('/edit/{id}',[
            'as'=>'categories.edit',
            'uses' => 'App\Http\Controllers\CategoryController@edit',
        ]);
        Route::post('/update/{id}',[
            'as'=>'categories.update',
            'uses' => 'App\Http\Controllers\CategoryController@update',
        ]);
        Route::get('/delete/{id}',[
            'as'=>'categories.delete',
            'uses' => 'App\Http\Controllers\CategoryController@delete',
        ]);
    });

    Route::prefix('menu')->group(function (){
        Route::get('/',[
            'as'=>'menu.index',
            'uses' => 'App\Http\Controllers\MenuController@index',
        ]);
        Route::get('/create',[
            'as'=>'menu.create',
            'uses'=>'App\Http\Controllers\MenuController@create',
        ]);
        Route::post('/store',[
            'as'=>'menu.store',
            'uses'=>'App\Http\Controllers\MenuController@store',
        ]);
        Route::get('/edit/{id}',[
            'as'=>'menu.edit',
            'uses' => 'App\Http\Controllers\MenuController@edit',
        ]);
        Route::post('/update/{id}',[
            'as'=>'menu.update',
            'uses' => 'App\Http\Controllers\MenuController@update',
        ]);
        Route::get('/delete/{id}',[
            'as'=>'menu.delete',
            'uses' => 'App\Http\Controllers\MenuController@delete',
        ]);
    });

    Route::prefix('product')->group(function (){
        Route::get('/',[
            'as'=>'product.index',
            'uses'=> 'App\Http\Controllers\AdminProductController@index',
        ]);
        Route::get('/create',[
            'as'=>'product.create',
            'uses'=> 'App\Http\Controllers\AdminProductController@create',
        ]);
        Route::post('/store',[
            'as'=>'product.store',
            'uses'=>'App\Http\Controllers\AdminProductController@store',
        ]);
        Route::get('/edit/{id}',[
            'as'=>'product.edit',
            'uses' => 'App\Http\Controllers\AdminProductController@edit',
        ]);
        Route::post('/update/{id}',[
            'as'=>'product.update',
            'uses' => 'App\Http\Controllers\AdminProductController@update',
        ]);
        Route::get('/delete/{id}',[
            'as'=>'product.delete',
            'uses' => 'App\Http\Controllers\AdminProductController@delete',
        ]);
        Route::get('/active/{id}',[
            'as'=>'product.active',
            'uses' => 'App\Http\Controllers\AdminProductController@active',
        ]);
    });

    Route::prefix('khuyenmai')->group(function (){
        Route::get('/',[
            'as'=>'khuyenmai.index',
            'uses'=> 'App\Http\Controllers\KhuyenMaiController@index',
        ]);
        Route::get('/create',[
            'as'=>'khuyenmai.create',
            'uses'=> 'App\Http\Controllers\KhuyenMaiController@create',
        ]);
        Route::post('/store',[
            'as'=>'khuyenmai.store',
            'uses'=> 'App\Http\Controllers\KhuyenMaiController@store',
        ]);
        Route::get('/edit/{id}',[
            'as'=>'khuyenmai.edit',
            'uses'=> 'App\Http\Controllers\KhuyenMaiController@edit',
        ]);
        Route::post('/update/{id}',[
            'as'=>'khuyenmai.update',
            'uses'=> 'App\Http\Controllers\KhuyenMaiController@update',
        ]);
        Route::get('/delete/{id}',[
            'as'=>'khuyenmai.delete',
            'uses'=> 'App\Http\Controllers\KhuyenMaiController@delete',
        ]);
        Route::get('/add_product/{id}',[
            'as'=>'khuyenmai.add_product',
            'uses'=> 'App\Http\Controllers\KhuyenMaiController@add_product',
        ]);
        Route::post('/post_add_product/{id}',[
            'as'=>'khuyenmai.post_add_product',
            'uses'=> 'App\Http\Controllers\KhuyenMaiController@post_add_product',
        ]);
        Route::get('/active_product/{id}',[
            'as'=>'khuyenmai.active_product',
            'uses'=> 'App\Http\Controllers\KhuyenMaiController@active_product',
        ]);
    });
});
