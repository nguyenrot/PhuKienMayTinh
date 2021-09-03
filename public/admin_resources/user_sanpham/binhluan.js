$("#form-binhluan").submit(function (e){
    let url = $("#form-binhluan").attr('action')
    $.ajax({
        type:"POST",
        url:url,
        data:$("#form-binhluan").serialize(),
        dataType:"json",
        success:function (data){
            if(data.code===200){
                $('#company-list-left').html(data.binhluanPartials);
                document.getElementById('binhluan').value = "";
            }
        }
    })
    e.preventDefault()
})

