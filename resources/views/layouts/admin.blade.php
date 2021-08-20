<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <link rel="shortcut icon" href="{{asset('adminv18/assets/images/favicon.ico')}}">
    <link href="{{asset('adminv18/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('adminv18/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
    <link href="{{asset('adminv18/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style">
    @yield('link_css')
</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
<!-- Begin page -->
<div class="wrapper">

    @include('partials.admin.sidebar')

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            @include('partials.admin.header')
            <div class="container-fluid">

                @yield('container-fluid')

            </div> <!-- container -->

        </div> <!-- content -->

        @include('partials.admin.footer')

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->


<!-- Right Sidebar -->
    @include('partials.admin.setting')

<div class="rightbar-overlay"></div>
<!-- /End-bar -->


<!-- bundle -->
<script src="{{asset('adminv18/assets/js/vendor.min.js')}}"></script>
<script src="{{asset('adminv18/assets/js/app.min.js')}}"></script>
@yield('link_js')
</body>
</html>
