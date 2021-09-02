<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaiKhoanAdminController extends Controller
{
    public function __construct()
    {

    }
    public function index(){
        $user = auth()->user();
        return view('admin.taikhoan.index',compact('user'));
    }
}
