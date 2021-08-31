function addToCart(e){
    e.preventDefault();
    let url = $(this).data('url');
    let sl = $(this).parent().find('input.soluong-sp').val();
    let dg = $(this).parent().parent().find('h3.dongia-sp').data('dg');
    if (dg==null){
         dg = $(this).parent().parent().parent().find('h3.dongia-sp').data('dg');
    }
    let soluong = 1;
    if(sl) {
        soluong = parseInt(sl);
    }
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Thêm vào giỏ hàng thành công!',
        showConfirmButton: false,
        timer: 1500
    })
    $.ajax({
        type:"GET",
        url:url,
        data:{soluong :soluong,dongia:dg },
        dataType: 'json',
        success:function (data){
            if(data.code===200){
                $soluong = $('.soluong').first().text();
                $('.soluong').text(parseInt($soluong)+soluong);
            }
        },
        error:function (){

        }
    })
}
$(function (){
        $('.btn-add-cart').on('click',addToCart);
})
