<section class="background-dm-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg pt-2 navbar-dark p-0">
                    <ul class="align-items-center w-100 d-flex justify-content-between row">
                        @foreach($danhmucs as $danhmuc)
                        <li class="nav-item mx-lg-1 col d-inline-block">
                            <h4><a class="nav-link text-primary text-center " href="{{route('home')}}">{{$danhmuc->name}}</a></h4>
                        </li>
                        @endforeach
                    </ul>
                </nav>

            </div>
        </div>
    </div>
    </div>
</section>
<section>
    <div class="container" style="min-height: 900px">

    </div>
</section>

