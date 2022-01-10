<?php

/**
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://mbmti.ir
 * @since             2.0.7
 * @package           EASY_RESERVATION
 *
 * @wordpress-plugin
 * Plugin Name:       رزرواسیون
 * Description:       افزونه رزرواسیون آسان
 * Version:           1.0.0
 * Author:            ایپک
 * Text Domain:       easy-reservation
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) die;

/* General Definition
******************************/
define('EASY_RESERVATION_VERSION', '2.0.7');

define('EASY_RESERVATION_BASE', plugin_dir_path(__FILE__));
define('EASY_RESERVATION_URI', plugin_dir_url(__FILE__));
define('EASY_RESERVATION_FILE', __FILE__);
define('EASY_RESERVATION_Include', EASY_RESERVATION_BASE . 'include/');
define('EASY_RESERVATION_View', EASY_RESERVATION_BASE . 'view/');
$ViewData = [];


require EASY_RESERVATION_Include . 'lib/jdf.php';
require EASY_RESERVATION_Include . 'lib/tools.php';
require EASY_RESERVATION_Include . 'sql_scripts.php';
require EASY_RESERVATION_Include . 'base_class.php';
require EASY_RESERVATION_Include . 'admin.php';
require EASY_RESERVATION_Include . 'public.php';
require EASY_RESERVATION_Include . 'ajax.php';
require EASY_RESERVATION_Include . 'core.php';

$Easy_Reservation_Core;


function Easy_Reservation_Core()
{
 
}
global $Easy_Reservation_Core;
$Easy_Reservation_Core = new Easy_Reservation_Core();


add_action("init", "Easy_Reservation_Core");
