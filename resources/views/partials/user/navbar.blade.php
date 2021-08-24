<nav class="navbar navbar-expand-lg py-lg-2 navbar-dark">
    <div class="container">

        <!-- logo -->
        <a href="index.html" class="navbar-brand me-lg-2">
            <img src="{{asset('adminv18/assets/images/logo.png')}}" alt="" class="logo-dark" >
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>

        <!-- menus -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <!-- left menu -->
            <ul class="navbar-nav me-auto align-items-center">
                <li class="nav-item mx-lg-1">
                    <a class="nav-link active" href="">Home</a>
                </li>
                <li class="nav-item mx-lg-1">
                    <a class="nav-link" href="">Sản phẩm</a>
                </li>

                <li class="nav-item mx-lg-1">
                    <form action="">
                        <div class="search_navbar d-flex justify-content-center" id="hvbtn">
                            <input type="text" class="input_search" placeholder="Tìm kiếm">
                            <button type="submit" class="btn_search"><i class="uil uil-search"></i></button>
                        </div>
                    </form>
                </li>
            </ul>

            <!-- right menu -->
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item me-0">
                    <a class="nav-link" href="">Đăng nhập</a>
                </li>
                <li class="nav-item me-0">
                    <a class="nav-link" href="">Đăng ký</a>
                </li>
                <li class="nav-item me-0">
                    <a href="" target="_blank" class="nav-link d-lg-none">Giỏ hàng</a>
                    <a href="" target="_blank" class="btn btn-sm btn-light btn-rounded d-none d-lg-inline-flex">
                        <i class="mdi mdi-basket me-2"></i> Giỏ hàng
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
