<?php

namespace App\Http\Controllers;

use App\Models\khuyenmai;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class KhuyenMaiController extends Controller
{

    private $khuyenmai;
    public function __construct(khuyenmai $khuyenmai)
    {
        $this->khuyenmai = $khuyenmai;
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
}
