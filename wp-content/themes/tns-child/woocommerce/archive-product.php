<?php
/**
 * The Template for displaying all archive product
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop');

?>
    <style>
        body {
            background-color: white !important;
        }
    </style>
    <div class="header bg-white" style="background: url('<?=get_field('trang-san-pham', 'option')?>'); object-fit:cover; background-repeat: no-repeat; background-size: cover">
        <section class="breadcrumb-new">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="breadcrumb__text">
                            <h2><?php
                                $current_category = get_queried_object();

                                if ($current_category) :
                                    $category_name = $current_category->name;
                                    echo ucfirst($category_name);
                                endif;
                                ?></h2>
                            <div class="breadcrumb__links text-center">
                                <a href="/">Trang chủ /</a>
                                <a href="#"><?php
                                    $current_category = get_queried_object();

                                    if ($current_category) :
                                        $category_name = $current_category->name;
                                        echo ucfirst($category_name);                                    endif;
                                    ?>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="details-service-wrapper">
        <div class="container py-5">
            <div class="row pb-5">
                <div
                    class="col-lg-12 text-black d-block justify-content-md-between d-md-flex justify-content-center align-items-center">
                    <p class="woocommerce-result-count d-flex align-items-center text-secondary">
                        <?= __('HIỂN THỊ', 'woocommerce') . ' ' . wc_get_loop_prop('total') . ' ' . __('TRONG', 'woocommerce') . ' ' . wc_get_loop_prop('total') . ' ' . __('KẾT QUẢ', 'woocommerce'); ?>
                    </p>
                    <div class="system d-flex align-items-center justify-content-center">
                        <?php woocommerce_catalog_ordering(); ?>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if (wc_get_loop_prop('total')):
                    while (have_posts()):
                        the_post();

                        global $product;

                        do_action('woocommerce_shop_loop');
                        ?>
                        <div class="product-item col-lg-3 col-md-6 col-12">
                            <div class="image-cover">
                                <a href="<?= $product->get_permalink() ?>"><?=$product->get_image()?></a>
                            </div>
                            <div class="d-flex flex-column">
                                <a class="name-product" href="<?= $product->get_permalink() ?>"><strong ><?=$product->get_name()?></strong></a>
                                <strong class="price-product"><?php echo wc_price($product->get_sale_price()) ?></strong>
                            </div>
                        </div>
                    <?php endwhile; ?><?php
                endif;

                woocommerce_product_loop_end();
                ?>
                <div class="pagination d-flex justify-content-center py-5 align-items-center">
                    <?php tns_pagination([
                        'prev' => '<',
                        'next' => '>'
                    ]); ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer('shop');
?>