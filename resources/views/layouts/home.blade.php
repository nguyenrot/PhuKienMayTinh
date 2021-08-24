<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('adminv18/assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('adminv18/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('adminv18/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
    <link href="{{asset('adminv18/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style">
    <link rel="stylesheet" href="{{asset('admin_resources/home/search.css')}}">
</head>

<body class="loading" data-layout-config='{"darkMode":false}'>

<!-- NAVBAR START -->
@include('partials.user.navbar')
<!-- NAVBAR END -->

<!-- START HERO -->
@include('partials.user.home.slider')
<!-- END HERO -->

<!-- START SERVICES -->
<section class="py-5">
    <div class="container">
        <div class="row py-4">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="mt-0"><i class="mdi mdi-infinity"></i></h1>
                    <h3>The admin is fully <span class="text-primary">responsive</span> and easy to <span class="text-primary">customize</span></h3>
                    <p class="text-muted mt-2">The clean and well commented code allows easy customization of the
                        theme.It's designed for
                        <br>describing your app, agency or business.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="text-center p-3">
                    <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-desktop text-primary font-24"></i>
                                </span>
                    </div>
                    <h4 class="mt-3">Responsive Layouts</h4>
                    <p class="text-muted mt-2 mb-0">Et harum quidem rerum as expedita distinctio nam libero tempore
                        cum soluta nobis est cumque quo.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="text-center p-3">
                    <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-vector-square text-primary font-24"></i>
                                </span>
                    </div>
                    <h4 class="mt-3">Based on Bootstrap UI</h4>
                    <p class="text-muted mt-2 mb-0">Temporibus autem quibusdam et aut officiis necessitatibus saepe
                        eveniet ut sit et recusandae.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="text-center p-3">
                    <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-presentation text-primary font-24"></i>
                                </span>
                    </div>
                    <h4 class="mt-3">Creative Design</h4>
                    <p class="text-muted mt-2 mb-0">Nam libero tempore, cum soluta a est eligendi minus id quod
                        maxime placeate facere assumenda est.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="text-center p-3">
                    <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-apps text-primary font-24"></i>
                                </span>
                    </div>
                    <h4 class="mt-3">Multiple Applications</h4>
                    <p class="text-muted mt-2 mb-0">Et harum quidem rerum as expedita distinctio nam libero tempore
                        cum soluta nobis est cumque quo.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="text-center p-3">
                    <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-shopping-cart-alt text-primary font-24"></i>
                                </span>
                    </div>
                    <h4 class="mt-3">Ecommerce Pages</h4>
                    <p class="text-muted mt-2 mb-0">Temporibus autem quibusdam et aut officiis necessitatibus saepe
                        eveniet ut sit et recusandae.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="text-center p-3">
                    <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-grids text-primary font-24"></i>
                                </span>
                    </div>
                    <h4 class="mt-3">Multiple Layouts</h4>
                    <p class="text-muted mt-2 mb-0">Nam libero tempore, cum soluta a est eligendi minus id quod
                        maxime placeate facere assumenda est.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- END SERVICES -->

<!-- START FEATURES 1 -->
<section class="py-5 bg-light-lighten border-top border-bottom border-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h3>Flexible <span class="text-primary">Layouts</span></h3>
                    <p class="text-muted mt-2">There are three different layout options available to cater need for
                        any <br> modern web
                        application.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="demo-box text-center">
                    <img src="{{asset('adminv18/assets/images/layouts/layout-1.png')}}" alt="demo-img" class="img-fluid shadow-sm rounded">
                    <h5 class="mt-3 f-17">Vertical Layout</h5>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="demo-box text-center mt-3 mt-lg-0">
                    <img src="{{asset('adminv18/assets/images/layouts/layout-2.png')}}" alt="demo-img" class="img-fluid shadow-sm rounded">
                    <h5 class="mt-3 f-17">Horizontal Layout</h5>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="demo-box text-center mt-3 mt-lg-0">
                    <img src="{{asset('adminv18/assets/images/layouts/layout-3.png')}}" alt="demo-img" class="img-fluid shadow-sm rounded">
                    <h5 class="mt-3 f-17">Detached Layout</h5>
                </div>
            </div>
        </div>

        <div class="row mt-4">

            <div class="col-lg-4">
                <div class="demo-box text-center">
                    <img src="{{asset('adminv18/assets/images/layouts/layout-5.png')}}" alt="demo-img" class="img-fluid shadow-sm rounded">
                    <h5 class="mt-3 f-17">Light Sidenav Layout</h5>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="demo-box text-center mt-3 mt-lg-0">
                    <img src="{{asset('adminv18/assets/images/layouts/layout-6.png')}}" alt="demo-img" class="img-fluid shadow-sm rounded">
                    <h5 class="mt-3 f-17">Boxed Layout</h5>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="demo-box text-center mt-3 mt-lg-0">
                    <img src="{{asset('adminv18/assets/images/layouts/layout-4.png')}}" alt="demo-img" class="img-fluid shadow-sm rounded">
                    <h5 class="mt-3 f-17">Semi Dark Layout</h5>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- END FEATURES 1 -->

<!-- START FEATURES 2 -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="mt-0"><i class="mdi mdi-heart-multiple-outline"></i></h1>
                    <h3>Features you'll <span class="text-danger">love</span></h3>
                    <p class="text-muted mt-2">Hyper comes with next generation ui design and have multiple benefits
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-2 py-5 align-items-center">
            <div class="col-lg-5">
                <img src="{{asset('adminv18/assets/images/features-1.svg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 offset-lg-1">
                <h3 class="fw-normal">Inbuilt applications and pages</h3>
                <p class="text-muted mt-3">Hyper comes with a variety of ready-to-use applications and pages that help to speed up the development</p>

                <div class="mt-4">
                    <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Projects & Tasks</p>
                    <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Ecommerce Application Pages</p>
                    <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Profile, pricing, invoice</p>
                    <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Login, signup, forget password</p>
                </div>

                <a href="" class="btn btn-primary btn-rounded mt-3">Read More <i class="mdi mdi-arrow-right ms-1"></i></a>

            </div>
        </div>

        <div class="row pb-3 pt-5 align-items-center">
            <div class="col-lg-6">
                <h3 class="fw-normal">Simply beautiful design</h3>
                <p class="text-muted mt-3">The simplest and fastest way to build dashboard or admin panel. Hyper is built using the latest tech and tools and provide an easy way to customize anything, including an overall color schemes, layout, etc.</p>

                <div class="mt-4">
                    <p class="text-muted"><i class="mdi mdi-circle-medium text-success"></i> Built with latest Bootstrap</p>
                    <p class="text-muted"><i class="mdi mdi-circle-medium text-success"></i> Extensive use of SCSS variables</p>
                    <p class="text-muted"><i class="mdi mdi-circle-medium text-success"></i> Well documented and structured code</p>
                    <p class="text-muted"><i class="mdi mdi-circle-medium text-success"></i> Detailed Documentation</p>
                </div>

                <a href="" class="btn btn-success btn-rounded mt-3">Read More <i class="mdi mdi-arrow-right ms-1"></i></a>

            </div>
            <div class="col-lg-5 offset-lg-1">
                <img src="{{asset('adminv18/assets/images/features-2.svg')}}" class="img-fluid" alt="">
            </div>
        </div>

    </div>
</section>
<!-- END FEATURES 2 -->

<!-- START PRICING -->
<section class="py-5 bg-light-lighten border-top border-bottom border-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="mt-0"><i class="mdi mdi-tag-multiple"></i></h1>
                    <h3>Choose Simple <span class="text-primary">Pricing</span></h3>
                    <p class="text-muted mt-2">The clean and well commented code allows easy customization of the
                        theme.It's designed for
                        <br>describing your app, agency or business.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-3">
            <div class="col-md-4">
                <div class="card card-pricing">
                    <div class="card-body text-center">
                        <p class="card-pricing-plan-name fw-bold text-uppercase">Standard License </p>
                        <i class="card-pricing-icon dripicons-user text-primary"></i>
                        <h2 class="card-pricing-price">$49 <span>/ License</span></h2>
                        <ul class="card-pricing-features">
                            <li>10 GB Storage</li>
                            <li>500 GB Bandwidth</li>
                            <li>No Domain</li>
                            <li>1 User</li>
                            <li>Email Support</li>
                            <li>24x7 Support</li>
                        </ul>
                        <button class="btn btn-primary mt-4 mb-2 btn-rounded">Choose Plan</button>
                    </div>
                </div>
                <!-- end Pricing_card -->
            </div>
            <!-- end col -->

            <div class="col-md-4">
                <div class="card card-pricing card-pricing-recommended">
                    <div class="card-body text-center">
                        <div class="card-pricing-plan-tag">Recommended</div>
                        <p class="card-pricing-plan-name fw-bold text-uppercase">Multiple License</p>
                        <i class="card-pricing-icon dripicons-briefcase text-primary"></i>
                        <h2 class="card-pricing-price">$99 <span>/ License</span></h2>
                        <ul class="card-pricing-features">
                            <li>50 GB Storage</li>
                            <li>900 GB Bandwidth</li>
                            <li>2 Domain</li>
                            <li>10 User</li>
                            <li>Email Support</li>
                            <li>24x7 Support</li>
                        </ul>
                        <button class="btn btn-primary mt-4 mb-2 btn-rounded">Choose Plan</button>
                    </div>
                </div>
                <!-- end Pricing_card -->
            </div>
            <!-- end col -->

            <div class="col-md-4">
                <div class="card card-pricing">
                    <div class="card-body text-center">
                        <p class="card-pricing-plan-name fw-bold text-uppercase">Extended License</p>
                        <i class="card-pricing-icon dripicons-store text-primary"></i>
                        <h2 class="card-pricing-price">$599 <span>/ License</span></h2>
                        <ul class="card-pricing-features">
                            <li>100 GB Storege</li>
                            <li>Unlimited Bandwidth</li>
                            <li>10 Domain</li>
                            <li>Unlimited User</li>
                            <li>Email Support</li>
                            <li>24x7 Support</li>
                        </ul>
                        <button class="btn btn-primary mt-4 mb-2 btn-rounded">Choose Plan</button>
                    </div>
                </div>
                <!-- end Pricing_card -->
            </div>
            <!-- end col -->

        </div>

    </div>
</section>
<!-- END PRICING -->

<!-- START FOOTER -->
@include('partials.user.footer')
<!-- END FOOTER -->

<!-- bundle -->
<script src="{{asset('adminv18/assets/js/vendor.min.js')}}"></script>
<script src="{{asset('adminv18/assets/js/app.min.js')}}"></script>
<script src="{{asset('admin_resources/home/search.js')}}"></script>

</body>

</html>
