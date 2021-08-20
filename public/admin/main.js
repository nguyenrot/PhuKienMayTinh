function myFunctionDelete (event){
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);
    Swal.fire({
        title: 'Bạn có muốn xóa ?',
        text: "Bạn sẽ không thể khôi phục lại nó !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xác nhận xóa!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type:'GET',
                url: urlRequest,
                success : function (data){
                    console.log(data);
                    console.log('123');
                    if (data.code==200){
                        that.parent().parent().parent().remove();
                    }
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                },
                error : function (){

                }
            })
        }
    })
    $(".swal2-cancel.swal2-styled.swal2-default-outline").text('Hủy');
}


$(function (){
    $(document).on('click','.action_delete',myFunctionDelete)
});
