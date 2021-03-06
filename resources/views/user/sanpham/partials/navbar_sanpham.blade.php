<?php
 $danhmucs = \App\Models\danhmuc::all();
 $spkm = \App\Models\chitietkhuyenmai::where('active',1)->get();
 $i = $spkm->count();
?>
<section class="background-dm-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg pt-2 navbar-dark p-0">
                    <ul class="align-items-center w-100 d-flex justify-content-between row">
                        @foreach($danhmucs as $danhmuc)
                        <li class="navdm nav-item mx-lg-1 col d-inline-block">
                            <span class="nav-item-menu "><a class="font-18 fw-bold nav-link text-primary text-center "
                                                            href="{{route('sanpham.danhmuc',['id'=>$danhmuc->id])}}">{{$danhmuc->name}}</a></span>
                            <div class="subnav w-100">
                                    <ul class="align-items-center">
                                        @foreach($danhmuc->menu as $menu)
                                            <li class="nav-item align-items-center">
                                                <a class="font-18 fw-bold nav-link text-primary "
                                                   href="{{route('sanpham.hangsanxuat',['id'=>$menu->id])}}">{{$menu->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                            </div>
                        </li>
                        @endforeach
                        @if($i>0)
                        <li class="navdm nav-item mx-lg-1 col d-inline-block">
                            <span class="nav-item-menu "><a class="font-18 fw-bold nav-link text-primary text-center "
                                                            href="{{route('sanpham.khuyenmai')}}">Khuyến mãi</a></span>
                        </li>
                            @endif
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row hang_danh_muc">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg pt-2 navbar-dark p-0">
                    <ul class="align-items-center w-100 d-flex justify-content-between row">
                        @foreach($danhmucs as $danhmuc)
                            @foreach($danhmuc->menu as $menu)
                                <li class="navdm nav-item col d-inline-block">
                                    <span class="nav-item-menu "><a class="font-18 fw-bold nav-link text-primary text-center " href="{{route('sanpham.hangsanxuat',['id'=>$menu->id])}}">{{$menu->name}}</a></span>
                                </li>
                            @endforeach
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>


