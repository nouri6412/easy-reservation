(function ($) {
    $(document).ready(function () {

    });

})(jQuery);

function ipak_auto_select_item_key_down(obj) {
    console.log(obj.val());
    easy_reservation_base_ajax({
        'action': 'easy_reservation_model_select_auto',
    }, function (result) {
        console.log(result);
        jQuery("#" + obj.attr("target-id") + "_box_auto .auto-select").html(result.html);
    });
}