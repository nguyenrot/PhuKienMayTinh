@extends('layouts.admin')
@section('title')
    <title>Sản phẩm</title>
@endsection
@section('link_css')
    <link href="{{asset('adminv18/assets/css/vendor/dataTables.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminv18/assets/css/vendor/responsive.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('container-fluid')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">Sản phẩm</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Sản phẩm</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('product.create')}}" class="btn btn-primary btn-rounded">Thêm sản phẩm</a>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="striped-rows-preview">
                            <div class="table-responsive-sm mt-3">
                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Hình ảnh</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sanphams as $sanpham)
                                        <tr>
                                            <td>{{$sanpham->id}}</td>
                                            <td>{{$sanpham->tensp}}</td>
                                            <td>{{$sanpham->dongia}}</td>
                                            <td>{{$sanpham->soluong}}</td>
                                            <td>
                                                <img src="{{asset($sanpham->hinhanh)}}" alt="image" class="img-fluid avatar-sm">
                                            </td>
                                            <td>
                                                <a href="{{route('menu.edit',['id'=>$sanpham->id])}}" class="btn btn-outline-dark btn-rounded"> <i class="mdi mdi-pencil"></i>Sửa</a>
                                                <a href="javascript: void(0);" data-url="{{route('menu.delete',['id'=>$sanpham    ->id])}}" class="btn btn-outline-dark btn-rounded action_delete"> <i class="mdi mdi-delete"></i>Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('link_js')
    <script src="{{asset('adminv18/assets/js/vendor/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminv18/assets/js/vendor/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('adminv18/assets/js/vendor/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('adminv18/assets/js/vendor/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{asset('adminv18/assets/js/pages/demo.datatable-init.js')}}"></script>
    <script>
        $(document).ready(
            function () {
                const active = $('.product').addClass('active');
                active.find('.nav-link.collapsed').attr("aria-expanded","true");
                active.find('.nav-link.collapsed').removeClass('collapsed');
                active.find('.collapse').addClass('show');
                active.find('.index').addClass('active');
            }
        );
    </script>
    <script src="{{asset('sbAdmin/vendor/sweetAlert2/sweetalert2@11.js')}}"></script>
    <script src="{{asset('admin_resources/main.js')}}"></script>
@endsection
