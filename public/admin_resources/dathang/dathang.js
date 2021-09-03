fetch('https://provinces.open-api.vn/api/')
    .then(response => response.json())
    .then(data => {
        const htmltp = data.map(function(currentValue, index){
            return `<option value="${currentValue.name}" data-value="${currentValue.code}">${currentValue.name}</option>`
        })
        document.querySelector('.thanhpho').insertAdjacentHTML('beforeend',htmltp.join(''));
        $('.thanhpho').on('change', '', function (e) {
            let selectedtpVal = $(".thanhpho option:selected").data('value');
            fetch('https://provinces.open-api.vn/api/d/')
                .then(response => response.json())
                .then(data => {
                    const htmltx = data.map(function(currentValue, index){
                        if (currentValue.province_code==selectedtpVal){
                            return `<option value="${currentValue.name}" data-value="${currentValue.code}">${currentValue.name}</option>`
                        }
                    })
                    document.querySelector('.thixa').innerHTML = htmltx.join();
                    $('.thixa').on('change', '', function (e) {
                        let selectedtxVal = $(".thixa option:selected").data('value');
                        fetch('https://provinces.open-api.vn/api/w/')
                            .then(response => response.json())
                            .then(data => {
                                const htmlp = data.map(function(currentValue, index){
                                    if (currentValue.district_code==selectedtxVal){
                                        return `<option value="${currentValue.name}">${currentValue.name}</option>`
                                    }
                                })
                                document.querySelector('.phuong').innerHTML = htmlp.join();

                            })
                    });
                })
        });
    })
    .catch(error => console.error(error))




