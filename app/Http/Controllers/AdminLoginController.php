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
            if (auth()->user()->loaitk===3 && auth()->user()->loaitk===1){
                return redirect()->route('dashboard.index');
            }
            return redirect()->route('home');
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
    public function logout(Request $request){
        auth()->logout();
//        $request->session()->invalidate();
//        $request->session()->regenerateToken();
        return redirect()->route('danhnhapAdmin');
    }
}
