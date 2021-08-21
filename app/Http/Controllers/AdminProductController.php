<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use App\Models\hangsanxuat;
use App\Models\sanpham;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;
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
        $sanphams = $this->sanpham->all();
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
}
