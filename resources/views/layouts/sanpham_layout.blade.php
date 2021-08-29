@extends('layouts.home')
@section('link_css')
    <link rel="stylesheet" href="{{asset('admin_resources/user_sanpham/danhmuc.css')}}">
    @yield('link_css_sp')
@endsection()
@section('link_js')
    <script src="{{asset('admin_resources/user_sanpham/danhmuc.js')}}"></script>
    @yield('link_js_sp')
@endsection()

@section('danhmuc')

    @include('user.sanpham.partials.navbar_sanpham')

@endsection()

