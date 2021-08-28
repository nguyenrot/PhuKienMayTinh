$(function (){
    $('.cauhinh ul').addClass('list-cau-hinh');
    $('.cauhinh ul li').prepend('<i class="mdi mdi-rhombus-medium-outline"></i>  ')
    $( '.btn-mota' ).click(function() {
        $('.modal-mota-sanpham').removeClass('d-none')
    });
    $('.btn-mota-close').click(function (){
        $('.modal-mota-sanpham').addClass('d-none')
    })
})
