<ul class="">
    @if(empty($carts))
        <li class="nav-item text-center text-primary"><h4>Giỏ hàng trống</h4></li>
    @else
        @foreach($carts as $id=>$cartItem)
            <li class="nav-item align-items-center text-primary">
                <div class="row">
                    <div class="col-md-12"><a href="{{route('sanpham.chitiet',['id'=>$id])}}" class="font-18 fw-bold">{{$cartItem['name']}}</a></div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-10"><span class="fw-bold font-16 text-success">Số lượng : {{$cartItem['soluong']}}</span></div>
                    <div class="col-md-2 "><a href="" data-id="{{$id}}" class="float-end text-danger fw-bold font-16 delete-subcart">Xóa</a></div>
                </div>
            </li>
        @endforeach
    @endif
</ul>
