<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaiKhoanUserController extends Controller
{
    public function __construct()
    {

    }
    public function index(){
        $user = auth()->user();
        return view('user.taikhoan.index',compact('user'));
    }

}
