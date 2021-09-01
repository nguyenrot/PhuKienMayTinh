<?php

namespace App\Http\Controllers;

use App\Models\chitietkhuyenmai;
use App\Models\danhmuc;
use App\Models\sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    private $danhmuc;
    private $sanpham;
    private $chitietkhuyenmai;
    public function __construct(danhmuc $danhmuc,sanpham $sanpham,chitietkhuyenmai $chitietkhuyenmai)
    {
        $this->danhmuc = $danhmuc;
        $this->sanpham = $sanpham;
        $this->chitietkhuyenmai = $chitietkhuyenmai;
    }

    public function index(){
        if(auth()->check() && auth()->user()->loaitk !== 2){
            return redirect()->route('dangxuat');
        }
        $danhmucs = $this->danhmuc->get();
        $sanphamnew = $this->sanpham->latest()->take(6)->get();
        $sanphamlike = $this->sanpham->latest('view','desc')->take(2)->get();
        $sanphamkhuyenmai = $this->chitietkhuyenmai->where('active',1)->latest()->take(3)->get();
        return view('user.home.index',compact('danhmucs','sanphamnew','sanphamlike','sanphamkhuyenmai'));
    }

    public function dangnhap(){
        if (auth()->check()){
            if (auth()->user()->loaitk===2){
                return redirect()->route('home');
            }
            return redirect()->route('dangxuat');
        }
        return view('user.dangnhap');
    }
    public function dangnhapPost(Request $request){
        $remember = $request->has('remember_me') ? true:false;
        if (auth()->attempt([
            'email' =>$request->email,
            'password' => $request->password,
        ],$remember)){
            return redirect()->route('home');
        }
        return redirect()->to('dangnhap');
    }
    public function dangky(){
        return view('user.dangky');
    }
    public function dangxuat(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
