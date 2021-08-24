<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    use Authenticatable;
    public function login(){
        if (auth()->check()){
            return redirect()->route('dashboard.index');
        }
        return view('admin.login');
    }
    public function postLoginAdmin(Request $request){

        $remember = $request->has('remember_me') ? true:false;
        if (auth()->attempt([
            'email' =>$request->email,
            'password' => $request->password,
        ],$remember)){
            return redirect()->route('dashboard.index');
        }
        return redirect()->to('admin');
    }
}
