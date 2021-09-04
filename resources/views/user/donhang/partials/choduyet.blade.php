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
    @foreach($donhangchoduyet as $donhang)
        <tr>
            <td>{{$donhang->id}}</td>
            <td>{{auth()->user()->email}}</td>
            <td>{{$donhang->phone}}</td>
            <td><i class="mdi mdi-circle text-primary"></i> Chờ duyệt</td>
            <td>
                <a href="javascript: void(0);" class="action-icon font-16"> <i class="mdi mdi-eye"></i>Xem</a>
                <a href="javascript: void(0);" class="action-icon font-16"> <i class="mdi mdi-delete"></i>Hủy</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
