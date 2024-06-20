<?php get_header(); ?>

<div class="page">

    <main class="main" id="main">

        <?
            $promo_vidBg = get_field('promo_vidBg');
            $promo_vidLink = get_field('promo_vidLink');
            $promo_textLine1 = get_field('promo_textLine1');
            $promo_textLine2 = get_field('promo_textLine2');
            $promo_textLine3 = get_field('promo_textLine3');
            $promo_textLineComment = get_field('promo_textLineComment');
            if ($promo_vidBg) {
        ?>
            <section class="promo" id="promo">
                <div class="promo__wrap">
                    <div class="promo__wrap-inner">
                        <? if ($promo_textLine1 || $promo_textLine2 || $promo_textLine3) {?>
                            <div class="promo__content" id="promo-content">
                                <? if ($promo_textLine1) {?>
                                    <div class="promo__content-text first-text">
                                        <span><?=$promo_textLine1?></span>
                                    </div>
                                <? } if ($promo_textLine2) {?>
                                    <div class="promo__content-text second-text">
                                        <span><?=$promo_textLine2?></span>
                                    </div>
                                <? } if ($promo_textLine3 || $promo_textLineComment) {?>
                                    <div class="promo__content-text third-text">
                                        <? if ($promo_textLine3) {?>
                                            <span><?=$promo_textLine3?></span>
                                        <? } if ($promo_textLineComment) {?>
                                            <div class="promo__content-inner"><?=$promo_textLineComment?></div>
                                        <? }?>
                                    </div>
                                <? }?>
                            </div>
                        <? }?>
                        <div class="promo__video" id="promo-video">
                            <?=$promo_vidBg?>
                        </div>
                    </div>

                    <? if ($promo_vidLink) {?>
                        <a href="<?=$promo_vidLink?>" class="play" id="promo-btn-play" data-fancybox="video-gallery">
                            <div class="play__icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.58203 4.75189C6.58203 3.56514 7.8949 2.84838 8.89317 3.49013L19.892 10.5608C20.8105 11.1513 20.8105 12.4939 19.892 13.0843L8.89317 20.155C7.8949 20.7968 6.58203 20.08 6.58203 18.8933V4.75189Z" fill="black" />
                                </svg>
                            </div>
                            <div class="play__caption">Play showreel</div>
                        </a>
                    <? }?>
                </div>
            </section>
        <? }?>

        <section class="show-technology space-grotesk section">
            <div class="show-technology__body">
                <div class="show-technology__box">
                    <div class="show-technology__caption">DIGITAL ART</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">DIGITAL ART</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">DIGITAL ART</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">DIGITAL ART</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">DIGITAL ART</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">DIGITAL ART</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">DIGITAL ART</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">DIGITAL ART</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">DIGITAL ART</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">DIGITAL ART</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">DIGITAL ART</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="show-technology__body">
                <div class="show-technology__box">
                    <div class="show-technology__caption">Show technology</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">Show technology</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">Show technology</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">Show technology</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">Show technology</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z" fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z" fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z" fill="white" />
                            <path
                                d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">Show technology</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z"
                                fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z"
                                  fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z"
                                  fill="white" />
                            <path
                                d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">Show technology</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z"
                                fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z"
                                  fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z"
                                  fill="white" />
                            <path
                                d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="show-technology__box">
                    <div class="show-technology__caption">Show technology</div>
                    <div class="show-technology__icon">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M30.9076 0.0224609L19.4561 11.4696L23.0488 15.0637L34.5004 3.61652L30.9076 0.0224609Z"
                                fill="white" />
                            <path d="M11.9519 18.9595L0.500977 30.4066L4.09374 34.0007L15.5446 22.5535L11.9519 18.9595Z"
                                  fill="white" />
                            <path d="M23.0463 18.9517L19.4529 22.5451L30.9024 33.9942L34.4959 30.4008L23.0463 18.9517Z"
                                  fill="white" />
                            <path
                                d="M4.10199 -0.000488281L0.508545 3.59296L11.969 15.0535L15.5624 11.46L4.10199 -0.000488281Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <?
            $content = get_field('content');
            if ($content) {
                foreach ($content as $cont) {
                    if ($cont['acf_fc_layout'] == 'quality') {?>
                        <section class="quality section">
                            <div class="quality__img">
                                <picture>
                                    <source srcset="<?=$cont['quality_img']?>" media="(min-width: 760px)" />
                                    <img src="<?=$cont['quality_imgMobile']?>" alt="" />
                                </picture>
                            </div>
                            <div class="wrapper">
                                <div class="quality__wrap">
                                    <div class="quality__box box">
                                        <div class="box__icon box__icon_1">
                                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                                            <dotlottie-player src="https://lottie.host/ec861b0b-f6ef-400a-bcd8-79c4f3d4812a/MfveZE8tLH.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
                                        </div>
                                        <? if ($cont['quality_title']) {?>
                                            <h2 class="box__title title"><?=$cont['quality_title']?></h2>
                                        <? } if ($cont['quality_text']) {?>
                                            <div class="box__subtitle subtitle"><?=$cont['quality_text']?></div>
                                        <? }?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <? } if ($cont['acf_fc_layout'] == 'solutions') {?>
                        <section class="solutions section">
                            <div class="solutions__body">
                                <div class="solutions__img">
                                    <img src="<?=get_template_directory_uri()?>/img/solutions/img-new.png" alt="">
                                </div>
                                <div class="solutions__container">
                                    <div class="solutions__bg">
                                        <img src="<?=get_template_directory_uri()?>/img/solutions/bg.svg" alt="">
                                    </div>
                                    <div class="solutions__video">
                                        <video class="video" pip="false" autoplay muted loop="" preload="metadata" playsinline="" webkit-playsinline="" poster="">
                                            <source src="<?=get_template_directory_uri()?>/img/videos/video.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper">
                                <div class="solutions__wrap">
                                    <div class="solutions__box box">
                                        <div class="box__icon box__icon_2">
                                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                                            <dotlottie-player src="https://lottie.host/b66e6470-cd46-461a-95e6-8db3764c3ee2/XcbPtQwstb.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
                                        </div>
                                        <? if ($cont['solutions_title']) {?>
                                            <h2 class="box__title title"><?=$cont['solutions_title']?></h2>
                                        <? } if ($cont['solutions_text']) {?>
                                            <div class="box__subtitle subtitle"><?=$cont['solutions_text']?></div>
                                        <? }?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <? } if ($cont['acf_fc_layout'] == 'video') {?>
                        <section class="main-video section">
                            <div class="wrapper">
                                <div class="main-video__body">
                                    <video class="video" pip="false" autoplay muted loop="" preload="metadata" playsinline="" webkit-playsinline="" poster="">
                                        <source src="<?=$cont['video_mp4']?>" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </section>
                    <? } if ($cont['acf_fc_layout'] == 'text_animation') {?>
                        <section class="main-work space-grotesk section">
                            <? if ($cont['text_animation-img']) {?>
                                <div class="main-work__img">
                                    <img src="<?=$cont['text_animation-img']?>" alt="">
                                </div>
                            <? }?>
                            <div class="wrapper">
                                <div class="main-work__body main-work-scroll">
                                    <div class="main-work__title space-grotesk"><?=$cont['text_animation-text']?></div>
                                </div>
                            </div>
                        </section>
                    <? }
                }
            }
        ?>

        <section class="key-numbers">
            <div class="wrapper">
                <div class="key-numbers__body">
                    <div class="key-numbers-title">Key numbers</div>
                    <div class="key-numbers__wrap">
                        <div class="key-numbers__swiper swiper">
                            <div class="swiper-wrapper">
                                <div class="key-numbers__slide swiper-slide">
                                    <div class="key-numbers-card key-numbers-card_map">
                                        <div class="key-numbers-card__img">
                                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                                            <dotlottie-player src="https://lottie.host/a7fddcbc-8e3e-410e-aca4-2acc26ee1d64/WVKXkbYsUx.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></dotlottie-player>
                                        </div>
                                        <div class="key-numbers-card__body">
                                            <div class="key-numbers-card__box">
                                                <div class="key-numbers-card__value dm-mono">30+</div>
                                                <div class="key-numbers-card__desc">Countries</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="key-numbers__slide swiper-slide">
                                    <div class="key-numbers-card key-numbers-card_viewers">
                                        <div class="key-numbers-card__img">
                                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                                            <dotlottie-player src="https://lottie.host/3c0046de-afa1-48c2-bf01-05dfd7994611/gJ6HnVRmEL.json" background="transparent" speed="1" style="width: 100%; height: 110%;" loop autoplay></dotlottie-player>
                                        </div>
                                        <div class="key-numbers-card__body">
                                            <div class="key-numbers-card__box">
                                                <div class="key-numbers-card__value dm-mono">150+</div>
                                                <div class="key-numbers-card__desc">Million viewers</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="key-numbers__slide swiper-slide">
                                    <div class="key-numbers-card">
                                        <div class="key-numbers-card__logos">
                                            <div class="key-numbers-card__logos-wrap key-numbers-card__logos-wrap_1">
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-1.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-2.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-3.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-4.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-5.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-1.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-2.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-3.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-4.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-5.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="key-numbers-card__logos-wrap key-numbers-card__logos-wrap_2">
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-bottom-1.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-bottom-2.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-bottom-3.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-bottom-4.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-bottom-5.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-bottom-1.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-bottom-2.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-bottom-3.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-bottom-4.svg" alt="">
                                                </div>
                                                <div class="key-numbers-card__logo">
                                                    <img src="<?=get_template_directory_uri()?>/img/key-numbers/logos/logo-bottom-5.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="key-numbers-card__body">
                                            <div class="key-numbers-card__box">
                                                <div class="key-numbers-card__value dm-mono">250+</div>
                                                <div class="key-numbers-card__desc">Projects</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?
            $args_projects = array(
                'order' => 'ASC',
                'orderby' => 'date',
                'post_type' => 'projects',
                'posts_per_page' => 9
            );
            $query_projects = new WP_Query( $args_projects );
            if ($query_projects->found_posts > 0) {
        ?>
            <section class="catalog section">
                <div class="wrapper">
                    <div class="catalog__top">
                        <div class="catalog__subtitle">NOTABLE projects</div>
                        <h2 class="catalog__title title">Taking the show to the next level</h2>
                        <div class="catalog__desc">We work with several pieces of software that, on the one hand, create
                            animation
                            and
                            programme flight missions, and on</div>
                    </div>
                    <div class="catalog__body">
                        <div class="catalog__wrap">
                            <div class="catalog__container">
                                <?php while ( $query_projects->have_posts()) : $query_projects->the_post();
                                    $location = get_field('location');
                                    ?>
                                    <? include 'modules/project-card.php';?>
                                <? endwhile; wp_reset_postdata();?>
                            </div>
                        </div>
                        <div class="catalog__bottom">
                            <a href="/projects" class="catalog__btn btn">
                                <div class="btn__bg"></div>
                                <span>See all projects</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        <? }?>

        <section class="order">
            <div class="wrapper">
                <div class="order__top">
                    <h2 class="order__title space-grotesk">
                        <span>Let us make </span>
                        <span>the whole World</span>
                        <span>know your Story</span>
                    </h2>
                </div>
                <div class="order__wrap">
                    <form action="#" class="form">
                        <div class="form__body">
                            <label class="form__label form__label_normal">
                                <input type="text" class="form__field field" placeholder="Name">
                            </label>
                            <label class="form__label form__label_normal">
                                <input type="text" class="form__field field" placeholder="Phone Number">
                            </label>
                            <label class="form__label">
                                <input type="text" value="karen@gmail.com" class="form__field field error"
                                       placeholder="E-mail">
                            </label>
                            <label class="form__label">
                                <input type="text" class="form__field field" placeholder="Message">
                            </label>
                        </div>
                        <div class="form__bottom">
                            <button class="form__btn btn" data-fancybox data-src="#thanks-modal">
                                <div class="btn__bg"></div>
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>

</div>

<?php get_footer(); ?>
