<section class="thumbnail-wrapper">
    <div class="container-fluid">
        <div class=" slide-thumbnail">
            <?php
                $items = get_field('slider-image-footer', 'option');

                foreach ($items as $item) {
                    ?>
                    <div class="thumbnail-img">
                        <img src="<?=$item['image']?>" alt="thumbnail" >
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</section>