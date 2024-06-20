<? get_header(); the_post();?>


    <main class="main-page">

        <?
            $promo_img = get_field('promo_img');
            $promo_tags = get_field('promo_tags');
        ?>
        <section class="services-promo">
            <div class="services-promo__bg">
                <img src="<?=($promo_img ? $promo_img : get_template_directory_uri().'/img/service/promo/bg.jpg')?>" alt="">
            </div>
            <div class="wrapper">
                <h1 class="services-promo__title title title_big"><? the_title();?></h1>
                <? if ($promo_tags) {?>
                    <div class="services-promo__tabs">
                        <? foreach ($promo_tags as $tag) {?>
                            <div class="services-promo__tab tab"><?=$tag['promo_tags-tag']?></div>
                        <? }?>
                    </div>
                <? }?>
            </div>
        </section>

        <?
            $cont = get_field('cont');
            if ($cont) {
                foreach ($cont as $item) {
                    if ($item['acf_fc_layout'] == 'cont_txt') {?>
                        <section class="text section-min">
                            <div class="wrapper wrapper_small">
                                <div class="text__body <?=($item['cont_txtBigText'] == 1 ? 'text__body_start' : '')?>">
                                    <div class="text__left">
                                        <? if ($item['cont_txt-titleMin']) {?>
                                            <div class="text__subtitle"><?=$item['cont_txt-titleMin'];?></div>
                                        <? } if ($item['cont_txt-title']) {?>
                                            <div class="text__title title"><?=$item['cont_txt-title'];?></div>
                                        <? }?>
                                    </div>
                                    <div class="text__right">
                                        <? if ($item['cont_txt-text']) {?>
                                            <div class="<?=($item['cont_txtBigText'] == 1 ? 'text__description' : 'text__desc')?>"><?=$item['cont_txt-text'];?></div>
                                        <? }?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <? } else if ($item['acf_fc_layout'] == 'cont_gallery') {
                        $cont_gallery_l = $item['cont_gallery-l'];
                    ?>
                        <section class="gallery section-min">
                            <div class="wrapper wrapper_small">
                                <?php $column_count = 0; foreach ($cont_gallery_l as $gal):
                                        if ($column_count % 2 == 0):
                                            if ($column_count != 0): ?>
                                                </div> <!-- Закрываем предыдущий .gallery__row -->
                                            <?php endif; ?>
                                                <div class="gallery__row">
                                        <?php endif; ?>

                                        <?php if ($gal['cont_gallery-l-type'] == 'Image'): ?>
                                            <div class="gallery__coll <?=($gal['cont_gallery-l-colBig'] == 1 ? 'gallery__coll_big' : '')?>">
                                                <a href="<?= $gal['cont_gallery-l-img'] ?>" class="gallery__img" data-fancybox="gallery">
                                                    <img src="<?= $gal['cont_gallery-l-img'] ?>" alt="">
                                                </a>
                                            </div>
                                        <?php elseif ($gal['cont_gallery-l-type'] == 'Video'): ?>
                                            <div class="gallery__coll <?=($gal['cont_gallery-l-colBig'] == 1 ? 'gallery__coll_big' : '')?>">
                                                <a href="<?= $gal['cont_gallery-l-link'] ?>" class="gallery__img video--js" data-fancybox="video-gallery">
                                                    <?= $gal['cont_gallery-l-frame'] ?>
                                                    <div class="gallery__play">
                                                        <img src="<?= get_template_directory_uri() ?>/img/service/play.svg" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endif;
                                $column_count++; endforeach; ?>
                                </div>
                            </div>
                        </section>
                    <? } else if ($item['acf_fc_layout'] == 'cont_galleryColumn') {
                        $cont_gallery_left = $item['cont_gallery-left'];
                        $cont_gallery_right = $item['cont_gallery-right'];
                    ?>
                        <section class="gallery section-min">
                            <div class="wrapper wrapper_small">
                                <div class="gallery__row">
                                    <? if ($cont_gallery_left) {?>
                                        <div class="gallery__coll <?=($item['cont_gallery-leftBig'] == 1 ? 'gallery__coll_height' : '')?>">
                                            <? foreach ($cont_gallery_left as $gal) {?>
                                                <?php if ($gal['cont_gallery-l-type'] == 'Image'): ?>
                                                    <a href="<?= $gal['cont_gallery-l-img'] ?>" class="gallery__img" data-fancybox="gallery-2">
                                                        <img src="<?= $gal['cont_gallery-l-img'] ?>" alt="">
                                                    </a>
                                                <?php elseif ($gal['cont_gallery-l-type'] == 'Video'): ?>
                                                    <a href="<?= $gal['cont_gallery-l-link'] ?>" class="gallery__img video--js" data-fancybox="video-gallery">
                                                        <?= $gal['cont_gallery-l-frame'] ?>
                                                        <div class="gallery__play">
                                                            <img src="<?= get_template_directory_uri() ?>/img/service/play.svg" alt="">
                                                        </div>
                                                    </a>
                                                <?php endif;?>
                                            <? }?>
                                        </div>
                                    <? } if ($cont_gallery_right) {?>
                                        <div class="gallery__coll <?=($item['cont_gallery-rightBig'] == 1 ? 'gallery__coll_height' : '')?>">
                                            <? foreach ($cont_gallery_right as $gal) {?>
                                                <?php if ($gal['cont_gallery-l-type'] == 'Image'): ?>
                                                    <a href="<?= $gal['cont_gallery-l-img'] ?>" class="gallery__img" data-fancybox="gallery-2">
                                                        <img src="<?= $gal['cont_gallery-l-img'] ?>" alt="">
                                                    </a>
                                                <?php elseif ($gal['cont_gallery-l-type'] == 'Video'): ?>
                                                    <a href="<?= $gal['cont_gallery-l-link'] ?>" class="gallery__img video--js" data-fancybox="video-gallery">
                                                        <?= $gal['cont_gallery-l-frame'] ?>
                                                        <div class="gallery__play">
                                                            <img src="<?= get_template_directory_uri() ?>/img/service/play.svg" alt="">
                                                        </div>
                                                    </a>
                                                <?php endif;?>
                                            <? }?>
                                        </div>
                                    <? }?>
                                </div>
                            </div>
                        </section>
                    <? } else if ($item['acf_fc_layout'] == 'cont_info') {
                        $counts = $item['cont_info-list'];
                    ?>
                        <section class="info section-min">
                            <div class="wrapper wrapper_small">
                                <div class="info__body" data-sticky-container>
                                    <div class="info__left">
                                        <div class="info__sticky sticky" data-margin-top="20" data-sticky-for="1023" data-sticky-class="is-sticky">
                                            <? if ($item['cont_info-title']) {?>
                                                <div class="info__title title"><?=$item['cont_info-title']?></div>
                                            <? } if ($item['cont_info-subtitle']) {?>
                                                <div class="info__subtitle"><?=$item['cont_info-subtitle']?></div>
                                            <? }?>
                                        </div>
                                    </div>
                                    <div class="info__right">
                                        <? if (isset($counts)) {
                                            foreach ($counts as $count) {?>
                                                <div class="info__coll">
                                                    <? if ($count['cont_info-list-count']) {?>
                                                        <div class="info__number">
                                                            <span><?=$count['cont_info-list-count']?></span>
                                                        </div>
                                                    <? } if ($count['cont_info-list-title']) {?>
                                                        <div class="info__desc"><?=$count['cont_info-list-title']?></div>
                                                    <? }?>
                                                </div>
                                            <? }
                                        }?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <? }
                }
            }
        ?>

        <?php
        $next_post = get_next_post();
        if (!empty($next_post)):
            $next_post_link = get_permalink($next_post->ID);
            $next_post_title = get_the_title($next_post->ID);
            $img_to_next_case = get_field('img_to_next_case', $next_post->ID);
            ?>
            <section class="next section-min">
                <div class="wrapper">
                    <a href="<?php echo esc_url($next_post_link); ?>" class="next__link">
                        <? if ($img_to_next_case) {?>
                            <div class="next__bg">
                                <img src="<?php echo $img_to_next_case ?>" alt="<?php echo esc_attr($next_post_title); ?>">
                            </div>
                        <? }?>
                        <div class="next__box">
                            <div class="next__caption">Next case</div>
                            <div class="next__name title title_big"><?php echo esc_html($next_post_title); ?></div>
                        </div>
                    </a>
                </div>
            </section>
        <?php endif; ?>

    </main>

<? get_footer();?>