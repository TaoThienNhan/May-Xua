<style>
    @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&family=Manrope:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,900&display=swap');
</style>

<div class="services  bg-dark">
    <div class="container-service-title d-flex align-items-center justify-content-center"
         style="height: 50vh; background: linear-gradient(to top, black, rgba(0, 0, 0, 0.127), rgba(255, 255, 255, 0)), url('<?=get_field('trang-dich-vu', 'option')?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <h1 class="text-uppercase text-white text-center play-font my-5 pb-0 text-70">DỊCH VỤ</h1>
    </div>
    <div class="premium-servicess bg-white mx-4">
        <div class="container">
            <div class="premium mb-5">
                <div class="title-premium text-18 text-uppercase text-center be-font fw-500"
                     style="letter-spacing: 10px;"><?=get_field('service-sub-title', 'option')?>
                </div>
                <p class="text-premium text-24 text-center be-font fw-500 mt-2 ">
                    <?=get_field('service-main-title', 'option')?>
                </p>
            </div>
            <?php
            $content_1 = get_field('service-content-1', 'option');
            $content_2 = get_field('service-content-2', 'option');
            $content_3 = get_field('service-content-3', 'option');
            ?>
            <div class="row mt-100 service-container d-flex align-items-center align-items-lg-stretch">
                <div class="col-md-6 col-left px-0 position-lg-relative">
                    <img src="<?=$content_1['image']?>" alt=""
                         class="img-fluid w-100 img-service">
                </div>
                <div
                    class="col-md-6 mt-lg-5  bg-light p-5  col-right service-box-content position-lg-relative d-flex justify-content-center justify-content-lg-start flex-column align-items-center align-items-lg-start">
                    <h1 class="text-premium text-45 text-center text-md-start"><?=$content_1['title']?></h1>
                    <img src="<?= get_stylesheet_directory_uri(); ?>/assets/src/images/vector.svg" alt=""
                         class="img-fluid my-3" style="max-width: 70px; max-height: 35px;">
                    <p class="be-font text-18 fw-400 text-lg-start text-center"><?=$content_1['content']?></p>
                    <a href="/lien-he" class=" mt-3 text-15 fw-700 be-font text-uppercase text-decoration-none title-premium">ĐẶT
                        LỊCH CHĂM SÓC</a>
                    <br>
                    <a href="<?=$content_1['link']?>"
                       class="btn btn-white btn-right text-15 fw-700 be-font text-uppercase text-decoration-none px-4 py-2 mt-3 mt-lg-0 position-lg-absolute">XEM
                        THÊM</a>
                </div>
            </div>

            <div class="row mt-100 service-container d-flex align-items-center align-items-lg-stretch">
                <div
                    class="col-md-6 order-2 order-lg-1 mt-lg-5  bg-light p-5  col-left service-box-content position-lg-relative d-flex justify-content-center justify-content-lg-start flex-column align-items-center align-items-lg-start"
                    style="z-index: 1;">
                    <h1 class="text-premium  text-45 text-center text-md-start"><?=$content_2['title']?></h1>
                    <img src="<?= get_stylesheet_directory_uri(); ?>/assets/src/images/vector.svg" alt=""
                         class="img-fluid my-3" style="max-width: 70px; max-height: 35px;">
                    <p class="be-font text-18 fw-400 text-lg-start text-center"><?=$content_2['content']?></p>
                    <a href="/lien-he" class=" mt-3 text-15 fw-700 be-font text-uppercase text-decoration-none title-premium">ĐẶT
                        LỊCH CHĂM SÓC</a>
                    <br>
                    <a href="<?=$content_2['link']?>"
                       class="btn btn-white btn-left text-15 fw-700 be-font text-uppercase text-decoration-none px-4 py-2 mt-3 mt-lg-0 position-lg-absolute">XEM
                        THÊM</a>
                </div>
                <div class="col-md-6 order-1 order-lg-2 col-right px-0 position-lg-relative">
                    <img src="<?=$content_2['image']?>" alt=""
                         class="img-fluid w-100 img-service">
                </div>
            </div>

            <div class="row mt-100 service-container d-flex align-items-center align-items-lg-stretch">
                <div class="col-md-6 col-left px-0 position-lg-relative">
                    <img src="<?=$content_3['image']?>" alt=""
                         class="img-fluid w-100 img-service">
                </div>
                <div
                    class="col-md-6 mt-lg-5  bg-light p-5  col-right service-box-content position-lg-relative d-flex justify-content-center justify-content-lg-start flex-column align-items-center align-items-lg-start">
                    <h1 class="text-premium text-45 text-center text-md-start"><?=$content_3['title']?></h1>
                    <img src="<?= get_stylesheet_directory_uri(); ?>/assets/src/images/vector.svg" alt=""
                         class="img-fluid my-3" style="max-width: 70px; max-height: 35px;">
                    <p class="be-font text-18 fw-400 text-lg-start text-center"><?=$content_3['content']?>.</p>
                    <a href="/lien-he" class=" mt-3 text-15 fw-700 be-font text-uppercase text-decoration-none title-premium">ĐẶT
                        LỊCH CHĂM SÓC</a>
                    <br>
                    <a href="<?=$content_3['link']?>"
                       class="btn btn-white btn-right text-15 fw-700 be-font text-uppercase text-decoration-none px-4 py-2 mt-3 mt-lg-0 position-lg-absolute">XEM
                        THÊM</a>
                </div>
            </div>
        </div>
    </div>
</div>