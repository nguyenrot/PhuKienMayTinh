<?php

namespace App\Http\Controllers;

use App\Models\chitietdonhang;
use App\Models\donhang;
use Illuminate\Http\Request;

class DonHangController extends Controller
{
    private $donhang;
    private $chitietdonhang;
    public function __construct(donhang $donhang,chitietdonhang $chitietdonhang)
    {
        $this->chitietdonhang = $chitietdonhang;
        $this->donhang = $donhang;
    }
    public function index(){
        if(auth()->check()){
            $donhangchoduyet = $this->donhang->where('user_id',auth()->user()->id)->where('trangthai',1)->get();
            $donhangdanggiao = $this->donhang->where('user_id',auth()->user()->id)->where('trangthai',2)->get();
            $donhangdagiao = $this->donhang->where('user_id',auth()->user()->id)->where('trangthai',3)->get();
            $donhanghuy = $this->donhang->where('user_id',auth()->user()->id)->where('trangthai',0)->get();
            return view('user.donhang.index',compact('donhangchoduyet','donhangdanggiao','donhangdagiao','donhanghuy'));
        }
        return redirect()->route('home');
    }
}
