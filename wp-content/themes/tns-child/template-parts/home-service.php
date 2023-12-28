<style>
    @font-face {
        font-family:Be VietNam Pro;
        src: url("<?=get_stylesheet_directory_uri()?>/assets/src/fonts/Be_Vietnam_Pro");
    }

    @font-face {
        font-family:Playfair_Display;
        src: url("<?=get_stylesheet_directory_uri()?>/assets/src/fonts/Playfair_Display");
    }
    @font-face {
        font-family:Manrone;
        src: url("<?=get_stylesheet_directory_uri()?>/assets/src/fonts/Manrope");
    }
    .carousel-bg {
        border-radius: 10vh;
        background-position: center;
        background: url("<?=get_stylesheet_directory_uri()?>/assets/src/images/Rectangle%20318.png");
        background-size: cover;
    }
    .img-right-frist {
        background: url("<?=get_stylesheet_directory_uri()?>/assets/src/images/Rectangle%20319.png");
        background-size: cover;
        /*width: 378px;*/
        height: 733px;
    }
    .d-md-none d-lg-block img-right-last{
        background: url("<?=get_stylesheet_directory_uri()?>/assets/src/images/Rectangle%20320.png");
        background-size: cover;
        width: 180px;
        height: 733px;
    }
</style>
<!--Service-spa start-->
<div class="content-6 p-5">
    <div id="carousel-meet-indicator" class="carousel slide mt-5">
        <div class="carousel-bg">
            <div class="container ">
                <div class="carousel-inner carousel-meet h-auto">
                    <?php
                        $items = get_field('tndv', 'option');
                        $firstSlide = true;


                    foreach ($items as $item) {
                            $slideClass = $firstSlide ? 'active' : '';
                            $firstSlide = false;
                            ?>
                            <div class="carousel-item p-5 <?=$slideClass?>">
                                <div class="slider-1 d-flex justify-content-center align-items-center row">
                                    <div class="d-flex row col-12 col-lg-6 banner-service">
                                        <div class="col-12 col-lg-8 img-right-frist" style="
                                            background: url('<?=$item['tndv-main-image']?>');
                                            background-size: cover;
                                            /*width: 378px;*/
                                            height: 733px;"></div>
                                        <div class="col-12 col-lg-8 d-md-none d-lg-block img-right-last" style="
                                            background: url('<?=$item['tndv-sub-image']?>');
                                            background-size: cover;
                                            width: 180px;
                                            height: 733px;"></div>
                                    </div>
                                    <div class="silder-text col-12 col-lg-6">
                                        <div class="title-header d-flex">
                                            <span></span>
                                            <strong><?=$item['tndv-sub-title']?></strong>
                                        </div>

                                        <h4 class="text-40 text-center text-title my-3"><?=$item['tndv-main-title']?></h4>
                                        <img src="<?=get_stylesheet_directory_uri()?>/assets/src/images/Vector.png" class="d-inline vector-logo col-12 col-lg-6" alt="...">

                                        <br>
                                        <?=$item['tndv-content']?>
                                        <div class="d-flex row align-items-center justify-content-center pt-3 btn-list-under">
                                            <a href="/lien-he" class="btn btn-under shadow-lg text-20 px-5 my- col-lg-6 col-12">Đặt Lịch</a>
                                            <div class="d-flex col-lg-6 col-12 align-items-center justify-content-center">
                                                <div class="col-lg-0 col-3"></div>
                                                <div class="col-lg-4 col-2 icon-inner">
                                                    <div class="bg-icon"><a href="<?=get_field('facebook', 'option')?>" ><img src="<?=get_stylesheet_directory_uri()?>/assets/src/images/Group6579.png"  alt=""></a></div>
                                                </div>
                                                <div class="col-lg-4 col-2 icon-inner">
                                                    <div class="bg-icon"><a href="<?=get_field('messenger', 'option')?>" ><img src="<?=get_stylesheet_directory_uri()?>/assets/src/images/Group6578.png"  alt=""></a></div>
                                                </div>
                                                <div class="col-lg-4 col-2 icon-inner">
                                                    <div class="bg-icon"><a href="<?=get_field('zalo', 'option')?>" ><img src="<?=get_stylesheet_directory_uri()?>/assets/src/images/Group.png"  alt=""></a></div>
                                                </div>
                                                <div class="col-lg-0 col-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-meet-indicator"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon rounded-circle btn-carousel p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next " type="button" data-bs-target="#carousel-meet-indicator"
                data-bs-slide="next">
            <span class="carousel-control-next-icon rounded-circle btn-carousel p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!--Service-spa end-->