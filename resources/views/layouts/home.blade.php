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
</head>
<body class="loading" data-layout-config='{"darkMode":false}'>

    <!-- NAVBAR -->
    @include('partials.user.navbar')
    <!-- NAVBAR END -->

    @yield('content')

    <!-- START FOOTER -->
    @include('partials.user.footer')
    <!-- END FOOTER -->

    <!-- bundle -->
    <script src="{{asset('adminv18/assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('adminv18/assets/js/app.min.js')}}"></script>
    <script src="{{asset('admin_resources/home/home.js')}}"></script>

</body>

</html>
