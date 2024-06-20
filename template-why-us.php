<?
/* Template Name: Why us */
get_header();
the_post();

$subtitle = get_field('subtitle');
?>

    <main class="main-page">

        <section class="about-promo">
            <div class="wrapper">
                <div class="about-promo__box">
                    <div class="about-promo__title title"><? the_title();?></div>
                    <? if ($subtitle) {?>
                        <div class="about-promo__subtitle"><?=$subtitle?></div>
                    <? }?>
                </div>
            </div>
        </section>

        <section class="about-catalog section">
            <div class="wrapper wrapper_small">
                <div class="card-item">
                    <div class="card-item__left">
                        <div class="card-item__title title">Scale and high&nbsp;level of responsibility</div>
                        <div class="card-item__subtitle">We are invited to private VIP events for leading politicians,
                            members
                            of
                            royal families</div>
                    </div>
                    <div class="card-item__right card-item__right_people">
                        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                        <dotlottie-player src="https://lottie.host/82ab3501-ca58-44e3-a10a-20844b8462aa/yhcmh5K6R0.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></dotlottie-player>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-item__left">
                        <div class="card-item__title title">Bring the show to any continent</div>
                        <div class="card-item__subtitle">Perfomance of the world level anywhere on Earth</div>
                    </div>
                    <div class="card-item__right">
                        <div class="card-item__map">
                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                            <dotlottie-player src="https://lottie.host/a7fddcbc-8e3e-410e-aca4-2acc26ee1d64/WVKXkbYsUx.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></dotlottie-player>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-item__left">
                        <div class="card-item__title title">Fly where 99% of companies don't</div>
                        <div class="card-item__subtitle">We’re not afraid of the new, always ready to challenge ourselves
                            and
                            bring
                            crazy ideas to life</div>
                    </div>
                    <div class="card-item__right">
                        <div class="card-item__img">
                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                            <dotlottie-player src="https://lottie.host/ff6a8234-9d6f-4c33-bc5b-5f07eee75744/MNhjgZabad.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></dotlottie-player>
                        </div>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-item__left">
                        <div class="card-item__title title">Flexibility and speed in action</div>
                        <div class="card-item__subtitle">4 weeks or LESS from now until the start of your show. Our personal
                            record
                            for creating a show from scratch is 36 hours</div>
                    </div>
                    <div class="card-item__right card-item__right_item">
                        <div class="card-item-action">
                            <div class="card-item-action__card">
                                <div class="card-item-action__left">
                                    <div class="card-item-action__month">MAR</div>
                                    <div class="card-item-action__day">27</div>
                                </div>
                                <div class="card-item-action__right">
                                    <div class="card-item-action__caption">Finish</div>
                                    <div class="card-item-action__desc">Ready to go. Let’s bring your show to the next
                                        level!
                                    </div>
                                </div>
                            </div>
                            <div class="card-item-action__card">
                                <div class="card-item-action__left">
                                    <div class="card-item-action__month">MAR</div>
                                    <div class="card-item-action__day">12</div>
                                </div>
                                <div class="card-item-action__right">
                                    <div class="card-item-action__caption">Start</div>
                                    <div class="card-item-action__desc">Received payment. Started to plan the show.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?
            $partners_title = get_field('partners_title');
            $partners_list = get_field('partners_list');
            if ($partners_list) {
        ?>
            <section class="about-clients section">
                <div class="wrapper wrapper_small">
                    <div class="about-clients__top">
                        <div class="about-clients__icon">
                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                            <dotlottie-player src="https://lottie.host/3356bb9c-1aaa-43bd-b858-367d2c768aed/BV1IzcFaJx.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
                        </div>
                        <? if ($partners_title) {?>
                            <div class="about-clients__title title"><?=$partners_title?></div>
                        <? }?>
                    </div>
                    <div class="about-clients__body">
                        <? foreach ($partners_list as $row) {?>
                            <div class="about-clients__wrap">
                                <? foreach ($row['partners_imgs'] as $img) {?>
                                    <div class="about-clients__logo">
                                        <img src="<?=$img?>" alt="">
                                    </div>
                                <? }?>
                            </div>
                        <? }?>
                    </div>
                </div>
            </section>
        <? }?>

        <?
            $reviews_title = get_field('reviews_title');
            $reviews_list = get_field('reviews_list');
            if ($reviews_list) {
        ?>
            <section class="reviews section">
                <div class="wrapper">
                    <div class="reviews__body">
                        <div class="reviews__left">
                            <? if ($reviews_title) {?>
                                <div class="reviews__title title"><?=$reviews_title?></div>
                            <? }?>
                            <div class="reviews__arrows">
                                <div class="arrow arrow_prev">
                                    <div class="arrow__bg"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 12H5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 5L5 12L12 19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="arrow arrow_next">
                                    <div class="arrow__bg"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12H19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 5L19 12L12 19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="reviews__wrap">
                            <div class="reviews__swiper swiper">
                                <div class="swiper-wrapper">
                                    <? foreach ($reviews_list as $review) {?>
                                        <div class="reviews__slide swiper-slide">
                                            <div class="reviews__box">
                                                <? if ($review['reviews_list-title']) {?>
                                                    <div class="reviews__caption"><?=$review['reviews_list-title']?></div>
                                                <? } if ($review['reviews_list-text']) {?>
                                                    <div class="reviews__desc">
                                                        <p>“ <?=$review['reviews_list-text']?> ”</p>
                                                    </div>
                                                <? }?>
                                            </div>
                                        </div>
                                    <? }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <? }?>

        <? include 'modules/form.php';?>

    </main>

<? get_footer();?>