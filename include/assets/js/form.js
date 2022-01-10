function easy_reservation_model_form(model_name,model_id) {
    easy_reservation_base_ajax({
        'action': 'easy_reservation_model_form',
        'model_name':model_name,
        'model_id': model_id,
    }, function (result) {
        console.log(result);
        jQuery('.ipak-model-form .modal-body').html(result.html);
        jQuery('.ipak-model-form .modal-header').html(result.title);
    });
}