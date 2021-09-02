<?php

namespace App\Http\Controllers;

use App\Models\chitietkhuyenmai;
use App\Models\danhmuc;
use App\Models\sanpham;
use App\Models\User;
use App\Traits\UpdateKhuyenMai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Events\Registered;
class HomeController extends Controller
{
    use UpdateKhuyenMai;
    private $danhmuc;
    private $sanpham;
    private $chitietkhuyenmai;
    private $user;
    public function __construct(danhmuc $danhmuc,sanpham $sanpham,chitietkhuyenmai $chitietkhuyenmai,User $user)
    {
        $this->updateKhuyenMai();
        $this->danhmuc = $danhmuc;
        $this->sanpham = $sanpham;
        $this->chitietkhuyenmai = $chitietkhuyenmai;
        $this->user = $user;
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
            if (auth()->user()->loaitk===2) return redirect()->route('home');
            else return redirect()->route('dashboard.index');
        }
        return redirect()->to('dangnhap');
    }

    public function dangky(){
        if (auth()->check()){
            if (auth()->user()->loaitk===2){
                return redirect()->route('home');
            }
            return redirect()->route('dangxuat');
        }
        return view('user.dangky');
    }

    public function dangkyPost(Request $request){
        try{
            DB::beginTransaction();
            $user = $this->user->create([
                'name' => $request->name,
                'email'=> $request->email,
                'password'=> Hash::make($request->password),
                'loaitk'=>2,
                'active'=>1,
            ]);
            event(new Registered($user));
            DB::commit();
            return redirect()->route('dangnhap');
        } catch (\Exception $exception){
            DB::rollBack();
            Log::error('messenger:'.$exception->getMessage().'---line'.$exception->getLine());
            return redirect()->route('dangky');
        }
    }

    public function dangxuat(Request $request){
        auth()->logout();
//        $request->session()->invalidate();
//        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
