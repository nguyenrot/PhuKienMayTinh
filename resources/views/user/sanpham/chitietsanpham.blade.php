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
                                <div class="col-lg-6">
                                    <!-- Product image -->
                                    <a href="javascript: void(0);" class="text-center d-block mb-4">
                                        <img src="{{asset('adminv18/assets/images/products/product-5.jpg')}}" class="img-fluid" style="max-width: 280px;" alt="Product-img">
                                    </a>

                                    <div class="d-lg-flex d-none justify-content-center">
                                        <a href="javascript: void(0);">
                                            <img src="{{asset('adminv18/assets/images/products/product-1.jpg')}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img">
                                        </a>
                                        <a href="javascript: void(0);" class="ms-2">
                                            <img src="{{asset('adminv18/assets/images/products/product-6.jpg')}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img">
                                        </a>
                                        <a href="javascript: void(0);" class="ms-2">
                                            <img src="{{asset('adminv18/assets/images/products/product-3.jpg')}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img">
                                        </a>
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

                                    <div class="mt-3">
                                        <h4><span class="badge badge-success-lighten">Instock</span></h4>
                                    </div>

                                    <!-- Product description -->
                                    <div class="mt-4">
                                        <h6 class="font-20"><i class="mdi mdi-star-outline text-danger"></i> Đơn giá:</h6>
                                        <h3> {{number_format($sanpham->dongia)}} VNĐ</h3>
                                    </div>

                                    <!-- Quantity -->
                                    <div class="mt-4">
                                        <h6 class="font-20"><i class="mdi mdi-star-outline text-danger"></i> Số lượng:</h6>
                                        <div class="d-flex">
                                            <input type="number" min="1" value="1" class="form-control" placeholder="Qty" style="width: 90px;">
                                            <button type="button" class="btn btn-danger ms-2"><i class="mdi mdi-cart me-1"></i>Thêm vào giỏ hàng</button>
                                        </div>
                                    </div>

                                    <!-- Product description -->
                                    <div class="mt-4">
                                        <h6 class="font-20 pb-2"><i class="mdi mdi-star-outline text-danger"></i> Cấu hình:</h6>
                                        <h5 class="cauhinh mt-2">
                                            {!! $sanpham->cauhinh !!}
                                        </h5>
                                    </div>
                                    <!-- Product information -->
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
        </div>
    </section>

@endsection()
