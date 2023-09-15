<style>
    @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&family=Manrope:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,900&display=swap');
</style>

<div class="product-detail bg-dark">
    <div class="container-pd-title d-flex flex-column align-items-center justify-content-center" style="height: 50vh; background: url('<?= get_stylesheet_directory_uri(); ?>/assets/src/images/bg-product-detail.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
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
                        <div class="bg-light-orange  border border-1 border-light d-flex justify-content-center align-items-center" style="border-radius: 10px;"> <img src="http://mayxua.vnnn:8888/wp-content/themes/tns-child/assets/src/images/pd-2.png" alt="" class="img-fluid w-100 thumbnail-img"></div>
                        <div class="bg-light-orange  border border-1 border-light d-flex justify-content-center align-items-center" style="border-radius: 10px;"> <img src="http://mayxua.vnnn:8888/wp-content/themes/tns-child/assets/src/images/pd-2.png" alt="" class="img-fluid w-100 thumbnail-img"></div>
                        <div class="bg-light-orange  border border-1 border-light d-flex justify-content-center align-items-center" style="border-radius: 10px;"> <img src="http://mayxua.vnnn:8888/wp-content/themes/tns-child/assets/src/images/pd-3.png" alt="" class="img-fluid w-100 thumbnail-img"></div>
                    </div>
                    <div class="col-9 px-0 bg-light-orange" style="border-radius: 10px;">
                        <img src="http://mayxua.vnnn:8888/wp-content/themes/tns-child/assets/src/images/pd-4.png" alt="" class="img-fluid w-100 h-100 img-detail bg-light-orange border border-1 border-light">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="text-blue text-45 play-font fw-700 text-center text-md-start mt-3 mt-lg-0 ">Dầu gội Chanh Xả Bạc Hà</h1>
                    <p class="play-font text-18 fw-100">Thương hiệu: <span class="text-brown fw-700">May Xưa</span></p>
                    <p class="be-font text-18 fw-400 ">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    <div class="btn-buy d-md-flex align-items-center">
                        <a href="" class="btn bg-brown py-2 px-4 me-3 text-uppercase rounded-5 be-font text-15 text-white fw-500">LIÊN HỆ MUA HÀNG</a>
                        <div class="manrope-font text-18 fw-700 mt-3 mt-md-0"><i class="fas fa-mobile-alt text-brown"></i> 039- 599120</div>
                    </div>
                </div>
            </div>
            <hr style="margin: 10vh 0;">
            <h4 class="text-30 play-font fw-700 text-blue">Có thể bạn thích</h4>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <?php for ($i = 5; $i < 9; $i++) {  ?>
                                <div class="col-md-3 col-6 text-center product-carosel">
                                    <a href="">
                                        <img src="http://mayxua.vnnn:8888/wp-content/themes/tns-child/assets/src/images/pd-<?= $i ?>.png" alt="" class="d-block w-100 img-carosel  bg-light-orange rounded border border-1 border-light">
                                    </a>
                                    <a href="">
                                        <h5 class="play-font text-18 fw-600 text-dark my-3">BODY CREAM</h5>
                                    </a>
                                    <p class="manrope-font text-15 fw-500">123.000 đ </p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php for ($i = 5; $i < 9; $i++) {  ?>
                                <div class="col-md-3 col-6 text-center product-carosel">
                                    <a href="">
                                        <img src="http://mayxua.vnnn:8888/wp-content/themes/tns-child/assets/src/images/pd-<?= $i ?>.png" alt="" class="d-block w-100 img-carosel  bg-light-orange rounded border border-1 border-light">
                                    </a>
                                    <a href="">
                                        <h5 class="play-font text-18 fw-600 text-dark my-3">BODY CREAM</h5>
                                    </a>
                                    <p class="manrope-font text-15 fw-500">123.000 đ </p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <i class="fas fa-chevron-circle-left text-dark  fs-2" style="color: #D9CBC7"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <i class="fas fa-chevron-circle-right text-dark fs-2"></i>
                </button>
            </div>
        </div>
    </div>
</div>