<section class="welcome-wrapper" style="background: url('<?= get_stylesheet_directory_uri()?>/assets/src/images/bg-welcome.png');">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12">
                <div class="welcome-title">
                    <h5><?=get_field('mini-title-top', 'option')?></h5>
                    <h2><?=get_field('primary-title', 'option')?></h2>
                    <h4><?=get_field('mini-title-bottom', 'option')?></h4>
                </div>
                <div class="welcome-text">
                    <h4><?=get_field('main-content', 'option')?></h4>
                </div>
                <div class="welcome-link">
                    <?php
                    $item = get_field('link-to-introduct', 'option');
                    ?>
                    <a href="<?=$item['link']?>"><?=$item['title']?></a>
                </div>
            </div>
            <div class="welcome-block col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="border">
                    <div class="welcome-block__avatar text-center">
                        <img src="<?=get_field('image-welcome', 'option')?>" alt="avatar" >
                    </div>
                    <p>“<?=get_field('secondary-content', 'option')?>”</p>
                    <div class="welcome-block__phone">
                        <img src="<?= get_stylesheet_directory_uri()?>/assets/src/images/welcome_icon.svg" alt="phone"><br>
                        <a><?=get_field('website-phone', 'option')?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>