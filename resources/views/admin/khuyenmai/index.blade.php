@extends('layouts.admin')
@section('title')
    <title>Khuyến mãi</title>
@endsection
@section('link_css')

@endsection
@section('container-fluid')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">Khuyến mãi</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Khuyến mãi</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('khuyenmai.create')}}" class="btn btn-primary btn-rounded">Thêm khuyến mãi</a>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="striped-rows-preview">
                            <div class="table-responsive-sm">
                                <table class="table table-striped table-centered m-0" id="striped-rows-preview">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên khuyến mãi</th>
                                        <th>Ngày bắt đầu</th>
                                        <th>Ngày kết thúc</th>
                                        <th>Trạng thái</th>
                                        <th>Thêm sản phẩm</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($khuyenmais as $khuyenmai)
                                        <tr>
                                            <td>{{$khuyenmai->id}}</td>
                                            <td>{{$khuyenmai->name}}</td>
                                            <td>{{$khuyenmai->ngaybd}} VND</td>
                                            <td>{{$khuyenmai->ngaykt}}</td>
                                            <td>

                                                @switch($khuyenmai->active)
                                                    @case(0)
                                                        <i class="mdi mdi-circle text-warning"></i> Chưa diễn ra
                                                        @break
                                                    @case(1)
                                                        <i class="mdi mdi-circle text-success"></i> Đang diễn ra
                                                        @break
                                                    @case(2)
                                                        <i class="mdi mdi-circle text-danger"></i> Đã kết thúc
                                                        @break
                                                @endswitch
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-outline-dark btn-rounded"> <i class="mdi mdi-pencil-box-multiple"></i> Thêm sản phẩm</a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-outline-dark btn-rounded"> <i class="mdi mdi-pencil"></i> Sửa</a>
                                                <a href="javascript: void(0);" data-url="" class="btn btn-outline-dark btn-rounded action_delete"> <i class="mdi mdi-delete"></i> Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 text-center d-flex justify-content-center">
                        {{$khuyenmais->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('link_js')
{{--    <script src="{{asset('admin_resources/sanpham/index.js')}}"></script>--}}
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@11.js')}}"></script>
    <script src="{{asset('admin_resources/main.js')}}"></script>
@endsection
