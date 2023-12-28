<?php

$home_url = get_home_url();

$archive_url = get_post_type_archive_link('post');

$single_post_title = get_the_title();

$post_thumbnail_id = get_post_thumbnail_id();

$post_thumbnail_url = wp_get_attachment_image_src($post_thumbnail_id, 'full');

$post_title = get_the_title();

$post_date = get_the_date('d/m/Y');

$categories = get_the_category();

?>
<div class="header" style="background: url('<?=get_field('trang-chi-tiet-tin', 'option')?>'); object-fit:cover; background-repeat: no-repeat; background-size: cover">
    <section class="breadcrumb-new">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="breadcrumb__text">
                    <?php
                    if ($categories) {
                        foreach ($categories as $category) {
                            echo '<h2>'.$category->name.'</h2>
';
                        }
                    }
                    ?>
                        <div class="breadcrumb__links text-center">
                            <a href="/">Trang chủ /</a>
                            <?php
                            if ($categories) {
                                foreach ($categories as $category) {
                                    echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> &nbsp;<span>/</span>';
                                }
                            }
                            ?>
                            <span class="text-white">&nbsp;<?php echo $single_post_title; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="details-service-wrapper bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                <div class="title">
                    <h2><?php echo $post_title; ?></h2>
                    <img src="<?= get_stylesheet_directory_uri()?>/assets/src/images/service_icon.svg" alt="la" >
                </div>
            </div>
        </div>
        <div class="row service__details__content">
            <?php the_content() ?>
        </div>
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="book-btn">
                    <a href="/lien-he"> Đặt lịch</a>
                </div>
            </div>
        </div>
    </div>
</section>