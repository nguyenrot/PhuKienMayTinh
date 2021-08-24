<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use App\Models\sanpham;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $danhmuc;
    private $sanpham;
    public function __construct(danhmuc $danhmuc,sanpham $sanpham)
    {
        $this->danhmuc = $danhmuc;
        $this->sanpham = $sanpham;
    }

    public function index(){
        $danhmucs = $this->danhmuc->get();
        $sanphamnew = $this->sanpham->latest()->take(6)->get();
        $sanphamlike = $this->sanpham->latest('view','desc')->take(2)->get();
        return view('user.home.index',compact('danhmucs','sanphamnew','sanphamlike'));
    }
}
