<style>
    @font-face {
        font-family: Be VietNam Pro;
        src: url("<?=get_stylesheet_directory_uri()?>/assets/src/fonts/Be_Vietnam_Pro");
    }

    @font-face {
        font-family: Playfair_Display;
        src: url("<?=get_stylesheet_directory_uri()?>/assets/src/fonts/Playfair_Display");
    }


    @font-face {
        font-family: Manrone;
        src: url("<?=get_stylesheet_directory_uri()?>/assets/src/fonts/Manrope");
    }

    .products-bg {
        background-color: #fff;
        border-radius: 10vh;
        background-position: center;
        background: url("<?=get_stylesheet_directory_uri()?>/assets/src/images/Mask_group.png");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .image-cover {
        position: relative;
        height: auto;
        overflow: hidden;
        padding-top: 100%;
        background-position: 50% 50%;
        background-size: cover;
    }

    .image-cover img {
        right: 0;
        width: 100%;
        height: 100%;
        bottom: 0;
        left: 0;
        top: 0;
        position: absolute;
        -o-object-position: 50% 50%;
        object-position: 50% 50%;
        -o-object-fit: cover;
        object-fit: cover;
        font-family: "object-fit: cover;";
    }


</style>

<!--Products start-->
<div class="content-7 p-md-3 p-lg-5 bg-white">

    <div class="products-list mt-5">
        <div class="products products-bg ">
            <div class="header-title text-center pt-5">
                <span class="thin-title">Chất lượng & Uy tín</span>
                <strong class="strong-title">Sản phẩm của chúng tôi</strong>
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/Vector.png" alt="">
            </div>
            <div class="container">
                <div class="product-item-list p-md-3 p-lg-5">
                    <div class="d-flex p-md-3 p-lg-5 justify-content-center align-items-center row">
                        <div class="d-flex row">
                            <?php
                            $args = array(
                                'post_type' => 'product',
                                'limit' => '12',
                            );

                            $products = wc_get_products($args);
                            foreach ($products as $product) {
                                ?>
                                <div class="product-item col-lg-3 col-md-6 col-12">
                                    <div class="image-cover">
                                        <a href="<?= $product->get_permalink() ?>"><?= $product->get_image() ?></a>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a class="name-product" href="<?= $product->get_permalink() ?>"><strong><?= $product->get_name() ?></strong></a>
                                        <?php if ($product->is_on_sale()) : ?>
                                            <strong class="price-product me-3 price"><?php echo wc_price($product->get_sale_price()) ?></strong>
                                            <del class="text-secondary detail-text"><?php echo wc_price($product->get_regular_price()) ?></del>
                                        <?php else : ?>
                                            <?php
                                            ?>
                                            <strong class="price-product me-3 price"><?php echo wc_price($product->get_regular_price()) ?></strong>
                                            <?php
                                            ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php
                            }

                            ?>
                        </div>
                        <div class="row d-flex pt-5 justify-content-center">
                            <a href="<?= wc_get_page_permalink('shop') ?>" class="btn btn-under shadow-lg">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!--Products end-->