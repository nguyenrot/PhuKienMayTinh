<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="mt-0"><i class="mdi mdi-heart-multiple-outline"></i></h1>
                    <h3>Sản phẩm được <span class="text-danger">Yêu thích</span></h3>
                    <p class="text-muted mt-2">Lượt xem cao nhất trong tất cả sản phẩm.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-2 py-5 align-items-center">
            <div class="col-lg-5">
                <img src="{{asset($sanphamlike[0]->hinhanh)}}" class="img-fluid img-thumbnail rounded-circle" alt="">
            </div>
            <div class="col-lg-6 offset-lg-1">
                <h2 class="text-primary">{{$sanphamlike[0]->tensp}}</h2>

                <h3 class="text-success">{{number_format($sanphamlike[0]->dongia)}} VNĐ</h3>

                <div class="mt-4">
                    {!! $sanphamlike[0]->cauhinh !!}
                </div>

                <a href="" class="btn btn-primary btn-rounded mt-3">Xem ngay<i class="mdi mdi-arrow-right ms-1"></i></a>

            </div>
        </div>

        <div class="row pb-3 pt-1 align-items-center">
            <div class="col-lg-6">
                <h2 class="text-primary">{{$sanphamlike[1]->tensp}}</h2>

                <h3 class="text-success">{{number_format($sanphamlike[1]->dongia)}} VNĐ</h3>

                <div class="mt-4">
                    {!! $sanphamlike[1]->cauhinh !!}
                </div>

                <a href="" class="btn btn-success btn-rounded mt-3">Xem ngay<i class="mdi mdi-arrow-right ms-1"></i></a>

            </div>
            <div class="col-lg-5 offset-lg-1">
                <img src="{{asset($sanphamlike[1]->hinhanh)}}" class="img-fluid img-thumbnail rounded" alt="">
            </div>
        </div>

    </div>
</section>
