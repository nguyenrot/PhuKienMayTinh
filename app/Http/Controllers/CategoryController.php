<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{
    use DeleteModelTrait;
    private $danhmuc;
    public function __construct(danhmuc $danhmuc)
    {
        $this->danhmuc = $danhmuc;
    }

    public function index(){
        Paginator::useBootstrap();
        $danhmucs = $this->danhmuc->paginate(10);
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
    public function edit($id){
        $danhmuc = $this->danhmuc->find($id);
        return view('admin.category.edit',compact('danhmuc'));
    }
    public function update($id,Request $request){
        $this->danhmuc->find($id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return redirect()->route('categories.index');
    }
    public function delete($id){
        return $this->deleteModelTrait($id,$this->danhmuc);
    }
}
