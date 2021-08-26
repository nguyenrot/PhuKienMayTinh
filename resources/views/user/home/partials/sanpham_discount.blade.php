<section class="py-5 bg-light-lighten border-top border-bottom border-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="mt-0"><i class="mdi mdi-tag-multiple"></i></h1>
                    <h3>Sản phẩm <span class="text-primary">khuyến mãi</span></h3>
                    <p class="text-muted mt-2">Nhằm tri ân khách hàng mỗi tháng
                        <br>chúng tôi có những chương trình khuyến mãi.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-3 d-flex justify-content-center">
            @foreach($sanphamkhuyenmai as $spkm)
            <div class="col-md-4 ">
                <div class="card card-pricing card-pricing-recommended">
                    <div class="card-body text-center">
                        <div class="card-pricing-plan-tag ">Giảm {{$spkm->tyle}}%</div>
                        <p class="card-pricing-plan-name fw-bold text-uppercase ">{{$spkm->product->tensp}}</p>
                        <div class="avatar-lg d-flex " style="margin: auto">
                            <div class="">
                                <img src="{{asset($spkm->product->hinhanh)}}" alt="image" class="img-fluid img-thumbnail rounded-circle" width="120"/>
                            </div>
                        </div>
                        <h3 class="card-pricing-price text-danger">
                            {{number_format(doubleval($spkm->product->dongia) - (doubleval($spkm->product->dongia)*0.1))}} VNĐ
                            <span class="text-dark font-13">/ {{number_format(doubleval($spkm->product->dongia))}} VNĐ</span></h3>
                        <h5 class="cauhinh" style="min-height: 365px">
                            {!! $spkm->product->cauhinh !!}
                        </h5>
                        <div class="">
                            <a href="" class="btn btn-primary mb-2 btn-rounded">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <!-- end Pricing_card -->
            </div>
            @endforeach
        </div>
        <div class="row">
            <a href="" class="btn btn-primary">Xem thêm sản phẩm khuyến mãi<i class="mdi mdi-arrow-right ms-1"></i></a>
        </div>
    </div>
</section>
