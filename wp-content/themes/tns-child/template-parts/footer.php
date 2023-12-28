<style>
    .footer {
        background: url('<?= get_stylesheet_directory_uri(); ?>/assets/src/images/footer-banner.png');
        background-size: cover;
        background-position: bottom;
    }
</style>

<div class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img class="mb-5" src="<?=get_field('website-logo', 'option')?>" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="content">
                    <div class="item mb-3 gap-3 d-flex justify-content-start align-items-center">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/Icon awesome-address-book.png"
                             alt="">
                        <span><?=get_field('website-address', 'option')?></span>
                    </div>
                    <div class="item mb-3 gap-3 d-flex justify-content-start align-items-center">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/Icon material-email.png"
                             alt="">
                        <span><?=get_field('website-email', 'option')?></span>
                    </div>
                    <div class="item mb-3 gap-3 d-flex justify-content-start align-items-center">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/Icon awesome-phone-square-alt.png"
                             alt="">
                        <span><?=get_field('website-phone', 'option')?></span>
                    </div>
                    <div class="item mb-3 gap-3 d-flex justify-content-start align-items-center">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/Icon material-computer.png"
                             alt="">
                        <span><?=get_field('website-domain', 'option')?></span>
                    </div>
                </div>
                <span class="copyright text-secondary">2023 © Spa May Xưa. Designed by <a class="text-secondary"
                                                                                          href="https://taynamsolution.vn/">Taynamsolution.vn</a></span>
            </div>
            <div class="col-md-2">
                <div class="title">Danh Mục</div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'danh-muc-menu',
                    'container'      => false,
                    'menu_class'     => 'menu-item',
                ));
                ?>
            </div>
            <div class="col-md-2">
                <div class="title">Dịch Vụ</div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'dịch-vu-menu',
                    'container'      => false,
                    'menu_class'     => 'menu-item',
                ));
                ?>
            </div>
            <div class="col-md-3 social-media">
                <div class="title">Theo dõi chúng tôi</div>
                <div class="content d-flex mb-3">
                    <a href="<?=get_field('youtube', 'option')?>" class="icon">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/yt-icon.png" alt="">
                    </a>
                    <a href="<?=get_field('tiktok', 'option')?>" class="icon">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/tiktok-icon.png" alt="">
                    </a>
                    <a href="<?=get_field('facebook', 'option')?>" class="icon">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/fb-icon.png" alt="">
                    </a>
                    <a href="<?=get_field('messenger', 'option')?>" class="icon">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/mes.png" alt="">
                    </a>
                    <a href="<?=get_field('zalo', 'option')?>" class="icon">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/zalo.png" alt="">
                    </a>
                </div>
                <div class="title">Đăng ký nhận tin</div>
                <?= do_shortcode('[forminator_form id="15"]') ?>
            </div>
        </div>
    </div>
</div>