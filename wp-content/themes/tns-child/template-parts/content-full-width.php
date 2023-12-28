<?php while (have_posts()) : ?>

	<?php the_post(); ?>
	<div class="container-service-title d-flex align-items-center justify-content-center" style="height: 50vh; background: linear-gradient(to top, black, rgba(0, 0, 0, 0.127), rgba(255, 255, 255, 0)), url('<?=get_field('cac-trang-khac', 'option')?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
		<h1 class="text-uppercase text-white text-center play-font my-5 pb-0 text-70">LIÊN HỆ</h1>
	</div>
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="entry-content">
						<?php the_content() ?>
					</div>
				</div>
			</div>
		</div>
	</article>

<?php endwhile;
