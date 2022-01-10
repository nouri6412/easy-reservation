<?php
class Easy_Reservation_Ajax
{
    function model_insert()
    {
        $output = 'ok';

        echo json_encode([
            'success'       => true,
            'html'          => $output,
            'max_num_pages' => 1
        ]);
        die();
    }
}
$Easy_Reservation_Ajax = new Easy_Reservation_Ajax;
//add_action( 'wp_ajax_nopriv_ajax_submit_like', 'submit' );
add_action('wp_ajax_easy_reservation_model_insert', array($Easy_Reservation_Ajax, 'model_insert'));

foreach (glob(EASY_RESERVATION_Include . "ajax/*.php") as $filename) {
    require $filename;
}