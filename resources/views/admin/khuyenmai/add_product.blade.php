@extends('layouts.admin')
@section('title')
    <title>Thêm sản phẩm khuyến mãi</title>
@endsection
@section('link_css')
    <link href="{{asset('adminv18/assets/css/vendor/simplemde.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminv18/assets/css/vendor/quill.bubble.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('vendor/FroalaEditer/froala_editor.pkgd.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('container-fluid')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Khuyến mãi</a></li>
                        <li class="breadcrumb-item active">Thêm sản phẩm</li>
                    </ol>
                </div>
                <h4 class="page-title">Thêm sản phẩm khuyến mãi</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('khuyenmai.index')}}" class="btn btn-secondary btn-rounded">Quay về</a>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <div class="row">
                                <div class="col-3">
                                    <h5 class="mb-1">Tên khuyến mãi</h5>
                                    <div class="card text-white bg-info overflow-hidden">
                                        <div class="card-body">
                                            <div class="toll-free-box text-center">
                                                <h4> <i class="mdi mdi-sale"></i>{{$khuyenmai->name}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <h5 class="mb-1">Ngày bắt đầu</h5>
                                    <div class="card text-white bg-danger overflow-hidden">
                                        <div class="card-body">
                                            <div class="toll-free-box text-center">
                                                <h4> <i class="mdi mdi-calendar-start"></i>{{$khuyenmai->ngaybd}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <h5 class="mb-1">Ngày kết thúc</h5>
                                    <div class="card text-white bg-success overflow-hidden">
                                        <div class="card-body">
                                            <div class="toll-free-box text-center">
                                                <h4> <i class="mdi mdi-calendar-end"></i>{{$khuyenmai->ngaykt}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <h5 class="mb-1">Trạng thái</h5>
                                    <div class="card text-white bg-warning overflow-hidden">
                                        <div class="card-body">
                                            <div class="toll-free-box text-center">
                                                @switch($khuyenmai->active)
                                                    @case(0)
                                                        <h4> <i class="mdi mdi-progress-clock"></i>Chưa diễn ra</h4>
                                                        @break
                                                    @case(1)
                                                        <h4> <i class="mdi mdi-progress-check"></i>
                                                            Đang diễn ra
                                                        </h4>
                                                        @break
                                                    @case(2)
                                                        <h4> <i class="mdi mdi-progress-close"></i>Đã kết thúc</h4>
                                                        @break
                                                @endswitch
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
                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form action="{{route('khuyenmai.post_add_product',['id'=>$khuyenmai->id])}}" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="mb-1">Sản phẩm khuyến mãi</h5>
                                        <table class="table tblChiTietKhuyenMai table-bordered border-dark table-centered mt-3 mb-0">
                                            <tr class="trAppended" style="display: none">
                                                <td>
                                                    <select name="sanpham" class="ddlSanPham form-select" id="example-select">
                                                        @foreach($sanphams as $sanpham)
                                                            <option value="{{$sanpham->id}}">{{$sanpham->tensp}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <input name="soluong" type="text" id="simpleinput" class="form-control txtSoLuong" value="0">
                                                </td>
                                                <td>
                                                    <input name="tyle" type="text" id="simpleinput" class="form-control txtTyLeKhuyenMai" value="0">
                                                </td>
                                                <td>
                                                    @if($khuyenmai->active==0)
                                                        <button name="tyle" type="button" class="btn  btn-rounded"><i class="fa fa-times"></i></button>
                                                    @else
                                                        <input type="checkbox" id="" checked data-switch="success"/>
                                                        <label for="" data-on-label="Yes" data-off-label="No"></label>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button name="tyle" type="button" class="btn btn-outline-dark btn-rounded btnDelete"><i class="fa fa-times"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="trFirstChild" data-id="-1">
                                                <th>Sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Tỷ lệ khuyễn mãi (%)</th>
                                                @if($khuyenmai->active!=2)
                                                    <th>Active</th>
                                                    <th>Xóa</th>
                                                @endif
                                            </tr>
                                            @foreach($chitietkhuyenmais as $chitietkhuyenmai)
                                                <tr class="trAppended bg-light" data-id="{{++$i}}">
                                                    <td>
                                                        <select class="ddlSanPham form-select" name="sanpham" id="example-select" >
                                                            <option value="{{$chitietkhuyenmai->product->id}}">{{$chitietkhuyenmai->product->tensp}}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input name="soluong" type="text" id="simpleinput" class="form-control txtSoLuong" value="{{$chitietkhuyenmai->soluong}}">

                                                    </td>
                                                    <td>
                                                        <input name="tyle" type="text" id="simpleinput" class="form-control txtTyLeKhuyenMai" value="{{$chitietkhuyenmai->tyle}}">
                                                    </td>
                                                    @if($khuyenmai->active!=2)
                                                        @if($khuyenmai->active!=0)
                                                        <td class="table-action">
                                                            @if($chitietkhuyenmai->active)
                                                                <input type="checkbox" id="{{'switch'.$chitietkhuyenmai->id}}" checked data-switch="success"/>
                                                            @else
                                                                <input type="checkbox" id="{{'switch'.$chitietkhuyenmai->id}}" data-switch="success"/>
                                                            @endif
                                                            <label for="{{'switch'.$chitietkhuyenmai->id}}"
                                                                   data-url="{{route('khuyenmai.active_product',['id'=>$chitietkhuyenmai->id])}}" data-on-label="Yes"
                                                                   data-off-label="No" class="mb-0 d-block active_sanphamkhuyenmai"></label>
                                                        </td>
                                                        @else
                                                            <td>
                                                                <button name="tyle" type="button" class="btn  btn-rounded"><i class="fa fa-times"></i></button>
                                                            </td>
                                                        @endif
                                                        <td>
                                                            <button name="tyle" type="button" class="btn  btn-rounded"><i class="fa fa-times"></i></button>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    @if($khuyenmai->active == 2)
                                        <button name="tyle" type="button" class="btn  btn-rounded"><i class="fa fa-times"></i></button>
                                    @else
                                        <input type="button" value="Thêm sản phẩm" class="btn btn-outline-dark btn-rounded"  id="btnAdd" />
                                        <button type="submit" class="btn btn-primary btn-rounded" >Lưu sản phẩm khuyến mãi</button>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('link_js')
    <script src="{{asset('adminv18/assets/js/vendor/simplemde.min.js')}}"></script>
    <script src="{{asset('adminv18/assets/js/pages/demo.simplemde.js')}}"></script>
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@11.js')}}"></script>
    <script src="{{asset('admin_resources/khuyenmai/add_product.js')}}"></script>
@endsection
