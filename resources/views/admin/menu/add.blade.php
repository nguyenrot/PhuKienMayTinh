@extends('layouts.admin')
@section('title')
    <title>Thêm hãng phụ kiện</title>
@endsection
@section('link_css')

@endsection
@section('container-fluid')
    <div class="container-fluid">
        <h1 class="h3 mb-4 font-weight-bold text-gray-800 text-primary">Thêm hãng phụ kiện</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('menu.index')}}" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                    <span class="text">Quay lại</span>
                </a>
            </div>
            <div class="card-body">
                <form action="{{route('menu.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên hãng phụ kiện</label>
                        <input name="name" type="text" class="form-control" placeholder="Nhập tên hãng phụ kiện">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả</label>
                        <textarea name="description" id="" rows="5" class="form-control" placeholder="Mô tả "></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('link_js')
    <script>
        $(document).ready(
            function () {
                const active = $('.menu').addClass('active');
                active.find('.nav-link.collapsed').attr("aria-expanded","true");
                active.find('.nav-link.collapsed').removeClass('collapsed');
                active.find('.collapse').addClass('show');
                active.find('.create').addClass('active');
            }
        );
    </script>
@endsection
