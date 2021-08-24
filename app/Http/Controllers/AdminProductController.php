<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use App\Models\hangsanxuat;
use App\Models\sanpham;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\Translation\t;

class AdminProductController extends Controller
{
    use DeleteModelTrait;
    private $sanpham;
    private $danhmuc;
    private $hangsanxuat;
    public function __construct(sanpham $sanpham,danhmuc $danhmuc,hangsanxuat $hangsanxuat)
    {
        $this->sanpham = $sanpham;
        $this->danhmuc = $danhmuc;
        $this->hangsanxuat = $hangsanxuat;
    }

    public function index(){
        Paginator::useBootstrap();
        $sanphams = $this->sanpham->paginate(10);;
        return view('admin.product.index',compact('sanphams'));
    }
    public function create(){
        $danhmucs = $this->danhmuc->all();
        $menus = $this->hangsanxuat->all();
        return view('admin.product.add',compact('danhmucs','menus'));
    }
    public function store(Request $request){
        try {
            DB::beginTransaction();
            $dataSanphamCreate = [
                'tensp'=>$request->tensp,
                'dongia'=>$request->dongia,
                'soluong'=>$request->soluong,
                'cauhinh'=>$request->cauhinh,
                'mota'=>$request->mota,
                'category_id'=>$request->category_id,
                'menu_id'=>$request->menu_id,
                'active'=> 1,
                'view' => 0
            ];
            if ($request->hasFile('hinhanh')){
                $path = $request->hinhanh->storeAS('public/sanpham',$request->hinhanh->getClientOriginalName());
            }
            if (!empty($path)){
                $dataSanphamCreate['hinhanh'] = Storage::url($path);
            }
            $sanpham = $this->sanpham->create($dataSanphamCreate);
            if ($request->hasFile('hinhanhchitiet')){
                foreach ($request->hinhanhchitiet as $fileItem){
                    $path = $fileItem->storeAS('public/sanpham',$fileItem->getClientOriginalName());
                    $sanpham->images()->create([
                        'hinhanhchitiet' => Storage::url($path),
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('product.index');
        } catch (\Exception $exception){
            DB::rollBack();
            Log::error('Message'.$exception->getMessage().'Line : '.$exception->getLine());
        }
    }
    public function getItem($id,$table){
        $html = '';
        foreach ($table as $item){
            if ($item->id==$id){
                $html .= "<option selected value='" . $item->id . "'>" . $item->name . "</option>";
            } else{
                $html .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            }
        }
        return $html;
    }
    public function edit($id){
        $sanpham = $this->sanpham->find($id);
        $danhmucsHtml = $this->getItem($sanpham->category_id,$this->danhmuc->all());
        $menuHtml = $this->getItem($sanpham->menu_id,$this->hangsanxuat->all());
        return view('admin.product.edit',compact('danhmucsHtml','menuHtml','sanpham'));
    }
    public function update($id,Request $request){
        try {
            DB::beginTransaction();
            $dataSanphamUpdate = [
                'tensp'=>$request->tensp,
                'dongia'=>$request->dongia,
                'soluong'=>$request->soluong,
                'cauhinh'=>$request->cauhinh,
                'mota'=>$request->mota,
                'category_id'=>$request->category_id,
                'menu_id'=>$request->menu_id,
                'active'=> 1
            ];
            if ($request->hasFile('hinhanh')){
                $path = $request->hinhanh->storeAS('public/sanpham',$request->hinhanh->getClientOriginalName());
            }
            if (!empty($path)){
                $dataSanphamUpdate['hinhanh'] = Storage::url($path);
            }
            $this->sanpham->find($id)->update($dataSanphamUpdate);
            $sanpham = $this->sanpham->find($id);
            if ($request->hasFile('hinhanhchitiet')){
                foreach ($request->hinhanhchitiet as $fileItem){
                    $path = $fileItem->storeAS('public/sanpham',$fileItem->getClientOriginalName());
                    $sanpham->images()->create([
                        'hinhanhchitiet' => Storage::url($path),
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('product.index');
        } catch (\Exception $exception){
            DB::rollBack();
            Log::error('Message'.$exception->getMessage().'Line : '.$exception->getLine());
        }
    }
    public function delete($id){
        return $this->deleteModelTrait($id,$this->sanpham);
    }
    public function active($id){
        try{
            $number = 1;
            if($this->sanpham->find($id)->active==1){
                $number = 0;
            }
            $this->sanpham->find($id)->update([
                'active'=> $number,
            ]);
            return Response()->json([
                'code'=>200,
                'message'=>'success'
            ],200);
        }catch (\Exception $exception){
            Log::error('Message'.$exception->getMessage().'Line : '.$exception->getLine());
            return Response()->json([
                'code'=>500,
                'message'=>'fail'
            ],500);
        }
    }
}
