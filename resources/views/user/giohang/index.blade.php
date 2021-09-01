@extends('layouts.sanpham_layout')
@section('title')
    <title>New Shop | Giỏ hàng</title>
@endsection
@section('link_css_sp')

@endsection()
@section('content')

    <section>
        <div class="container cart_wrapper">
            @include('user.giohang.partials.cart')
        </div>
    </section>
@endsection()
