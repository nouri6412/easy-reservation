function easy_reservation_base_ajax(data, callback) {
    console.log(easy_reservation_object);
    data["page"]=easy_reservation_object.page;
    console.log(data);
    jQuery.ajax({
        url: easy_reservation_object.ajaxurl,
        data: data,
        dataType: 'json',
        type: 'POST',
        success: callback,
        beforeSend: function () {
            jQuery('.loading-ajax').show();
        },
        complete: function () {
            jQuery('.loading-ajax').hide();
        }
    });
}


function easy_reservation_model_insert() {
    easy_reservation_base_ajax({
        'action': 'easy_reservation_model_insert',
        'test': 'hello test ajax'
    }, function (result) {
       // console.log(result);
    });
}