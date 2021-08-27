<section class="py-5 bg-light-lighten border-top border-bottom border-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2>Sản phẩm <span class="text-primary">Mới</span></h2>
                    <p class="text-muted mt-2">Chúng tôi luôn mang đến cho bạn những sản phẩm <br> chất lượng nhất. </p>
                </div>
            </div>
        </div>

        @foreach($sanphamnew as $key=>$sanpham)
            @if($key % 3 == 0)
                <div class="row mt-4">
            @endif
                <div class="col-lg-4">
                    <div class="card">
                            <div class="demo-box text-center">
                                <img src="{{asset($sanpham->hinhanh)}}" alt="demo-img" class="img-fluid shadow-sm rounded card-img-top w-75 mt-3">
                                <div class="card-body">
                                    <a href="" class="stretched-link">
                                        <h4 class="f-17 card-title text-overflow">{{$sanpham->tensp}}</h4>
                                    </a>
                                    <h5 class="card-text text-success font-">{{number_format($sanpham->dongia)}} VNĐ</h5>
                                </div>
                            </div>
                    </div>
                </div>
            @if($key%3==2)
                </div>
            @endif
        @endforeach
    </div>
</section>
