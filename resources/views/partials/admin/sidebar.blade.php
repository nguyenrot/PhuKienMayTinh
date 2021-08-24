<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('adminv18/assets/images/logo.png')}}" alt="">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('adminv18/assets/images/logo_sm.png')}}" alt="">
                    </span>
    </a>
    <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('adminv18/assets/images/logo-dark.png')}}" alt="">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('adminv18/assets/images/logo_sm_dark.png')}}" alt="">
                    </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Thanh công cụ</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Chức năng</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Danh mục </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('categories.index')}}">Xem</a>
                        </li>
                        <li>
                            <a href="{{route('categories.create')}}">Thêm</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Hãng phụ kiện </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('menu.index')}}">Xem</a>
                        </li>
                        <li>
                            <a href="{{route('menu.create')}}">Thêm</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Sản phẩm </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('product.index')}}">Xem</a>
                        </li>
                        <li>
                            <a href="{{route('product.create')}}">Thêm</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Khuyến mãi </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('khuyenmai.index')}}">Xem</a>
                        </li>
                        <li>
                            <a href="{{route('khuyenmai.create')}}">Thêm</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <i class="uil-window"></i>
                    <span> Đơn hàng </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="layouts-horizontal.html">Xem tất cả</a>
                        </li>
                        <li>
                            <a href="layouts-detached.html">Đơn chờ xác nhận</a>
                        </li>
                        <li>
                            <a href="layouts-detached.html">Đơn đang giao</a>
                        </li>
                        <li>
                            <a href="layouts-detached.html">Đơn đã giao</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="apps-file-manager.html" class="side-nav-link">
                    <i class="uil-folder-plus"></i>
                    <span> Báo cáo thống kê </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item mt-1">Tài khoản</li>

        </ul>
        <div class="clearfix"></div>
    </div>
</div>
