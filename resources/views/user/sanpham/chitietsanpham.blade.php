@extends('layouts.sanpham_layout')
@section('title')
    <title>{{$sanpham->tensp}}</title>
@endsection
@section('link_css_sp')
    <link rel="stylesheet" href="{{asset('admin_resources/user_sanpham/chitiet.css')}}">
@endsection()
@section('link_js_sp')
    <script src="{{asset('admin_resources/user_sanpham/chitiet.js')}}"></script>

@endsection()
@section('content')

    <section>
        <div class="container">

            <div class="row mt-4 mb-1">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 d-flex">
                                    <div class="sanpham-images ">
                                        <div class="text-center d-block mb-4 active-sp">
                                            <img src="{{asset($sanpham->hinhanh)}}" class="img-fluid hinhanh-chinh" style="max-width: 350px;" alt="Product-img">
                                        </div>
                                        <div class="d-lg-flex d-none justify-content-center hinhanh-chitiet">
                                            <a href="javascript: void(0);" class="p-2 ">
                                                <img src="{{asset($sanpham->hinhanh)}}"
                                                     data-url="{{asset($sanpham->hinhanh)}}"
                                                     class="img-fluid img-thumbnail p-2 active-sp image-sp" style="max-width: 75px;" alt="Product-img">
                                            </a>
                                            @foreach($sanpham->images as $itemImage)
                                                <a href="javascript: void(0);" class="p-2 ">
                                                    <img src="{{asset($itemImage->hinhanhchitiet)}}"
                                                         data-url="{{asset($itemImage->hinhanhchitiet)}}"
                                                         class="img-fluid img-thumbnail p-2 image-sp" style="max-width: 75px;" alt="Product-img">
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h2 class="mt-0 text-primary">{{$sanpham->tensp}}<a href="javascript: void(0);" class="text-muted"><i class="mdi mdi-shield-star-outline text-danger ms-2"></i></a> </h2>
                                    <p class="mb-1">5 đánh giá</p>
                                    <p class="font-16">
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                    </p>

                                    <div class="mt-3 d-flex d-flex justify-content-start">
                                        <h3 class="tag"><span class="badge badge-success-lighten"><a href="{{route('sanpham.danhmuc',['id'=>$sanpham->category_id])}}" class="text-success">{{$sanpham->category->name}}</a></span></h3>
                                        <h3 class="tag"><span class="badge badge-success-lighten"><a href="{{route('sanpham.hangsanxuat',['id'=>$sanpham->menu_id])}}" class="text-success">{{$sanpham->menu->name}}</a></span></h3>
                                    </div>

                                    @if($sanpham->khuyenmai()->where('active',1)->count()==0)
                                    <div class="mt-4">
                                        <h6 class="font-20"><i class="mdi mdi-star-outline text-danger"></i> Đơn giá:</h6>
                                        <h3 class="dongia-sp" data-dg="{{$sanpham->dongia}}"> {{number_format($sanpham->dongia)}} VNĐ</h3>
                                    </div>
                                    @else
                                        <div class="mt-4">
                                            <h6 class="font-20"><i class="mdi mdi-star-outline text-danger"></i> Đơn giá: <span class="text-danger">Giảm {{$sanpham->khuyenmai[0]->tyle}} %</span></h6>
                                            <h3 class="dongia-sp" data-dg="{{doubleval($sanpham->dongia) - (doubleval($sanpham->dongia)*((doubleval($sanpham->khuyenmai[0]->tyle))/100))}}">
                                                <span class="text-warning font-16">Chỉ còn </span>
                                                {{number_format(doubleval($sanpham->dongia) - (doubleval($sanpham->dongia)*((doubleval($sanpham->khuyenmai[0]->tyle))/100)))}} VNĐ</h3>
                                        </div>
                                    @endif

                                    <div class="mt-4">
                                        <h6 class="font-20"><i class="mdi mdi-star-outline text-danger"></i> Số lượng:</h6>
                                        <div class="d-flex">
                                            <input type="number" min="1" value="1" class="form-control soluong-sp" placeholder="Qty" style="width: 90px;">
                                            <button type="button" data-url="{{route('giohang.add',['id'=>$sanpham->id])}}" class="btn btn-danger ms-2 btn-add-cart"><i class="mdi mdi-cart me-1"></i>Thêm vào giỏ hàng</button>
                                        </div>
                                    </div>


                                    <div class="mt-4">
                                        <h6 class="font-20 pb-2"><i class="mdi mdi-star-outline text-danger"></i> Cấu hình:</h6>
                                        <h5 class="cauhinh mt-2">
                                            <div data-simplebar style="max-height: 250px;">
                                                {!! $sanpham->cauhinh !!}
                                            </div>
                                        </h5>
                                    </div>

                                    <div class="mt-1 d-grid">
                                        <button type="button" class="btn btn btn-xs btn-outline-dark btn-rounded btn-mota"><span class="font-20">Mô tả sản phẩm</span></button>
                                        <div class="modal-mota-sanpham d-none">
                                            <div class="modal-mota ">
                                                <div class="model-mota-header d-flex justify-content-between">
                                                    <h3 class="modal-title text-success" id="myCenterModalLabel">{{$sanpham->tensp}}</h3>
                                                    <button type="button" class="btn btn-outline-dark btn-rounded btn-mota-close"><i class="mdi mdi-close"></i></button>
                                                </div>
                                                <div class="model-mota-body">
                                                        <div class="model-mota-body-p ">
                                                        {!! $sanpham->mota !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mb-3 mt-4">Đánh giá và bình luận</h3>
                                </div>
                            </div>
                            <div class="row" data-plugin="dragula" data-containers='["company-list-left", "company-list-right"]'>
                                <div class="col-md-6">
                                    <div class="bg-dragula p-2 p-lg-4">
                                        <h5 class="font-20 mt-0">Bình luận</h5>
                                        <div data-simplebar style="max-height: 600px;">
                                            <div id="company-list-left" class="py-2">
                                                <div class="card mb-0 mt-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start">
                                                            <div class="w-100 overflow-hidden">
                                                                <div class=" d-flex justify-content-between">
                                                                    <h4 class="font-20 text-primary mb-1 mt-0">Phạm Kỷ Nguyên</h4>
                                                                    <p class="font-16">
                                                                        <span class="text-warning mdi mdi-star"></span>
                                                                        <span class="text-warning mdi mdi-star"></span>
                                                                        <span class="text-warning mdi mdi-star"></span>
                                                                        <span class="text-warning mdi mdi-star"></span>
                                                                        <span class="text-warning mdi mdi-star"></span>
                                                                    </p>
                                                                </div>
                                                                <p class="f"> 1 phút trước </p>
                                                                <p class="mb-0 text-muted">
                                                                    <span class="font-18 fst-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="bg-dragula p-2 p-lg-4">
                                        <h5 class="font-20 mt-0">Hãy đánh giá và binh luận</h5>
                                        <div id="company-list-left" class="py-2">
                                            <div class="card mb-0 mt-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start">
                                                        <div class="w-100 overflow-hidden">
                                                            <h4 class="font-20 text-primary mb-0 mt-0">Đánh giá</h4>
                                                            <div class="rating">
                                                                <input type="radio" name="rating" value="5" id="5">
                                                                <label for="5">☆</label>
                                                                <input type="radio" name="rating" value="4" id="4">
                                                                <label for="4">☆</label>
                                                                <input type="radio" name="rating" value="3" id="3">
                                                                <label for="3">☆</label>
                                                                <input type="radio" name="rating" value="2" id="2">
                                                                <label for="2">☆</label>
                                                                <input type="radio" name="rating" value="1" id="1">
                                                                <label for="1">☆</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start">
                                                        <div class="w-100 overflow-hidden">
                                                            <h4 class="font-20 text-primary mb-1 mt-0">Bình luận của bạn</h4>
                                                            <div class="d-flex mb-2">
                                                                <div class="w-100 border rounded">
                                                                    <textarea name="" id="" class="form-control border-0 resize-none" placeholder="Viết bình luận" rows="5"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="float-end font-16 btn btn-sm btn-success"><i class="uil uil-message me-1"></i>Gửi</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection()
