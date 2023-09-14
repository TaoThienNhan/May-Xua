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
                <img class="mb-5" src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/logo.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="content">
                    <div class="item mb-3 gap-3 d-flex justify-content-start align-items-center">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/Icon awesome-address-book.png"
                             alt="">
                        <span>1E Trần Quang Khải, P. Cái Khế, Q. Ninh Kiều, TP. Cần Thơ</span>
                    </div>
                    <div class="item mb-3 gap-3 d-flex justify-content-start align-items-center">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/Icon awesome-address-book.png"
                             alt="">
                        <span>support@company.com</span>
                    </div>
                    <div class="item mb-3 gap-3 d-flex justify-content-start align-items-center">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/Icon awesome-address-book.png"
                             alt="">
                        <span>0393-599120</span>
                    </div>
                    <div class="item mb-3 gap-3 d-flex justify-content-start align-items-center">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/Icon awesome-address-book.png"
                             alt="">
                        <span>www.mayxua.com</span>
                    </div>
                </div>
                <span class="copyright text-secondary">2023 © Spa May Xưa. Designed by <a class="text-secondary"
                                                                                          href="https://taynamsolution.vn/">Taynamsolution.vn</a></span>
            </div>
            <div class="col-md-2">
                <div class="title">Danh Mục</div>
                <ul>
                    <li>Trang chủ</li>
                    <li>Giới thiệu</li>
                    <li>Dịch vụ</li>
                    <li>Sản phẩm</li>
                    <li>Bảng giá</li>
                    <li>Liên hệ</li>
                </ul>
            </div>
            <div class="col-md-2">
                <div class="title">Dịch Vụ</div>
                <ul>
                    <li>Trang chủ</li>
                    <li>Giới thiệu</li>
                    <li>Dịch vụ</li>
                    <li>Sản phẩm</li>
                    <li>Bảng giá</li>
                    <li>Liên hệ</li>
                </ul>
            </div>
            <div class="col-md-3 social-media">
                <div class="title">Theo dõi chúng tôi</div>
                <div class="content d-flex mb-3">
                    <a href="#" class="icon">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/yt-icon.png" alt="">
                    </a>
                    <a href="#" class="icon">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/tiktok-icon.png" alt="">
                    </a>
                    <a href="#" class="icon">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/fb-icon.png" alt="">
                    </a>
                    <a href="#" class="icon">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/mes.png" alt="">
                    </a>
                    <a href="#" class="icon">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/zalo.png" alt="">
                    </a>
                </div>
                <div class="title">Đăng ký nhận tin</div>
                <?= do_shortcode('[forminator_form id="15"]') ?>
            </div>
        </div>
    </div>
</div>