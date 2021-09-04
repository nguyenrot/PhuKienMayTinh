@extends('layouts.sanpham_layout')
@section('title')
    <title>New Shop | Xem đơn hàng</title>
@endsection
@section('link_css_sp')

@endsection()
@section('link_js_sp')
    <script src="{{asset('admin_resources/dathang/donhang.js')}}"></script>
@endsection()
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h2 class="mb-3 mt-4">Đơn hàng {{$donhang->id}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="row">
                                    <div class="col-lg-7">
                                        @php
                                            $key = 1;
                                            $trangthai = '<span class="text-primary">Chờ duyệt</span>';
                                            if ($donhang->trangthai ==0 ){
                                                $key = 0;
                                                $trangthai = '<span class="text-danger">Đã hủy</span>';
                                            }
                                            if ($donhang->trangthai ==2 ){
                                                $key = 2;
                                                $trangthai = '<span class="text-primary">Đang giao</span>';
                                            }
                                            if ($donhang->trangthai ==3 ){
                                                $key = 3;
                                               $trangthai = '<span class="text-success">Đã giao</span>';
                                            }
                                        @endphp
                                        <h3 class="mt-4">Trạng thái : {!! $trangthai !!}</h3>
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
                                                        <input class="form-control" name="phone" type="text" value="{{$donhang->phone}}" id="new-adr-phone" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="new-adr-address" class="form-label  font-16">Địa chỉ</label>
                                                        <textarea name="diachi" class="form-control" disabled rows="3">{{$donhang->diachi}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label  font-16">Ghi chú</label>
                                                        <textarea name="ghichu" class="form-control" disabled rows="3">{{$donhang->ghichu}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <div class="row mt-4">
                                                <div class="col-sm-6">
                                                    <a href="{{route('donhang.index')}}" class="btn text-muted d-none d-sm-inline-block font-18 btn-link fw-semibold">
                                                        <i class="mdi mdi-arrow-left"></i> Trở lại đơn hàng </a>
                                                </div>
                                                @if($key==1)
                                                    <div class="col-sm-6">
                                                        <div class="text-sm-end">
                                                            <a href="{{route('donhang.delete',['id'=>$donhang->id])}}" class="btn btn-danger rounded font-18 btn-delete-dh"><i class="mdi mdi-cancel me-1"></i> Hủy đơn </a>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                    </div>
                                    <div class="col-lg-5" >
                                        <div class="border p-3 mt-4 mt-lg-0 rounded" id="hoadon_donhang">
                                            <h3 class=" mb-3">Hóa đơn</h3>
                                            <div class="row">
                                                <div class="col-md-7 text-center"><h5>Tên sản phẩm</h5></div>
                                                <div class="col-md-5"><h5 class="float-end">Thành tiền (VNĐ)</h5></div>
                                                <hr>
                                            </div>
                                            @php
                                                $total = 0;
                                            @endphp
                                            @foreach($chitietdonhang as $item)
                                                @php
                                                    $total += doubleval($item->soluong*doubleval($item->dongia));
                                                @endphp
                                                <div class="row">
                                                    <div class="col-md-12"><h5><a href="{{route('sanpham.chitiet',['id'=>$item->sanpham_id])}}" class="font-18">{{$item->sanpham->tensp}}</a></h5></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h6>{{$item->soluong}} x {{number_format($item->dongia)}}</h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 class="float-end font-16">{{number_format($item->soluong*doubleval($item->dongia))}}</h5>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-8"><h5 class="float-end">Tổng cộng:</h5></div>
                                                <div class="col-md-4"><h5 class="float-end font-16">{{number_format($total)}} VNĐ</h5></div>
                                            </div>
                                        </div>
{{--                                        <div class="row mt-2">--}}
{{--                                            <div class="col-md-12">--}}
{{--                                                <input type="button" class="float-end w-25 btn btn-secondary" onclick="printDiv('hoadon_donhang')" value="In hóa đơn" />--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
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
