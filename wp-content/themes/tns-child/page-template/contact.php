<?php
/**
 * The landing page for our theme
 *
 * Template Name: Liên hệ
 */

/**
 * The contact page for our theme
 */
function tns_contacts_template(){
    get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main container-fluid" class="site-main">
            <div class="container-service-title d-flex align-items-center justify-content-center" style="height: 50vh; background: linear-gradient(to top, black, rgba(0, 0, 0, 0.127), rgba(255, 255, 255, 0)), url('<?=get_field('trang-lien-he', 'option')?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <h1 class="text-uppercase text-white text-center play-font my-5 pb-0 text-70">LIÊN HỆ</h1>
            </div>
            <div class="rounded-3 container">
                <?php do_action('tns_contacts_template'); ?>
            </div>
        </main>
    </div>
    <?php get_footer();
}

tns_contacts_template();
