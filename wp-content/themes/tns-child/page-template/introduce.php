<?php
/**
 * The landing page for our theme
 *
 * Template Name: Giới thiệu
 */

/**
 * The contact page for our theme
 */
function tns_introduces_template(){
    get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main container-fluid" class="site-main">
            <?php do_action('tns_introduces_template'); ?>
        </main>
    </div>
    <?php get_footer();
}

tns_introduces_template();
