<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatHangController extends Controller
{
    public function __construct()
    {

    }
    public function dathang(){
        $carts = session()->get('cart');
        if (empty($carts)){
            return redirect()->route('giohang.index');
        }
        session()->put('donhang',$carts);
        $hoadon = session()->get('donhang');
        $tongtien = 0;
        foreach ($hoadon as $item){
            $tongtien += $item['dongia'];
        }
        return view('user.dathang.index',compact('hoadon','tongtien'));
    }
}
