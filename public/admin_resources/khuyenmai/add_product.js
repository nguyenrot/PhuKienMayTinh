$("#btnAdd").click(function () {
    var id_cuoi = $(".tblChiTietKhuyenMai").find("tr:last-child").attr("data-id");
    i = parseInt(id_cuoi) + 1;
    var tdnoidung = $(".trAppend").html();
    var trnoidung = "<tr class=\"trAppended\" data-id=\"" + i + "\">" + tdnoidung + "</tr>"
    $(".tblChiTietKhuyenMai").append(trnoidung);
    loadIDLENTHE();
})
function loadIDLENTHE() {
    $(".trAppended").each(function () {
        var id = $(this).attr("data-id");
        var nameMaSanPham = "sanpham[" + id + "]";
        var nameSoLuongNhap = "soluong[" + id + "]";
        var nameTyLeNhap = "tyle[" + id + "]";
        $(this).find(".ddlSanPham").attr("name", nameMaSanPham);
        $(this).find(".txtTyLeKhuyenMai").attr("name", nameTyLeNhap);
        $(this).find(".txtSoLuong").attr("name", nameSoLuongNhap);
    })
};

function CapNhapID() {
    var id_cuoi = $(".tblChiTietKhuyenMai").find(".trFirstChild").attr("data-id");
    i = parseInt(id_cuoi) + 1;
    $(".trAppended").each(function () {
        var id = i;
        $(this).attr("data-id", i);
        var nameMaSanPham = "sanpham[" + id + "]";
        var nameSoLuongNhap = "soluong[" + id + "]";
        var nameTyLeNhap = "tyle[" + id + "]";
        $(this).find(".ddlSanPham").attr("name", nameMaSanPham);
        $(this).find(".txtTyLeKhuyenMai").attr("name", nameTyLeNhap);
        $(this).find(".txtSoLuong").attr("name", nameSoLuongNhap);
        i++;
    })
}

$("body").delegate(".btnDelete", "click", function () {
    $(this).closest("tr").remove();
    CapNhapID();
});
