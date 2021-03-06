<?php
//register menu
function register_menu() {

register_nav_menus(
    array(
        'menu_top' => __( 'Header - Menu', 'ngocshop' ),
        'bottom_col_1' => __( 'Bottom - Column 1', 'ngocshop' ),
        'bottom_col_2' => __( 'Bottom - Column 2', 'ngocshop' )
    ) );
}
add_action( 'init', 'register_menu' );

//add theme support
add_theme_support('post-thumbnails',array('post', 'page', 'download'));

//Easy Digital Downloads
include 'edd/checkout_cart.php';

function pippin_extra_edd_currencies( $currencies ) {
    $currencies['VND'] = 'Vietnam Dong';
    return $currencies;
}
add_filter('edd_currencies', 'pippin_extra_edd_currencies');




// Remove Open Sans that WP adds from frontend
if (!function_exists('remove_wp_open_sans')) :
    function remove_wp_open_sans() {
        wp_deregister_style( 'open-sans' );
        wp_register_style( 'open-sans', false );
    }
    add_action('wp_enqueue_scripts', 'remove_wp_open_sans');

    // Uncomment below to remove from admin
    // add_action('admin_enqueue_scripts', 'remove_wp_open_sans');
endif;

