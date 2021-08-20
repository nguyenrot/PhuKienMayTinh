@extends('layouts.admin')
@section('title')
    <title>Hãng phụ kiện</title>
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
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">Hãng phụ kiện</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Hãng phụ kiện</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('menu.create')}}" class="btn btn-primary btn-rounded">Thêm hãng phụ kiện</a>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="striped-rows-preview">
                            <div class="table-responsive-sm">
                                <table class="table table-striped table-centered mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên danh mục</th>
                                        <th>Mô tả</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($menus as $menu)
                                        <tr>
                                            <td>{{$menu->id}}</td>
                                            <td>{{$menu->name}}</td>
                                            <td>{{$menu->description}}</td>
                                            <td class="table-action">
                                                <a href="{{route('menu.edit',['id'=>$menu->id])}}" class="btn btn-outline-dark btn-rounded"> <i class="mdi mdi-pencil"></i>Sửa</a>
                                                <a href="javascript: void(0);" data-url="{{route('menu.delete',['id'=>$menu->id])}}" class="btn btn-outline-dark btn-rounded action_delete"> <i class="mdi mdi-delete"></i>Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="mt-3 text-center d-flex justify-content-center">
                        {{$menus->links()}}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('link_js')
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@11.js')}}"></script>
    <script src="{{asset('admin_resources/main.js')}}"></script>
@endsection
