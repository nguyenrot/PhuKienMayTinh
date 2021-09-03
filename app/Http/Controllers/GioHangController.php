<?php

namespace App\Http\Controllers;

use App\Models\sanpham;
use http\Env\Response;
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
        $carts = session()->get('cart');
        $subCartPartials = view('user.giohang.partials.subcart',compact('carts'))->render();
        return response()->json([
            'code'=>200,
            'message'=>'success',
            'subCartPartials'=>$subCartPartials,
        ],200);
    }
    public function update(Request $request){
        $carts = session()->get('cart');
        $carts[$request->id]['soluong']=$request->soluong;
        session()->put('cart',$carts);
        $carts = session()->get('cart');
        $cartPartials = view('user.giohang.partials.cart',compact('carts'))->render();
        $subCartPartials = view('user.giohang.partials.subcart',compact('carts'))->render();
        $tongsoluong = 0;
        foreach ($carts as $cartItem) {
            $tongsoluong+=$cartItem['soluong'];
        }
        return response()->json([
           'cartPartials'=>$cartPartials,
            'soluongCart'=>$tongsoluong,
            'subCartPartials'=>$subCartPartials,
            'code'=>200,
        ],200);
    }
    public function delete(Request $request){
        if($request->id){
            $carts = session()->get('cart');
            unset($carts[$request->id]);
        } else {
            $carts =[];
        }
        session()->put('cart',$carts);
        $carts = session()->get('cart');
        $cartPartials = view('user.giohang.partials.cart',compact('carts'))->render();
        $subCartPartials = view('user.giohang.partials.subcart',compact('carts'))->render();
        $tongsoluong = 0;
        foreach ($carts as $cartItem) {
            $tongsoluong+=$cartItem['soluong'];
        }
        return response()->json([
            'cartPartials'=>$cartPartials,
            'subCartPartials'=>$subCartPartials,
            'soluongCart'=>$tongsoluong,
            'code'=>200,
        ],200);
    }
}
