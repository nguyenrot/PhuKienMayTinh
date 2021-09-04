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
    public function delete($id){
        $donhang = $this->donhang->find($id);
        if ($donhang->trangthai==1){
            if($donhang->user_id==auth()->user()->id){
                $donhang->update([
                    'trangthai'=>0,
                ]);
            }
            return redirect()->route('donhang.index');
        }
        return redirect()->route('donhang.index');
    }
    public function view($id){
        $donhang = $this->donhang->find($id);
        if (isset($donhang)){
            if($donhang->user_id==auth()->user()->id){
                $chitietdonhang = $donhang->chitietdonhang;
                return view('user.donhang.view',compact('donhang','chitietdonhang'));
            }
            return redirect()->route('donhang.index');
        }
        return redirect()->route('donhang.index');
    }
}
