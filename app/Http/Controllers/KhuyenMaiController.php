<?php

namespace App\Http\Controllers;

use App\Models\chitietkhuyenmai;
use App\Models\khuyenmai;

use App\Models\sanpham;
use App\Traits\DeleteModelTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class KhuyenMaiController extends Controller
{
    use DeleteModelTrait;
    private $khuyenmai;
    private $sanpham;
    private $chitietkhuyenmai;
    public function __construct(khuyenmai $khuyenmai,sanpham $sanpham,chitietkhuyenmai $chitietkhuyenmai)
    {
        $this->khuyenmai = $khuyenmai;
        $this->sanpham = $sanpham;
        $this->chitietkhuyenmai = $chitietkhuyenmai;
    }

    public function index(){
        Paginator::useBootstrap();
        $khuyenmais = $this->khuyenmai->paginate(10);
        return view('admin.khuyenmai.index',compact('khuyenmais'));
    }
    public function create(){
        return view('admin.khuyenmai.add');
    }
    public function store(Request $request){
        /*
         * active = 0 : chưa bắt đầu
         * active = 1 : đang diễn ra
         * active = 2 : đã kết thúc
         */
        $ngaybd = strtotime($request->ngaybd);
        $ngaykt = strtotime($request->ngaykt);
        $now = strtotime(now());
        $active = 0;

        if ($ngaybd < $now) {
            $active = 1;
        }

        $ngaybd = date('Y-m-d H:i:s',$ngaybd);
        $ngaykt = date('Y-m-d H:i:s',$ngaykt);
        $this->khuyenmai->create([
            'name'=> $request->name,
            'ngaybd'=> $ngaybd,
            'ngaykt'=> $ngaykt,
            'active'=>$active,
        ]);
        return redirect()->route('khuyenmai.index');
    }
    public function edit($id){
        $khuyenmai = $this->khuyenmai->find($id);
        $ngaybd =Carbon::parse($khuyenmai->ngaybd)->format('Y-m-d').'T'.Carbon::parse($khuyenmai->ngaybd)->format('H:i');
        $ngaykt =Carbon::parse($khuyenmai->ngaykt)->format('Y-m-d').'T'.Carbon::parse($khuyenmai->ngaykt)->format('H:i');
        return view('admin.khuyenmai.edit',compact('khuyenmai','ngaybd','ngaykt'));
    }
    public function update($id,Request $request){
        $ngaybd = strtotime($request->ngaybd);
        $ngaykt = strtotime($request->ngaykt);
        $now = strtotime(now());
        $active = 0;

        if ($ngaybd < $now) {
            $active = 1;
        }

        $ngaybd = date('Y-m-d H:i:s',$ngaybd);
        $ngaykt = date('Y-m-d H:i:s',$ngaykt);
        $this->khuyenmai->find($id)->update([
            'name'=> $request->name,
            'ngaybd'=> $ngaybd,
            'ngaykt'=> $ngaykt,
            'active'=>$active,
        ]);
        return redirect()->route('khuyenmai.index');
    }
    public function delete($id){
        return $this->deleteModelTrait($id,$this->khuyenmai);
    }
    public function add_product($id){
        $sanphams = $this->sanpham->all();
        $khuyenmai = $this->khuyenmai->find($id);
        $ngaybd =Carbon::parse($khuyenmai->ngaybd)->format('Y-m-d').'T'.Carbon::parse($khuyenmai->ngaybd)->format('H:i');
        $ngaykt =Carbon::parse($khuyenmai->ngaykt)->format('Y-m-d').'T'.Carbon::parse($khuyenmai->ngaykt)->format('H:i');
        return view('admin.khuyenmai.add_product',compact('khuyenmai','ngaybd','ngaykt','sanphams'));
    }
    public function post_add_product($id,Request $request){
        $khuyenmai = $this->khuyenmai->find($id);
        $idChiTietSanPham = $khuyenmai->sanpham()->sync($request->sanpham);
        foreach ($idChiTietSanPham['attached'] as $key=>$idChiTiet){
            $this->chitietkhuyenmai->find($idChiTiet)->update([
               'soluong'=> $request->soluong[$key],
               'tyle'=> $request->tyle[$key],
            ]);
        }
        return redirect()->route('khuyenmai.index');
    }
}
