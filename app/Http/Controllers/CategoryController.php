<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $danhmuc;
    public function __construct(danhmuc $danhmuc)
    {
        $this->danhmuc = $danhmuc;
    }

    public function index(){
        $danhmucs = $this->danhmuc->all();
        return view('admin.category.index',compact('danhmucs'));
    }
    public function create(){
        return view('admin.category.add');
    }
    public function store(Request $request){
        $this->danhmuc->create([
           'name'=>$request->name,
           'description'=>$request->description,
        ]);
        return redirect()->route('categories.index');
    }
}
