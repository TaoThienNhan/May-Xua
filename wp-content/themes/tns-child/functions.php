<?php

/**
 * Include init.php
 */
require_once get_theme_file_path() . '/inc/init.php';

/**
 * WooCommerce functions
 */
if (class_exists('WooCommerce')):
	require_once get_theme_file_path() . '/inc/woocommerce.php';
endif;

/**
 * Include layouts.php
 */
require_once get_theme_file_path() . '/inc/layouts.php';

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page($cols)
{
    $cols = 16;
    return $cols;
}


function theme_name_register_menus() {
    register_nav_menus(
        array(
            'danh-muc-menu' => 'Menu Danh Mục',
            'dịch-vu-menu' => 'Menu Dịch vụ',
        )
    );
}
add_action('init', 'theme_name_register_menus');