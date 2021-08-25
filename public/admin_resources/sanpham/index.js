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
    $.ajax({
        type:'GET',
        url: urlRequest,
    })
}
$(function (){
    $(document).on('click','.active_sanpham',myFunctionActive)
});

