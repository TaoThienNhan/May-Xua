<div class="container p-0 p-lg-5">
    <div class="title-header d-flex mb-3">
        <span></span>
        <strong><?=get_field('booking-sub-title', 'option')?></strong>
    </div>
    <h1 style="font-family: Playfair Display;" class="text-white mb-3"><?=get_field('booking-main-title', 'option')?></h1>
    <div class="row">
        <div class="col-md-9 text-white">
            <p>
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
            </p>
            <?=do_shortcode('[forminator_form id="17"]')?>
        </div>
        <div class="col-md-3">
            <h3 style="font-family: Playfair Display;" class="text-white">Địa Chỉ</h3>
            <p class="text-white">
                <?=get_field('website-address', 'option')?>
            </p>
            <div class="map" style="height: 200px">
                <?=get_field('google-map', 'option')?>
            </div>
        </div>
    </div>
</div>