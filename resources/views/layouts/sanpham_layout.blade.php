@extends('layouts.home')
@section('link_css')
    <link rel="stylesheet" href="{{asset('admin_resources/user_sanpham/danhmuc.css')}}">
    @yield('link_css_sp')
@endsection()
@section('link_js')
    <script src="{{asset('admin_resources/user_sanpham/danhmuc.js')}}"></script>
    <script src="{{asset('admin_resources/user_sanpham/cart.js')}}"></script>
    <script src="{{asset('vendor/sweetAlert2/sweetalert2@11.js')}}"></script>
    @yield('link_js_sp')
@endsection()

@section('danhmuc')

    @include('user.sanpham.partials.navbar_sanpham')

@endsection()

