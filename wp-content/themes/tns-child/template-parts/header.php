<div class="header-wrapper" style="
	background: url('<?=get_field('header-banner', 'option')?>');
	background-size: cover;
	background-repeat: no-repeat;
	">
	<div class="container-fluid">
		<div class="row d-flex align-items-center p-5">
			<div class="col-md-2">
				<div class="logo text-center">
					<a href="/">
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/logo.png" alt="">
					</a>
				</div>
			</div>
			<div class="col-md-7 d-none d-lg-block">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'primary-menu d-flex justify-content-center flex-wrap text-uppercase text-white',
				));
				?>
			</div>
			<div class="col-md-3 d-none d-lg-block">
				<div class="order d-flex justify-content-end align-items-center gap-2">
					<img src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/phone_icon.png" alt="">
					<span class="phone">039- 599120</span>
					<a class="booking px-4 py-2" href="#">Đặt lịch</a>
				</div>
			</div>
		</div>
		<div class="menu-mobile d-flex d-lg-none justify-content-between p-4">
			<div class="phone-mobile d-flex justify-content-center align-items-center">
				<a href="tel:<?=get_field('phone_primary', 'option')?>" class="phone-icon d-flex justify-content-center align-items-center text-black-50">
					<i class="fas fa-phone-volume text-white"></i>
				</a>
			</div>
			<?php
			wp_nav_menu(array(
				'theme_location' => 'primary',
				'container' => 'nav',
				'container_id' => 'mmenu',
			));
			?>
			<button id="mmenu-btn" class="menu-cate-mobile"><i class="fa-solid fa-bars"></i></button>
		</div>
	</div>
	<div class="position-absolute bottom-0 w-100 d-lg-block d-none">
		<img class="w-100" src="<?= get_stylesheet_directory_uri() ?>/assets/src/images/header-bottom.png" alt="">
	</div>
</div>
