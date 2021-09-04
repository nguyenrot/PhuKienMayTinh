<?php

namespace App\Http\Controllers;

use App\Models\chitietdonhang;
use App\Models\donhang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use SebastianBergmann\Diff\Exception;

class DatHangController extends Controller
{
    private $donhang;
    private $chitietdonhang;
    public function __construct(donhang $donhang,chitietdonhang $chitietdonhang)
    {
        $this->chitietdonhang = $chitietdonhang;
        $this->donhang = $donhang;
    }
    public function dathang(){
        if(!auth()->check()){
            return redirect()->route('home');
        }
        $carts = session()->get('cart');
        if (empty($carts)){
            return redirect()->route('giohang.index');
        }
        session()->put('donhang',$carts);
        $hoadon = session()->get('donhang');
        $tongtien = 0;
        foreach ($hoadon as $item){
            $tongtien += $item['dongia'];
        }
        return view('user.dathang.index',compact('hoadon','tongtien'));
    }
    public function dathangpost(Request $request){
        /*
         * trạng thái 1 : đơn hàng chờ duyệt
         * trạng thái 2 : đơn hàng đã duyệt - chờ giao
         * trạng thái 3 : đơn hàng đã giao
         * trạng thái 0 : đơn hàng đã hủy
         * */
        try {
            $carts = session()->get('cart');
            if (empty($carts)){
                return redirect()->route('giohang.index');
            }
            DB::beginTransaction();
            $diachi = $request->diachi . ", ".$request->phuong . ", ".$request->quan. ", ".$request->thanhpho. ", ";
            $donang = $this->donhang->create([
                'diachi'=>$diachi,
                'user_id'=>auth()->user()->id,
                'phone'=>$request->phone,
                'trangthai'=>1,
                'ghichu'=>$request->ghichu,
            ]);
            foreach ($carts as $id=>$item){
                $this->chitietdonhang->create([
                    'donhang_id'=>$donang->id,
                    'sanpham_id'=>$id,
                    'soluong'=>$item['soluong'],
                    'dongia'=>$item['dongia']
                ]);
            }
            $request->session()->forget('cart');
            DB::commit();
            return Response()->json([
                'code'=>200,
                'message'=>'success'
            ],200);
        } catch (\Exception $exception){
            DB::rollBack();
            Log::error('Message'.$exception->getMessage().'Line : '.$exception->getLine());
            return Response()->json([
                'code'=>500,
                'message'=>'fail'
            ],500);
        }
    }
}
