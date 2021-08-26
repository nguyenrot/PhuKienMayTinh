<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use Illuminate\Http\Request;

class SanphamController extends Controller
{
    private $danhmuc;
    public function __construct(danhmuc $danhmuc)
    {
        $this->danhmuc = $danhmuc;
    }

    public function index(){
        $danhmucs = $this->danhmuc->all();
        return view('user.sanpham.index',compact('danhmucs'));
    }
}
