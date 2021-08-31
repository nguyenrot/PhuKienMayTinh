<?php

namespace App\Http\Controllers;

use App\Models\sanpham;
use Illuminate\Http\Request;

class GioHangController extends Controller
{
    private $sanpham;
    public function __construct(sanpham $sanpham)
    {
        $this->sanpham = $sanpham;
    }
    public function index(){
        $carts = session()->get('cart');
        return view('user.giohang.index',compact('carts'));
    }
    public function addCart($id,Request $request){
        $sanpham = $this->sanpham->find($id);
        $cart = array();
        $cart = session()->get('cart');
        if (isset($cart[$id])){
            $cart[$id]['soluong'] += $request->soluong;
        } else{
            $cart[$id] = [
                'name'=>$sanpham->tensp,
                'hinhanh'=>$sanpham->hinhanh,
                'dongia'=>$request->dongia,
                'soluong'=>$request->soluong,
            ];
        }
        session()->put('cart',$cart);
        return response()->json([
            'code'=>200,
            'message'=>'success'
        ],200);
    }
}
