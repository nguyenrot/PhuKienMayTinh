@extends('layouts.sanpham_layout')
@section('title')
    <title>New Shop | Giỏ hàng</title>
@endsection
@section('link_css_sp')

@endsection()
@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if(empty($carts))
                        <h2 class="mb-3 mt-4">Giỏ hàng trống</h2>
                    @else
                        <h2 class="mb-3 mt-4">Giỏ hàng</h2>
                    @endif

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    @if(isset($carts))
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-centered mb-0 font-18">
                                            <thead class="table-light">
                                            <tr>
                                                <th>Tên sản phẩm</th>
                                                <th>Hình ảnh</th>
                                                <th>Đơn giá</th>
                                                <th>Số lượng</th>
                                                <th>Thành tiền</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $totalSl = 0;
                                                $totalTT = 0;
                                            @endphp
                                            @foreach($carts as $id=>$cartItem)
                                                @php
                                                    $totalSl += $cartItem['soluong'];
                                                    $totalTT += $cartItem['dongia']*$cartItem['soluong'];
                                                @endphp
                                            <tr>
                                                <td>{{$cartItem['name']}}</td>
                                                <td>
                                                    <img src="{{asset($cartItem['hinhanh'])}}" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                                </td>
                                                <td>{{number_format($cartItem['dongia'])}} VNĐ</td>
                                                <td>
                                                    <input type="number" min="1" value="{{$cartItem['soluong']}}" class="form-control" placeholder="Qty" style="width: 90px;">
                                                </td>
                                                <td>{{number_format($cartItem['dongia']*$cartItem['soluong'])}} VNĐ</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-outline-dark btn-rounded "> <i class="mdi mdi-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-dark btn-rounded "> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Tổng cộng</th>
                                                <th class="text-center">{{$totalSl}}</th>
                                                <th>{{number_format($totalTT)}} VNĐ</th>
                                                <th></th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    @endif
                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <a href="" class="btn text-dark d-none d-sm-inline-block btn-link fw-semibold font-20">
                                                <i class="mdi mdi-arrow-left"></i>Mua thêm sản phẩm</a>
                                        </div> <!-- end col -->
                                        <div class="col-sm-6">
                                            <div class="text-sm-end">
                                                <a href="" class="btn btn-danger font-20">
                                                    <i class="mdi mdi-cart-plus me-1"></i>Đặt hàng</a>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div>
                                <!-- end col -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
