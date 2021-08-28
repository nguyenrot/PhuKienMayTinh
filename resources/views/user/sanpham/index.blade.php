@extends('layouts.sanpham_layout')
@section('title')
    <title>New Shop | Sản phẩm</title>
@endsection
@section('link_css_sp')
    <link rel="stylesheet" href="{{asset('admin_resources/user_sanpham/sanpham.css')}}">
@endsection()
@section('content')

    @include('user.sanpham.partials.sanpham')

@endsection()
