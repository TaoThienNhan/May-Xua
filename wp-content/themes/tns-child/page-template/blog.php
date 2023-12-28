<?php
/**
 * The landing page for our theme
 *
 * Template Name: Tin tức
 */

/**
 * The contact page for our theme
 */
function tns_blogs_template(){
    get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main container-fluid" class="site-main">
            <?php do_action('tns_blogs_template'); ?>
        </main>
    </div>
    <?php get_footer();
}

tns_blogs_template();
