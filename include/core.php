<?php
class Easy_Reservation_Core
{
    var $entities = [];
    var $alerts = [];
    public function __construct()
    {
        add_action('admin_enqueue_scripts',  array($this, "styles"));
        add_action('admin_enqueue_scripts', array($this, "scripts"));
        add_action("admin_menu", array($this, "menu"));
        register_activation_hook(EASY_RESERVATION_FILE, array($this, "install"));
    }

    public function run()
    {
    }

    public function add_alert($message, $type = "danger")
    {
        $this->alerts[] = ["message" => $message, "type" => $type];
    }

    public function get_alert()
    {
        return $this->alerts;
    }

    public function print_alert()
    {
        foreach ($this->alerts as $alert) {
?>
            <div class="alert alert-<?php echo esc_attr($alert["type"]); ?>">
                <?php echo esc_html($alert["message"]); ?>
            </div>

<?php
        }
    }

    public function styles()
    {

        wp_enqueue_style(
            'hesab-styles',
            EASY_RESERVATION_URI . 'assets/css/admin.css',
            array(),
            1.0
        );


        wp_enqueue_style(
            'hesab-styles',
            EASY_RESERVATION_URI . 'assets/css/admin.css',
            array(),
            1.0
        );
    }

    public function scripts()
    {
        global $wp_query;


        wp_enqueue_script(
            'easy_reservation_script',
            EASY_RESERVATION_URI . 'assets/js/admin.js',
            array('jquery'),
            1,
            true
        );

        wp_enqueue_script(
            'easy_reservation_script_date',
            EASY_RESERVATION_URI . 'assets/js/DatePicker.js',
            array('jquery'),
            1,
            true
        );

        wp_enqueue_script(
            'easy_reservation_ajax_script',
            EASY_RESERVATION_URI . 'assets/js/ajax.js',
            array('jquery'),
            1,
            true
        );

        wp_localize_script('easy_reservation_ajax_script', 'easy_reservation_object', array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
            'max_page' => $wp_query->max_num_pages
        ));
    }

    public function menu()
    {


        add_menu_page('رزرواسیون آسان', 'رزرواسیون آسان', 'manage_options', 'easy-reservation-dashboard', array($this, "dashboard"), 'dashicons-money-alt');
        add_submenu_page('easy-reservation-dashboard', 'داشبورد', 'داشبورد', 'manage_options', 'easy-reservation-index', array($this, "dashboard"));

    }

    public  function dashboard()
    {
        $Easy_Reservation_admin=new Easy_Reservation_admin;
        $Easy_Reservation_admin->index();
    }


    public function install()
    {
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        $sql = new Easy_Reservation_Sql_Scripts;
        dbDelta($sql->get_install_script());
    }
}
