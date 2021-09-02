@extends('layouts.sanpham_layout')
@section('title')
    <title>New Shop | Giỏ hàng</title>
@endsection
@section('link_css_sp')

@endsection()
@section('content')

<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <h2 class="mb-3 mt-4">Tài khoản</h2>
            </div>
        </div>
        <div class="row font-18 d-flex justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body profile-user-box">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-lg">
                                        <span class="avatar-title bg-secondary rounded">
                                            <i class="display-6 uil uil-user-square" style="font-size: 95px"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <h4 class="mt-1 font-20 mb-1 text-primary">{{$user->name}}</h4>
                                            <p class="font-18 text-dark">{{$user->email}}</p>

                                            <ul class="mb-0 list-inline text-light">
                                                <li class="list-inline-item me-3">
                                                    <h5 class="mb-1 text-primary">Trạng thái</h5>
                                                    <p class="mb-0 font-18 text-dark">Đang hoạt động</p>
                                                </li>
                                                <li class="list-inline-item ">
                                                    <h5 class="mb-1 text-primary">Số đơn hàng đã mua </h5>
                                                    <p class="mb-0 font-18 text-dark">{{$user->loaitaikhoan->name}}</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-sm-4">
                                <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                    <button type="button" class="btn btn-dark">
                                        <i class="mdi mdi-account-edit me-1"></i> Chỉnh sửa
                                    </button>
                                </div>
                                <div class="text-center mt-sm-0 mt-3 text-sm-end pt-3">
                                    <button type="button" class="btn btn-dark">
                                        <i class="mdi mdi-account-edit me-1"></i> Đổi mật khẩu
                                    </button>
                                </div>
                            </div> <!-- end col-->
                        </div> <!-- end row -->

                    </div> <!-- end card-body/ profile-user-box-->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection()
