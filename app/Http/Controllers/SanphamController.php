<?php

namespace App\Http\Controllers;

use App\Models\chitietkhuyenmai;
use App\Models\danhmuc;
use App\Models\hangsanxuat;
use App\Models\sanpham;
use App\Traits\UpdateKhuyenMai;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class SanphamController extends Controller
{
    use UpdateKhuyenMai;
    private $sanpham;
    private $danhmuc;
    private $hangsanxuat;
    private $chitietkhuyenmai;
    public function __construct(sanpham $sanpham,danhmuc $danhmuc,hangsanxuat $hangsanxuat,chitietkhuyenmai $chitietkhuyenmai)
    {
        $this->updateKhuyenMai();
        $this->sanpham = $sanpham;
        $this->danhmuc = $danhmuc;
        $this->hangsanxuat = $hangsanxuat;
        $this->chitietkhuyenmai = $chitietkhuyenmai;
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
    public function danhmuc($id){
        Paginator::useBootstrap();
        $danhmuc = $this->danhmuc->find($id);
        $sanphams = $this->sanpham->where('category_id',$id)->latest()->paginate(9);
        return view('user.sanpham.danhmuc',compact('sanphams','danhmuc'));
    }
    public function hangsanxuat($id){
        Paginator::useBootstrap();
        $menu = $this->hangsanxuat->find($id);
        $sanphams = $this->sanpham->where('menu_id',$id)->latest()->paginate(9);
        return view('user.sanpham.hangsanxuat',compact('sanphams','menu'));
    }
    public function khuyenmai(){
        Paginator::useBootstrap();
        $sanphams = $this->chitietkhuyenmai->where('active',1)->latest()->paginate(9);
        return view('user.sanpham.khuyenmai',compact('sanphams'));
    }
}
