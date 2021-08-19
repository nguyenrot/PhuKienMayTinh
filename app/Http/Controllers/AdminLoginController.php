<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    use Authenticatable;
    public function login(){
        return view('admin.login');
    }
}
