@extends('layouts.admin')
@section('title')
    <title>Trang chủ Admin</title>
@endsection

@section('container-fluid')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Danh mục</h1>
    </div>
@endsection
@section('link_css')
    <script src="{{asset('jquery/jquery-3.6.0.min.js')}}"></script>
    <script>
        $(document).ready(
            function () {
                const active = $('.category').addClass('active');
                active.find('.nav-link.collapsed').attr("aria-expanded","true");
                active.find('.nav-link.collapsed').removeClass('collapsed');
                active.find('.collapse').addClass('show');
                active.find('.index').addClass('active');
            }
        );
    </script>
@endsection
