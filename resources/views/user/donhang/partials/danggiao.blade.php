<table class="table table-centered mb-0 font-18">
    <thead class="table-dark">
    <tr>
        <th>Mã đơn</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Trạng thái</th>
        <th>Chức năng</th>
    </tr>
    </thead>
    <tbody>
    @foreach($donhangdanggiao as $donhang)
        <tr>
            <td>{{$donhang->id}}</td>
            <td>{{auth()->user()->email}}</td>
            <td>{{$donhang->phone}}</td>
            <td><i class="mdi mdi-circle text-warning"></i> Đang giao</td>
            <td>
                <a href="{{route('donhang.view',['id'=>$donhang->id])}}" class="action-icon font-16"> <i class="mdi mdi-eye"></i>Xem</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
