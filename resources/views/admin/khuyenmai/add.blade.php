@extends('layouts.admin')
@section('title')
    <title>Thêm khuyến mãi</title>
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
                        <li class="breadcrumb-item active">Thêm khuyến mãi</li>
                    </ol>
                </div>
                <h4 class="page-title">Thêm khuyễn mãi</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('khuyenmai.index')}}" class="btn btn-secondary btn-rounded mb-3">Quay về</a>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form action="{{route('khuyenmai.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="mb-1">Tên khuyến mãi</h5>
                                        <div class="tab-pane show active" id="striped-rows-preview">
                                            <div class="form-floating mb-3">
                                                <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Tên khuyến mãi" />
                                                <label for="floatingInput">Tên danh mục</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="mb-1">Ngày bắt đầu</h5>
                                        <div class="tab-pane show active" id="striped-rows-preview">
                                            <div class="form-floating mb-3">
                                                <input name="ngaybd" type="datetime-local" class="form-control" id="floatingInput" placeholder="Ngày bắt đầu" />
                                                <label for="floatingInput">Ngày bắt đầu</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-1">Ngày kết thúc</h5>
                                        <div class="tab-pane show active" id="striped-rows-preview">
                                            <div class="form-floating mb-3">
                                                <input name="ngaykt" type="datetime-local" class="form-control" id="floatingInput" placeholder="Ngày kết thúc" />
                                                <label for="floatingInput">Ngày kết thúc</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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
@endsection
