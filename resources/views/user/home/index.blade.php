@extends('layouts.home')
@section('title')
    <title>New Shop | Phụ kiện máy tính</title>
@endsection
@section('link_css')

@endsection()
@section('link_js')
    <script src="{{asset('admin_resources/home/khuyenmai.js')}}"></script>
@endsection()
@section('content')
    <!-- SLIDER-->
    @include('user.home.partials.slider')
    <!-- SLIDER-->

    <!-- DANHMUC -->
    @include('user.home.partials.danhmuc')
    <!-- DANHMUC END -->

    <!-- SẢN PHẨM MỚI-->
    @include('user.home.partials.sanpham_new')
    <!-- SẢN PHẨM MỚI END -->

    <!-- SẢN PHẨM YÊU THÍCH -->
    @include('user.home.partials.sanpham_like')
    <!-- SẢN PHẨM YÊU THÍCH END -->

    <!-- SẢN PHẨM KHUYẾN MÃI -->
    @if ($sanphamkhuyenmai->count()>0)
    @include('user.home.partials.sanpham_discount')
    <!-- SẢN PHẨM KHUYẾN MÃI END -->
    @endif
@endsection()
