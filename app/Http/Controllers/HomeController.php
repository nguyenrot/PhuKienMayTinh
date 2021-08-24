<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $danhmuc;
    public function __construct(danhmuc $danhmuc)
    {
        $this->danhmuc = $danhmuc;
    }

    public function index(){
        return view('user.home.index');
    }
}
