@extends('layouts.admin')
@section('title')
    <title>Sản phẩm</title>
@endsection
@section('link_css')
    <link href="{{asset('sbAdmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('container-fluid')
    <div class="container-fluid">
        <h1 class="text-primary h3 mb-4 font-weight-bold text-gray-800 ">Sản phẩm</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('menu.create')}}" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                    <span class="text">Thêm hãng phụ kiện</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên danh mục</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach($menus as $menu)--}}
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td class="w-25 p-3">
                                    <div class="text-center">
                                        <a href="" class="btn btn-warning btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                                <i class="far fa-edit"></i>
                                            </span>
                                            <span class="text">Sửa</span>
                                        </a>
                                        <a href="#" data-url="" class="btn btn-danger btn-icon-split btn-sm action_delete">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Xóa</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('link_js')
    <script src="{{asset('sbAdmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbAdmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('sbAdmin/js/demo/datatables-demo.js')}}"></script>
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
