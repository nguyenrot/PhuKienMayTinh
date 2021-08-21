@extends('layouts.admin')
@section('title')
    <title>Sản phẩm</title>
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
                            <div class="table-responsive-sm">
                                <table class="table table-striped table-centered m-0" id="striped-rows-preview">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sanphams as $sanpham)
                                        <tr>
                                            <td>{{$sanpham->id}}</td>
                                            <td>{{$sanpham->tensp}}</td>
                                            <td>
                                                <img src="{{asset($sanpham->hinhanh)}}" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                            </td>
                                            <td>{{number_format($sanpham->dongia)}} VND</td>
                                            <td>{{$sanpham->soluong}}</td>
                                            <td>
                                                <div>
                                                    @if($sanpham->active)
                                                        <input type="checkbox" id="{{'switch'.$sanpham->id}}" checked data-switch="success"/>
                                                    @else
                                                        <input type="checkbox" id="{{'switch'.$sanpham->id}}" data-switch="success"/>
                                                    @endif
                                                        <label for="{{'switch'.$sanpham->id}}" data-url="{{route('product.active',['id'=>$sanpham->id])}}" data-on-label="Yes" data-off-label="No" class="mb-0 d-block active_sanpham"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{route('product.edit',['id'=>$sanpham->id])}}" class="btn btn-outline-dark btn-rounded"> <i class="mdi mdi-pencil"></i>Sửa</a>
                                                <a href="javascript: void(0);" data-url="{{route('product.delete',['id'=>$sanpham->id])}}" class="btn btn-outline-dark btn-rounded action_delete"> <i class="mdi mdi-delete"></i>Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 text-center d-flex justify-content-center">
                        {{$sanphams->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('link_js')
    <script src="{{asset('admin_resources/sanpham/index.js')}}"></script>
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@11.js')}}"></script>
    <script src="{{asset('admin_resources/main.js')}}"></script>
@endsection
