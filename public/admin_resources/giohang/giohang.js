function deleteSubCart(e){
    e.preventDefault();
    let url = $('.subcart').data('url');
    let id = $(this).data('id');
    $.ajax({
        type:"GET",
        url:url,
        data:{id:id},
        success:function (data){
            if(data.code===200){
                $('.cart_wrapper').html(data.cartPartials)
                $('.subcart').html(data.subCartPartials);
                $('.soluong').text(data.soluongCart);
            }
        },
        error:function (){

        }
    })
}

$(function (){
    $(document).on('click','.delete-subcart',deleteSubCart)
})
