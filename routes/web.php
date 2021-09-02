<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
//Đăng nhập đăng xuất
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('verified');
Route::get('/admin', 'App\Http\Controllers\AdminLoginController@login')->name('danhnhapAdmin');
Route::get('/admin-logout', 'App\Http\Controllers\AdminLoginController@logout')->name('dangxuatAdmin');
Route::post('/admin', 'App\Http\Controllers\AdminLoginController@postLoginAdmin');
Route::get('/dangnhap', 'App\Http\Controllers\HomeController@dangnhap')->name('dangnhap');
Route::post('/dangnhap', 'App\Http\Controllers\HomeController@dangnhapPost')->name('dangnhapPost');
Route::get('/dangky', 'App\Http\Controllers\HomeController@dangky')->name('dangky');
Route::post('/dangky', 'App\Http\Controllers\HomeController@dangkyPost')->name('dangkyPost');
Route::get('/dangxuat', 'App\Http\Controllers\HomeController@dangxuat')->name('dangxuat');


//Gửi mail
Route::get('/email/verify', function () {
    return view('vefiyemail');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Các trang chức năng
Route::prefix('admin')->middleware('checkAdmin')->group(function () {

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

        Route::prefix('taikhoan')->group(function (){
            Route::get('/',[
                'as'=>'taikhoan.index',
                'uses'=> 'App\Http\Controllers\TaiKhoanAdminController@index',
            ]);
        });

    });

Route::prefix('/')->middleware('checkUser','verified')->group(function (){
    Route::prefix('sanpham')->group(function (){
        Route::get('/',[
           'as'=>'sanpham.index',
           'uses'=>'App\Http\Controllers\SanphamController@index',
        ]);
        Route::get('/chitiet/{id}',[
           'as'=>'sanpham.chitiet',
           'uses'=> 'App\Http\Controllers\SanphamController@chitiet',
        ]);
        Route::get('/danhmuc/{id}',[
           'as'=>'sanpham.danhmuc',
           'uses'=> 'App\Http\Controllers\SanphamController@danhmuc',
        ]);
        Route::get('/hangsanxuat/{id}',[
            'as'=> 'sanpham.hangsanxuat',
            'uses'=>'App\Http\Controllers\SanphamController@hangsanxuat',
        ]);
        Route::get('/khuyenmai',[
            'as'=> 'sanpham.khuyenmai',
            'uses'=>'App\Http\Controllers\SanphamController@khuyenmai',
        ]);
        Route::get('/timkiem}',[
            'as' => 'sanpham.timkiem',
            'uses' => 'App\Http\Controllers\SanphamController@timkiem'
        ]);
    });
    Route::prefix('giohang')->group(function (){
        Route::get('/',[
            'as'=>'giohang.index',
            'uses'=> 'App\Http\Controllers\GioHangController@index'
        ]);
        Route::get('/add-cart/{id}',[
           'as'=>'giohang.add',
           'uses'=> 'App\Http\Controllers\GioHangController@addCart'
        ]);
        Route::get('/update-cart',[
           'as'=>'giohang.update',
           'uses'=> 'App\Http\Controllers\GioHangController@update'
        ]);
        Route::get('/delete-cart',[
            'as'=>'giohang.delete',
            'uses'=> 'App\Http\Controllers\GioHangController@delete'
        ]);
    });
    Route::prefix('taikhoan')->group(function (){
        Route::get('/',[
            'as'=>'taikhoanuser.index',
            'uses'=> 'App\Http\Controllers\TaiKhoanUserController@index',
        ]);
    });
});
