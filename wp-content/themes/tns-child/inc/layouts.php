<?php

/**
 * The header for our theme
 */
add_action('tns_header', function (){

    $homeURL = home_url() . '/';

    $currentURL = get_permalink();

    if ($currentURL == $homeURL) {
        get_template_part('template-parts/header');
    } else {
        get_template_part('template-parts/page-header');

    }

});

/**
 * The landing page for our theme
 */
add_action('tns_landing', function (){
    get_template_part('template-parts/welcome');
    get_template_part('template-parts/home-service');
    get_template_part('template-parts/home-service-2');
    get_template_part('template-parts/home-product');
    get_template_part('template-parts/booking');
    get_template_part('template-parts/gallery');
});

/**
 * The loop for our theme
 */
add_action('tns_loop', function (){

});

/**
 * The template for displaying all pages
 */
add_action('tns_page', function (){
	//if (is_cart() || is_checkout() || is_account_page() || is_wc_endpoint_url()):
		get_template_part('template-parts/content-full-width');
	//endif;
});

/**
 * The template for displaying all single posts
 */
add_action('tns_single', function (){
	get_template_part('template-parts/single');
    get_template_part('template-parts/other-service');
});

/**
 * The template for displaying archive pages
 */
add_action('tns_archive', function (){
    get_template_part('template-parts/archive');
});

/**
 * The template for displaying search results pages
 */
add_action('tns_search', function (){

});

/**
 * The footer for our theme
 */
add_action('tns_footer', function (){
    get_template_part('template-parts/footer');
});

/**
 * The template for displaying 404 pages (not found)
 */
add_action('tns_404', function (){

});

add_action('tns_services_template', function (){
    get_template_part('template-parts/service');
    get_template_part('template-parts/other-service');
});

add_action('tns_introduces_template', function (){
    get_template_part('template-parts/introduce');
});

add_action('tns_blogs_template', function (){
    //get_template_part('template-parts/blog');
});

add_action('tns_contacts_template', function (){
    get_template_part('template-parts/booking');
    get_template_part('template-parts/gallery');
});

