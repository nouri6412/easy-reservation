<?php
class Easy_Reservation_public extends Easy_Reservation_Base_Class
{
    public function index()
    {
        echo 'hello public';
    }
}

$Easy_Reservation_public=new Easy_Reservation_public;

add_shortcode('easy-reservation', array($Easy_Reservation_public,"index"));