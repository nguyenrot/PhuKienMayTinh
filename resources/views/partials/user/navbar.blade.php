@php
    $carts = session()->get('cart');
    $totalSoluong = 0;
    if(isset($carts)){
         foreach ($carts as $cartItem){
            $totalSoluong += $cartItem['soluong'];
        }
    }
@endphp
<nav class="navbar navbar-expand-lg py-lg-2 navbar-dark backgroud-nav">
    <div class="container">

        <!-- logo -->
        <a href="{{route('home')}}" class="navbar-brand me-lg-2">
            <img src="{{asset('adminv18/assets/images/logo.png')}}" alt="" class="logo-dark" >
        </a>
        <div class="giohang">
            <a href="{{route('giohang.index')}}" target="_blank" class="btn btn-sm btn-light btn-rounded card-sanpham">
                <h5><i class="mdi mdi-basket me-2"></i> Giỏ hàng</h5>
                <div class="sl-cart-sp">
                    <span class="quality text-center "><h5 class="mt-1 text-dark soluong">{{$totalSoluong}}</h5></span>
                </div>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <!-- menus -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <!-- left menu -->
            <ul class="navbar-nav me-auto align-items-center">
                <li class="nav-item mx-lg-1">
                    <h4><a class="nav-link active" href="{{route('home')}}">Home</a></h4>
                </li>
                <li class="nav-item mx-lg-1">
                    <h4><a class="nav-link active" href="{{route('sanpham.index')}}">Sản phẩm</a></h4>
                </li>

                <li class="nav-item mx-lg-1">
                    <form action="{{route('sanpham.timkiem')}}" method="get">
                        <div class="search_navbar d-flex justify-content-center" id="hvbtn">
                            <h4><input name="searchsp" type="text" class="input_search text-primary" placeholder="Tìm kiếm" autocomplete="off"></h4>
                            <button type="submit" class="btn_search"><i class="uil uil-search"></i></button>
                        </div>
                    </form>
                </li>
            </ul>

            <!-- right menu -->
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item me-0">
                    <h4><a class="nav-link active" href="{{route('dangnhap')}}">Đăng nhập</a></h4>
                </li>
                <li class="nav-item me-0">
                    <h4><a class="nav-link active" href="{{route('dangky')}}">Đăng ký</a></h4>
                </li>
                <li class="nav-item me-0 giohang">
                    <a href="{{route('giohang.index')}}" target="_blank" class="btn btn-sm btn-light btn-rounded d-none d-lg-inline-flex">
                        <h5><i class="mdi mdi-basket me-2"></i>Giỏ hàng</h5>
                        <div class="sl-cart-sp">
                            <span class="quality text-center "><h5 class="mt-1 text-dark soluong">{{$totalSoluong}}</h5></span>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
