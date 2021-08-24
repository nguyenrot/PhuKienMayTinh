<section class="py-5">
    <div class="container">
        <div class="row py-4">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="mt-0"><i class="mdi mdi-infinity"></i></h1>
                    <h3>Danh sách <span class="text-primary">Danh Mục</span> nổi bật - <span class="text-primary">Sản phẩm</span></h3>
                </div>
            </div>
        </div>
        @foreach($danhmucs as $key=>$danhmuc)
            @if($key % 3==0)
                <div class="row">
            @endif
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="text-center p-3">
                                <div class="avatar-sm m-auto">
                                    <span class="avatar-title bg-primary-lighten rounded-circle">
                                        @switch($key)
                                            @case(0)
                                                <i class="uil uil-desktop text-primary font-24"></i>
                                                @break
                                            @case(1)
                                                <i class="uil uil-keyboard text-primary font-24"></i>
                                                @break
                                            @case(2)
                                                <i class="uil uil-mouse-alt text-primary font-24"></i>
                                                @break
                                            @case(3)
                                                <i class="mdi mdi-tape-drive text-primary font-24"></i>
                                                @break
                                            @case(4)
                                                <i class="dripicons-card text-primary font-24"></i>
                                                @break
                                            @case(5)
                                                <i class="mdi mdi-headphones text-primary font-24"></i>
                                                @break
                                                <i class="mdi mdi-new-box text-primary font-24"></i>
                                            @default
                                        @endswitch
                                    </span>
                                </div>
                                <a href="{{$danhmuc->id}}" class="stretched-link"><h3 class="mt-3">{{$danhmuc->name}}</h3></a>
                                <p class="text-muted mt-2 mb-0">{{$danhmuc->description}}</p>
                            </div>
                        </div>
                    </div>
            @if($key % 3 == 2)
                </div>
            @endif
        @endforeach
        </div>
    </div>
</section>
