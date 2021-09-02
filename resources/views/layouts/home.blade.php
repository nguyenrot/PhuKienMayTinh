<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('adminv18/assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('adminv18/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('adminv18/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
    <link href="{{asset('adminv18/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style">
    <link rel="stylesheet" href="{{asset('admin_resources/home/home.css')}}">
    <link rel="stylesheet" href="{{asset('admin_resources/giohang/giohang.css')}}">
    @yield('link_css')
</head>
<body class="loading" data-layout-config='{"darkMode":false}'>

    <!-- NAVBAR -->
    @include('partials.user.navbar')
    <!-- NAVBAR END -->
    @yield('danhmuc')
    @yield('content')

    <!-- START FOOTER -->
    @include('partials.user.footer')
    <!-- END FOOTER -->
    <a id="button-to-top" class="btn btn-secondary rounded-3 unshow-btn"><i class="mdi mdi-arrow-up-thick"></i></a>

    <!-- bundle -->
    <script src="{{asset('adminv18/assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('adminv18/assets/js/app.min.js')}}"></script>
    <script src="{{asset('admin_resources/home/search.js')}}"></script>
    <script src="{{asset('admin_resources/giohang/giohang.js')}}"></script>
    @yield('link_js')
</body>

</html>
