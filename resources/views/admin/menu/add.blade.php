@extends('layouts.admin')
@section('title')
    <title>Thêm hãng phụ kiện</title>
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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                        <li class="breadcrumb-item active">Thêm hãng phụ kiện</li>
                    </ol>
                </div>
                <h4 class="page-title">Thêm hãng phụ kiện</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('menu.index')}}" class="btn btn-secondary btn-rounded ">Quay về</a>
                    <div class="tab-content">
                        <form action="{{route('menu.store')}}" method="post">
                            @csrf
                            <h5 class="mb-1 mt-3">Tên hãng phụ kiện</h5>
                            <div class="tab-pane show active" id="striped-rows-preview">
                                <div class="form-floating mb-3">
                                    <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Tên hãng phụ kiện" />
                                    <label for="floatingInput">Tên hãng phụ kiện</label>
                                </div>
                            </div>
                            <h5 class="mb-1 mt-3">Mô tả</h5>
                            <div class="form-floating">
                                <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                                <label for="floatingTextarea">Mô tả</label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('link_js')

@endsection
