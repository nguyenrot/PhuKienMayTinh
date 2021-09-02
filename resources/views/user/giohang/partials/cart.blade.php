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
                            <div class="table-responsive cart" data-url="{{route('giohang.delete')}}">
                                <table class="table table-borderless table-centered mb-0 font-18 update-cart-url" data-url="{{route('giohang.update')}}">
                                    <thead class="table-light">
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th class="text-center"><a href="" class="btn btn-outline-dark btn-rounded delete-cart"> <i class="mdi mdi-delete"></i>Xóa tất cả</a></th>
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
                                                <input type="number" min="1" value="{{$cartItem['soluong']}}" class="form-control soluong" placeholder="Qty" style="width: 90px;">
                                            </td>
                                            <td>{{number_format($cartItem['dongia']*$cartItem['soluong'])}} VNĐ</td>
                                            <td>
                                                <a href="" data-id="{{$id}}" class="btn btn-outline-dark btn-rounded update-cart"> <i class="mdi mdi-pencil"></i>Cập nhập</a>
                                                <a href="" data-id="{{$id}}" class="btn btn-outline-dark btn-rounded delete-cart"> <i class="mdi mdi-delete"></i>Xóa</a>
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
                                <a href="{{route('sanpham.index')}}" class="btn text-dark d-none d-sm-inline-block btn-link fw-semibold font-20">
                                    <i class="mdi mdi-arrow-left"></i>Mua thêm sản phẩm</a>
                            </div>
                            @if(isset($carts))
                                @if(auth()->check())
                                    <div class="col-sm-6">
                                        <div class="text-sm-end">
                                            <a href="javascript:void(0);" class="btn btn-danger font-20">
                                                <i class="mdi mdi-cart-plus me-1"></i>Đặt hàng</a>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-sm-6">
                                        <div class="text-sm-end">
                                            <a href="{{route('dangnhap')}}" class="btn btn-danger font-20">
                                                <i class="mdi mdi-cart-plus me-1"></i>Đăng nhập để đặt hàng</a>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
