<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use App\Models\sanpham;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class SanphamController extends Controller
{
    private $danhmuc;
    private $sanpham;
    public function __construct(danhmuc $danhmuc,sanpham $sanpham)
    {
        $this->danhmuc = $danhmuc;
        $this->sanpham = $sanpham;
    }

    public function index(){
        Paginator::useBootstrap();
        $danhmucs = $this->danhmuc->all();
        $sanphams = $this->sanpham->where('active',1)->latest()->paginate(9);
        return view('user.sanpham.index',compact('danhmucs','sanphams'));
    }
}
