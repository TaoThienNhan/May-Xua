<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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

if (!defined('ABSPATH')){
	exit; // Exit if accessed directly
}

get_header('shop');

/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
//do_action('woocommerce_before_main_content');
?>

<?php while (have_posts()) : ?><?php the_post();
	global $product;
	?>

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&family=Manrope:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,900&display=swap');
	</style>

	<div class="product-detail bg-dark">
		<div class="container-pd-title d-flex flex-column align-items-center justify-content-center" style="height: 50vh; background: url('<?=get_field('trang-chi-tiet-san-pham', 'option')?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
			<h1 class="text-uppercase text-white text-center play-font my-5 pb-0 text-70">Sản phẩm</h1>
			<nav aria-label="breadcrumb d-flex justify-content-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item be-font text-24"><a href="#">Trang chủ</a></li>
					<li class="breadcrumb-item be-font text-24"><a href="#">Sản phẩm</a></li>
					<li class="breadcrumb-item be-font text-24 active" aria-current="page"><a href="">Dầu gội chanh xả bạc hà</a></li>
				</ol>
			</nav>
		</div>
		<div class="product-detail-area py-5 px-3  bg-white">
			<div class="container">
				<div class="row gx-5">
					<div class="col-lg-6 row">
						<div class="col-3 d-flex flex-column justify-content-between">
							<?php
							$attachment_ids = $product->get_gallery_image_ids();
							foreach ($attachment_ids as $attachment_id){
								?>
								<div class="bg-light-orange img-gallery border border-1 border-light d-flex justify-content-center align-items-center" style="border-radius: 10px;">
									<a href="<?= wp_get_attachment_url($attachment_id) ?>" style="display: block; width: 100%">
										<img src="<?= wp_get_attachment_image_url($attachment_id,
											'thumbnail') ?>" width="100%" class="img-fluid w-100 thumbnail-img">
									</a>
								</div>
								<?php
							}
							?>
						</div>
						<div class="col-9 px-0 bg-light-orange" style="border-radius: 10px;">
							<div class="image-cover main-image">
								<?= wp_get_attachment_image($product->get_image_id(), 'woocommerce_single'); ?>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<h1 class="text-blue text-45 play-font fw-700 text-center text-md-start mt-3 mt-lg-0 "><?= $product->get_name() ?></h1>
						<p class="play-font text-18 fw-100">Thương hiệu: <span class="text-brown fw-700"><?=get_field('website-name', 'option')?></span></p>
						<p class="be-font text-18 fw-400 "><?= $product->get_description() ?></p>
						<div class="btn-buy d-md-flex align-items-center">
							<a href="/lien-he" class="btn bg-brown py-2 px-4 me-3 text-uppercase rounded-5 be-font text-15 text-white fw-500">LIÊN HỆ MUA HÀNG</a>
							<div class="manrope-font text-18 fw-700 mt-3 mt-md-0"><i class="fas fa-mobile-alt text-brown"></i> <?=get_field('website-phone', 'option')?></div>
						</div>
					</div>
				</div>
				<hr style="margin: 10vh 0;">
				<h4 class="text-30 play-font fw-700 text-blue">Có thể bạn thích</h4>
				<div class="row">
					<?php
					$current_product_id = get_the_ID();
					$product_categories = wp_get_post_terms($current_product_id, 'product_cat');

					if ($product_categories){
					$category_ids = [];

					foreach ($product_categories as $category){
						$category_ids[] = $category->term_id;
					}

					$args = [
						'post_type'      => 'product',
						'posts_per_page' => 8,
						'tax_query'      => [
							[
								'taxonomy' => 'product_cat',
								'field'    => 'term_id',
								'terms'    => $category_ids,
							],
						],
					];

					$related_query = new WP_Query($args);

					if ($related_query->have_posts()) :
					?>
					<div class="related-products pt-2 mb-5">
						<div class="row product-slider">
							<?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
								<div class="col-md-3 col-6 text-center product-carosel">
									<a href="<?= $product->get_permalink() ?>"><?= $product->get_image() ?></a>

									<a href="<?= $product->get_permalink() ?>">
										<h5 class="play-font text-18 fw-600 text-dark my-3"><?php echo mb_substr($product->get_name(), 0, 40); ?></h5>
									</a>
									<p class="manrope-font text-15 fw-500"><?=$product->get_price()?></p>
								</div>
							<?php endwhile; ?>
						</div>
						<?php
						endif;
						wp_reset_postdata();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php do_action('woocommerce_after_single_product'); ?><?php endwhile; // end of the loop.


get_footer('shop');
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>
