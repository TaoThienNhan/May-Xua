<section class="service-wrapper py-5" style="background: url('<?= get_stylesheet_directory_uri()?>/assets/src/images/bg-welcome.png');">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="service-title text-center">
                    <h2>Bài viết khác</h2>
                    <img src="<?= get_stylesheet_directory_uri()?>/assets/src/images/service_icon.svg" alt="la" >
                </div>
            </div>
        </div>
        <div class="row service-slider d-flex">
            <?php
                $items = get_field('service', 'option');

                foreach ($items as $item) {
                    ?>
                    <div class="service-item">
                        <div class="service-item__img">
                            <a href="#">
                                <img class="rounded-3" src="<?=$item['image']?>" alt="dịch vụ" >
                            </a>
                        </div>
                        <div class="service-item__text d-flex ">
                            <div class="icon"  style=" background: url('<?= get_stylesheet_directory_uri()?>/assets/src/images/service/bg-icon.svg'); background-repeat: no-repeat; z-index: 2;">
                                <img src="<?= get_stylesheet_directory_uri()?>/assets/src/images/service/icon.svg" alt="la" >
                            </div>
                            <div class="title">
                                <a href="#">
                                    <h3><?=$item['title']?></h3>
                                </a>
                                <p><?=$item['description']?></p>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            ?>
        </div>

    </div>
    </div>
</section>