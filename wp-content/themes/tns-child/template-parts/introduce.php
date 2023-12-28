<style>
    .banner{
        background: url('<?=get_field('trang-gioi-thieu', 'option')?>');
        background-size: cover;
        background-repeat: no-repeat;
        /*max-height: 595px;*/
        /*height: 100%;*/
        height: 600px;
    }

    .menu-between{
        place-content: center;
    }

    .navbar-pagination {
        height: 25%;
        flex-shrink: 0;
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.50);
        background: rgba(0, 0, 0, 0.30);
        backdrop-filter: blur(40px);
        place-content: center;
    }
    .btn-booking{
        background-color: #C89F63;
        color: #fff;
        text-wrap: nowrap;
        font-size: 16px;
    }
</style>



<div class="content-8">
    <div class="banner container-fluid  d-grid">
        <div class="row title-in-banner mt-lg-5 mt-md-3 mt-1 d-grid" style="place-content: center;">
            <strong class="text-white" style="font-size: 70px;font-family: Playfair_Display">Giới thiệu</strong>
        </div>
    </div>

    <div class="about-content container-fluid bg-white py-5">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 col-12 mt-lg-5 mt-md-3 mt-1">
                    <div class="mini-about d-flex m-3">
                        <span style="
                        width: 50px;
                        height: 20px;
                        border-bottom: 1px solid #805346;">

                        </span>
                        <strong style="font-family: Be Vietnam Pro; font-size: 15px; color: #805346; font-weight: lighter"><?=get_field('introduct-sub-title', 'option')?></strong>
                    </div>

                    <div class="title-about" style="color: #385469;font-family: Playfair_Display;font-size: 50px;font-weight: bolder">
                        <strong>
                            <?=get_field('introduct-main-title', 'option')?>
                        </strong>
                    </div>

                    <div class="content-about" style="font-family: Be VietNam Pro; font-size: 18px;color: #33393D">
                        <strong style="font-weight: lighter">
                            <?=get_field('introduct-left-content', 'option')?>
                        </strong>
                    </div>

                    <div class="img-about-left">
                        <img class="w-100" src="<?=get_field('introduct-left-image', 'option')?>" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-12 mt-3">
                    <div class="img-about-right mt-lg-5 mt-md-3 mt-1"><img src="<?=get_field('introduct-right-image', 'option')?>" alt=""></div>
                    <div class="content-about-right mt-3" style="font-family: Be VietNam Pro; font-size: 18px;color: #33393D">
                        <strong style="font-weight: lighter"><?=get_field('introduct-right-content', 'option')?></strong></div>
                    <div class="slogan py-3">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/src/images/Group6770.png" alt="">
                        <strong style="font-family: Be VietNam Pro;font-style: italic;color: #385469;font-size: 25px"><?=get_field('introduct-slogan', 'option')?></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>