@extends('layouts.sanpham_layout')
@section('title')
    <title>New Shop | Đăng nhập</title>
@endsection
@section('link_css_sp')

@endsection()
@section('link_js_sp')

@endsection()
@section('content')

    <section>
        <div class="container">
            <div class="row mt-4 font-18 d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="auth-fluid-form-box">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0">Đăng nhập</h4>
                                <p class="text-muted mb-4">Nhập Email và mật khâỉ để đăng nhập vào tài khoản.</p>
                                <form action="{{route('dangnhapPost')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Địa chỉ email</label>
                                        <input name="email" class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
{{--                                        <a href="pages-recoverpw-2.html" class="text-muted float-end"><small>Forgot your password?</small></a>--}}
                                        <label for="password" class="form-label">Mật khẩu</label>
                                        <input name="password" class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input name="remember_me" type="checkbox" class="form-check-input" id="checkbox-signin">
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="d-grid mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Đăng nhập </button>
                                    </div>
                                </form>

                                <p class="text-muted mt-3">Chưa có tài khoản ? <a href="{{route('dangky')}}" class="text-muted ms-1"><b>Đăng ký</b></a></p>

                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection()
