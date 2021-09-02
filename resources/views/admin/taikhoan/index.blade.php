@extends('layouts.admin')
@section('title')
    <title>Tài khoản</title>
@endsection
@section('link_css')

@endsection
@section('container-fluid')
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">Tài khoản</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Tài khoản</h4>
            </div>
        </div>
    </div>
    <div class="row font-18 d-flex justify-content-center">
        <div class="col-8">
            <div class="card bg-primary">
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
                                        <h4 class="mt-1 font-20 mb-1 text-white">{{$user->name}}</h4>
                                        <p class="font-18 text-dark">{{$user->email}}</p>

                                        <ul class="mb-0 list-inline text-light">
                                            <li class="list-inline-item me-3">
                                                <h5 class="mb-1">Chức vụ</h5>
                                                <p class="mb-0 font-18 text-dark">{{$user->loaitaikhoan->name}}</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-1">Trạng thái</h5>
                                                <p class="mb-0 font-18 text-dark">Đang hoạt động</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-sm-4">
                            <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                <button type="button" class="btn btn-light">
                                    <i class="mdi mdi-account-edit me-1"></i> Chỉnh sửa
                                </button>
                            </div>
                            <div class="text-center mt-sm-0 mt-3 text-sm-end pt-3">
                                <button type="button" class="btn btn-light">
                                    <i class="mdi mdi-account-edit me-1"></i> Đổi mật khẩu
                                </button>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row -->

                </div> <!-- end card-body/ profile-user-box-->
            </div>
        </div>
    </div>
@endsection
@section('link_js')
    <script src="{{asset('admin_resources/sanpham/index.js')}}"></script>
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@11.js')}}"></script>
    <script src="{{asset('admin_resources/main.js')}}"></script>
@endsection
