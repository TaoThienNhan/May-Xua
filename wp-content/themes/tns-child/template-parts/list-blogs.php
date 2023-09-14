<style>
    @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&family=Manrope:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,900&display=swap');
</style>

<div class="list-blogs pt-5 bg-dark">
    <div class="container">
        <h1 class="text-uppercase text-white text-center play-font my-5 pb-0 text-70">TIN TỨC</h1>
    </div>
    <div class="list-blogss  ">
        <div class="container">
            <div class="row g-4">
                <?php for ($i = 1; $i < 7; $i++) { ?>
                    <div class="col-md-6">
                        <div class="img-date">
                          <a href="">  <img src="<?= get_stylesheet_directory_uri(); ?>/assets/src/images/blog_<?= $i ?>.png" alt="" class="img-fluid w-100 img-service"></a>
                            <div class="blog-date manrope-font text-18 bg-brown py-2 px-3 text-white"> <i class="far fa-calendar-alt"></i> 01.01.2023</div>
                        </div>
                        <div class="title-blog pe-5 mt-4">
                            <a href=""><h3 class="text-30 play-font fw-700 text-blue my-2">Eiusmod tempor incididunt ut labore.</h3></a>
                            <p class="text-18 be-font fw-200 ">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>
                        </div>
                    </div>
                <?php  } ?>
            </div>

            <div class="pagination mt-5 d-flex justify-content-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination ">
                        <li class="page-item mx-3">
                            <a class="page-link text-18 be-font fw-500" href="#" aria-label="Previous">
                                <span aria-hidden="true">&lsaquo;</span>
                            </a>
                        </li>
                        <li class="page-item mx-3 active"><a class="page-link text-18 be-font fw-500" href="#">1</a></li>
                        <li class="page-item mx-3"><a class="page-link text-18 be-font fw-500" href="#">2</a></li>
                        <li class="page-item mx-3"><a class="page-link text-18 be-font fw-500" href="#">3</a></li>
                        <li class="page-item mx-3">
                            <a class="page-link text-18 be-font fw-500" href="#" aria-label="Next">
                                <span aria-hidden="true">&rsaquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>