@extends('layouts.home')
@section('title')
    <title>New Shop | Sản phẩm</title>
@endsection
@section('link_css')
    <link rel="stylesheet" href="{{asset('admin_resources/user_sanpham/sanpham.css')}}">
@endsection()
@section('link_js')
    <script src="{{asset('admin_resources/user_sanpham/sanpham.js')}}"></script>
@endsection()
@section('content')
    @include('user.sanpham.partials.navbar_sanpham')
@endsection()
