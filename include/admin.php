<?php
class Easy_Reservation_admin extends Easy_Reservation_Base_Class
{
    public function index()
    {
        $this->ViewData["bag"]='hello admin';
        $this->view('admin/dashboard');
    }
}