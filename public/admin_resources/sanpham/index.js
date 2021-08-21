$(document).ready(
    function () {
        const active = $('.product').addClass('active');
        active.find('.nav-link.collapsed').attr("aria-expanded","true");
        active.find('.nav-link.collapsed').removeClass('collapsed');
        active.find('.collapse').addClass('show');
        active.find('.index').addClass('active');
    }
);
function myFunctionActive (event){
    let urlRequest = $(this).data('url');
    let that = $(this);
    console.log(that)
    $.ajax({
        type:'GET',
        url: urlRequest,
        success : function (data){
            if (data.code==200){

            }
        },
        error : function (){
        }
    })
}
$(function (){
    $(document).on('click','.active_sanpham',myFunctionActive)
});

