<style>
    @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&family=Manrope:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,900&display=swap');
</style>

<div class="list-blogs pt-5 bg-dark">
    <?php $category = get_queried_object(); ?>
    <div class="container-blogs-title d-flex align-items-center justify-content-center" style="height: 50vh; background: linear-gradient(to top, black, rgba(0, 0, 0, 0.127), rgba(255, 255, 255, 0)), url('<?=get_field('trang-danh-sach-bai-viet', 'option')?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <h1 class="text-uppercase text-white text-center play-font my-5 pb-0 text-70"><?= $category->name ?></h1>
    </div>
    <div class="list-blogss">
        <div class="container">
            <div class="row g-4">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        $post_title = get_the_title();
                        $post_date = get_the_date();
                        $post_content = get_the_content();
                        $post_thumbnail = get_the_post_thumbnail();

                        ?>
                        <div class="col-md-6">
                            <div class="img-date">
                                <a href="<?=get_permalink()?>"><?=$post_thumbnail?></a>
                                <div class="blog-date manrope-font text-18 bg-brown py-2 px-3 text-white"> <i class="far fa-calendar-alt"></i> <?= $post_date ?></div>
                            </div>
                            <div class="title-blog pe-5 mt-4">
                                <a href="<?=get_permalink()?>">
                                    <h3 class="text-30 play-font fw-700 text-blue my-2"><?=$post_title?></h3>
                                </a>
                                <p class="text-18 be-font fw-200 "><?=wp_trim_words($post_content, 30)?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <div class="pagination py-5 d-flex justify-content-center align-items-center">
                        <?php
                        global $wp_query;
                        $big = 999999999;
                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $wp_query->max_num_pages,
                            'prev_text' => '&laquo;',
                            'next_text' => '&raquo;'
                        ));
                        ?>
                    </div>
                <?php else : ?>
                    <p class="no-posts">Không có bài viết nào trong danh mục này.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>