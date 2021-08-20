@extends('layouts.admin')
@section('title')
    <title>Thêm sản phẩm</title>
@endsection
@section('link_css')
    <link href="{{asset('adminv18/assets/css/vendor/simplemde.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminv18/assets/css/vendor/quill.bubble.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('container-fluid')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sản phẩm</a></li>
                        <li class="breadcrumb-item active">Thêm sản phẩm</li>
                    </ol>
                </div>
                <h4 class="page-title">Thêm sản phẩm</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('menu.index')}}" class="btn btn-secondary btn-rounded mb-3">Quay về</a>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="form-row-preview">
                            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Danh mục</label>
                                        <select id="inputState" class="form-select">
                                            <option>Choose</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Hãng phụ kiện</label>
                                        <select id="inputState" class="form-select">
                                            <option>Choose</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="inputEmail4" class="form-label">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Tên sản phẩm">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputEmail4" class="form-label">Giá sản phẩm</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Giá sản phẩm">
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="inputEmail4" class="form-label">Số lượng</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Số lượng">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputEmail4" class="form-label">Ảnh đại diện</label>
                                        <input type="file" class="form-control" id="inputEmail4">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="inputEmail4" class="form-label">Cấu hình</label>
                                    <textarea id="simplemde1" placeholder="Nhập cấu hình"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail4" class="form-label">Mô tả</label>
                                    <textarea name="content" id="editor" placeholder="Nhập mô tả"></textarea>
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
