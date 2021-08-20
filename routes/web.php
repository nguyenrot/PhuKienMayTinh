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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', 'App\Http\Controllers\AdminLoginController@login');

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
});
