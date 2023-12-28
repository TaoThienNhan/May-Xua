<?php
/**
 * The landing page for our theme
 *
 * Template Name: Dịch vụ
 */

/**
 * The contact page for our theme
 */
function tns_services_template(){
    get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main container-fluid" class="site-main">
            <?php do_action('tns_services_template'); ?>
        </main>
    </div>
    <?php get_footer();
}

tns_services_template();
