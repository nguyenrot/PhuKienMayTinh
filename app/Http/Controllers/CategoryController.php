<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use DeleteModelTrait;
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
    public function edit($id){
        $danhmucs = $this->danhmuc->find($id);
        return view('admin.category.edit',compact('danhmucs'));
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
