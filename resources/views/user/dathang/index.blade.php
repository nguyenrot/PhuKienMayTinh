@extends('layouts.sanpham_layout')
@section('title')
    <title>New Shop | Đặt hàng</title>
@endsection
@section('link_css_sp')

@endsection()
@section('link_js_sp')
    <script src="{{asset('admin_resources/dathang/dathang.js')}}"></script>
@endsection()
@section('content')

    <section>
<div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-3 mt-4">Đặt hàng</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h3 class="mt-4">Địa chỉ</h3>
                                            <p class="font-16 text-muted mb-4">Điền vào biểu mẫu bên dưới để chúng tôi có thể gửi cho bạn hóa đơn của đơn đặt hàng.</p>
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="new-adr-first-name" class="form-label font-16">Họ và tên</label>
                                                            <input class="form-control" type="text" value="{{auth()->user()->name}}" id="new-adr-first-name" disabled>
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="new-adr-email-address" class="form-label  font-16">Email <span class="text-danger">*</span></label>
                                                            <input class="form-control" type="email" value="{{auth()->user()->email}}" id="new-adr-email-address" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="new-adr-phone" class="form-label  font-16">Số điện thoại <span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text" placeholder="Nhập số điện thoại liên hệ" id="new-adr-phone">
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="new-adr-address" class="form-label  font-16">Địa chỉ</label>
                                                            <input class="form-control" type="text" placeholder="Nhập địa chỉ nhận hàng" id="new-adr-address">
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="new-adr-town-city" class="form-label  font-16">Tỉnh / Thành phố</label>
                                                            <select data-toggle="select2" title="Country" name="thanhpho" class="thanhpho">
                                                                <option value="0">Chọn ...</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="new-adr-state" class="form-label  font-16">Quận / Huyện / Thị xã</label>
                                                            <select data-toggle="select2" title="Country" name="quan" class="thixa">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="new-adr-zip-postal" class="form-label  font-16">Phường / Xã</label>
                                                            <select data-toggle="select2" title="Country" name="phuong" class="phuong">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->
                                                <h4 class="mt-4  font-16">Phương thức thanh toán</h4>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="border p-3 rounded mb-3 mb-md-0">
                                                            <div class="form-check">
                                                                <input type="radio" id="shippingMethodRadio1" name="shippingOptions" class="form-check-input" checked="">
                                                                <label class="form-check-label font-16 fw-bold" for="shippingMethodRadio1">Thanh toán khi nhận hàng</label>
                                                            </div>
                                                            <p class="mb-0 ps-3 pt-1">Miễn phí vận chuyển</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row-->

                                                <div class="row mt-4">
                                                    <div class="col-sm-6">
                                                        <a href="{{route('giohang.index')}}" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                            <i class="mdi mdi-arrow-left"></i> Trở lại giỏ hàng </a>
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="text-sm-end">
                                                            <a href="apps-ecommerce-checkout.html" class="btn btn-danger">
                                                                <i class="mdi mdi-cash-multiple me-1"></i> Đặt hàng </a>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                            </form>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="border p-3 mt-4 mt-lg-0 rounded">
                                                <h3 class=" mb-3">Hóa đơn</h3>
                                                <div class="row">
                                                    <div class="col-md-7 text-center"><h5>Tên sản phẩm</h5></div>
                                                    <div class="col-md-5 text-center"><h5>Thành tiền (VNĐ)</h5></div>
                                                </div>
                                                    @foreach($hoadon as $item)
                                                    <div class="row">
                                                        <div class="col-md-7"><a href=""></a></h5></div>
                                                        <div class="col-md-5 float-end"><h5 class="float-end">Thành tiền (VNĐ)</h5></div>
                                                    </div>
                                                    @endforeach

                                                <!-- end table-responsive -->
                                            </div> <!-- end .border-->

                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
