<a href="<? the_permalink();?>" class="card">
    <? if (has_post_thumbnail()) {?>
        <div class="card__img">
            <img src="<? the_post_thumbnail_url('full');?>" alt="">
        </div>
    <? }?>
    <div class="card__bottom">
        <div class="card__caption">
            <div class="card__caption-name">
                <span><? the_title();?></span>
                <span><? the_title();?></span>
                <span><? the_title();?></span>
                <span><? the_title();?></span>
                <span><? the_title();?></span>
                <span><? the_title();?></span>
            </div>
            <div class="card__caption-mobile"><? the_title();?></div>
        </div>
        <? if ($location) {?>
            <div class="card__desc"><?=$location?></div>
        <? }?>
    </div>
</a>