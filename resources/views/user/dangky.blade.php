@extends('layouts.sanpham_layout')
@section('title')
    <title>New Shop | Đăng ký</title>
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
                                <h4 class="mt-0">Đăng ký</h4>
                                <p class="text-muted mb-4">Không có tài khoản? Tạo tài khoản của bạn, chỉ mất chưa đầy một phút.</p>
                                <form action="#">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Họ và tên</label>
                                        <input class="form-control" type="text" id="fullname" placeholder="Enter your name" required="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Mật kẩu</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                            <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-muted">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="mb-0 d-grid text-center">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-account-circle"></i> Đăng ký </button>
                                    </div>
                                </form>
                                    <p class="text-muted mt-3">Đã có tài khoản? <a href="{{route('dangnhap')}}" class="text-muted ms-1"><b>Đăng nhập</b></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


@endsection()
