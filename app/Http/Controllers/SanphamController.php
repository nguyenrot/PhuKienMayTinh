<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use App\Models\sanpham;
use App\Traits\UpdateKhuyenMai;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class SanphamController extends Controller
{
    use UpdateKhuyenMai;
    private $sanpham;
    public function __construct(sanpham $sanpham)
    {
        $this->updateKhuyenMai();
        $this->sanpham = $sanpham;
    }

    public function index(){
        Paginator::useBootstrap();
        $sanphams = $this->sanpham->where('active',1)->latest()->paginate(9);
        return view('user.sanpham.index',compact('sanphams'));
    }
    public function chitiet($id){
        $sanpham = $this->sanpham->find($id);
        return view('user.sanpham.chitietsanpham',compact('sanpham'));
    }
}
