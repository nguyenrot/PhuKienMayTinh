@extends('layouts.sanpham_layout')
@section('title')
    <title>New Shop | Đơn hàng</title>
@endsection
@section('link_css_sp')

@endsection()
@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h2 class="mb-3 mt-4">Đơn hàng</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3 font-18">
                                <li class="nav-item">
                                    <a href="#choduyet" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                        <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Đơn hàng chờ duyệt</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#danggiao" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                        <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Đơn hàng đã duyệt - đang giao</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#dagiao" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Đơn hàng đã giao</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#huy" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Đơn hàng đã hủy</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane show active" id="choduyet">
                                    @if(count($donhangchoduyet)==0)
                                        <div class="row text-center">
                                            <h3>Không có đơn hàng chờ duyệt</h3>
                                        </div>
                                    @else
                                    @include('user.donhang.partials.choduyet')
                                    @endif
                                </div>
                                <div class="tab-pane" id="danggiao">
                                    @if(count($donhangdanggiao)==0)
                                        <div class="row text-center">
                                            <h3>Không có đơn hàng đang giao</h3>
                                        </div>
                                    @else
                                        @include('user.donhang.partials.danggiao')
                                    @endif
                                </div>
                                <div class="tab-pane" id="dagiao">
                                    @if(count($donhangdagiao)==0)
                                        <div class="row text-center">
                                            <h3>Không có đơn hàng đã giao</h3>
                                        </div>
                                    @else
                                        @include('user.donhang.partials.dagiao')
                                    @endif
                                </div>
                                <div class="tab-pane" id="huy">
                                    @if(count($donhanghuy)==0)
                                        <div class="row text-center">
                                            <h3>Không có đơn hàng hủy</h3>
                                        </div>
                                    @else
                                        @include('user.donhang.partials.huy')
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection()
