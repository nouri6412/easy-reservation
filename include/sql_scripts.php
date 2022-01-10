<?php
class Easy_Reservation_Sql_Scripts
{
  public function get_install_script()
  {
    global $wpdb;
    $table_name = $wpdb->prefix . "hesab_model";
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "";

    return $sql;
  }
}
