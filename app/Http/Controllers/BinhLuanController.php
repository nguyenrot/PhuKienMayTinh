<?php

namespace App\Http\Controllers;

use App\Models\danhgia;
use Illuminate\Http\Request;

class BinhLuanController extends Controller
{
    private $danhgia;
    public function __construct(danhgia $danhgia)
    {
        $this->danhgia = $danhgia;
    }
    public function add(Request $request){
        $rating = 5;
        if($request->rating){
           $rating = $request->rating;
        }
        $this->danhgia->create([
            'danhgia'=>$rating,
            'binhluan'=>$request->binhluan,
            'user_id'=>auth()->user()->id,
            'sanpham_id'=>$request->sanpham
        ]);
        $binhluans = $this->danhgia->where('sanpham_id',$request->sanpham)->latest()->get();
        $binhluanPartials = view('user.sanpham.partials.binhluan',compact('binhluans'))->render();
        return response()->json([
           'code'=>200,
            'binhluanPartials'=>$binhluanPartials,
        ],200);
    }
    public function delete(Request $request){
        $this->danhgia->find($request->id)->delete();
        $binhluans = $this->danhgia->where('sanpham_id',$request->id_sanpham)->latest()->get();
        $binhluanPartials = view('user.sanpham.partials.binhluan',compact('binhluans'))->render();
        return response()->json([
           'code'=>200,
            'binhluanPartials'=>$binhluanPartials,
        ],200);
    }
}
