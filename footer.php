<footer class="footer">
    <div class="wrapper wrapper_small">
        <div class="footer__top">
            <div class="footer__logo">
                <svg width="93" height="33" viewBox="0 0 93 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_1389_871" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="4" width="93" height="25">
                        <path d="M93 4H0V28.8175H93V4Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_1389_871)">
                        <path d="M23.7705 7.36357H4.25882V14.701H22.9231V18.071H4.25882V25.4475H23.7705V28.8175H0V4H23.7705V7.36357ZM53.1949 11.792V11.3374C53.1949 10.0778 52.6761 9.10377 51.6392 8.40898C50.6017 7.71419 49.1482 7.37002 47.2709 7.37002H34.3993V15.7724H47.2709C49.1409 15.7724 50.6017 15.4218 51.6392 14.7335C52.6761 14.0387 53.1949 13.0647 53.1949 11.805M55.0069 16.9867C53.3484 18.2724 51.0691 18.9801 48.1693 19.1035L57.3733 28.2591V28.8305H52.5159L42.6758 19.11H34.4138V28.8305H30.155V4H47.3658C50.5213 4 52.9978 4.66233 54.8019 5.98694C56.6067 7.3116 57.5051 9.12973 57.5051 11.4543V11.9479C57.5051 14.0192 56.672 15.6945 55.0141 16.9802L55.0069 16.9867ZM77.1187 18.6619C75.7529 18.6619 74.65 19.6489 74.65 20.8567C74.65 21.993 75.6211 22.9281 76.8708 23.0385H77.3745C78.6236 22.9281 79.5952 21.993 79.5952 20.8567C79.5952 19.6489 78.4851 18.6619 77.126 18.6619M79.7923 4H75.1029L61.8952 28.2461V28.8175H66.2418L69.5653 22.5385L71.3991 19.136L77.4476 7.74665L83.4961 19.136L85.3299 22.5385L88.6535 28.8175H93V28.2461L79.7923 4Z" fill="white" />
                    </g>
                </svg>
            </div>
            <div class="footer__last">
                <div class="footer__last-wrap">
                    <? wp_nav_menu(
                        array(
                            'theme_location'  => 'menu_header',
                            'menu'            => '',
                            'container'       => false,
                            'container_id'    => '',
                            'menu_class'      => 'menu',
                            'menu_id'         => 'nav-header',
                            'echo'            => true,
                            'fallback_cb'     => '__return_empty_string',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<nav class="footer__menu"><ul>%3$s</ul></nav>',
                            'depth'           => 0
                        )
                    );?>
                    <? if ($GLOBALS['telegram'] || $GLOBALS['whatsapp'] || $GLOBALS['instagram']) {?>
                        <div class="footer__menu">
                            <ul>
                                <? if ($GLOBALS['telegram']) {?>
                                    <li>
                                        <a href="https://t.me/<?=$GLOBALS['telegram']?>" target="_blank">Telegram</a>
                                    </li>
                                <? } if ($GLOBALS['whatsapp']) {?>
                                    <li>
                                        <a href="https://wa.me/<?=$GLOBALS['whatsapp']?>" target="_blank">Whatsapp</a>
                                    </li>
                                <? } if ($GLOBALS['instagram']) {?>
                                    <li>
                                        <a href="<?=$GLOBALS['instagram']?>" target="_blank">Instagram</a>
                                    </li>
                                <? }?>
                            </ul>
                        </div>
                    <? }?>
                </div>
                <? if ($GLOBALS['email'] || $GLOBALS['phone']) {?>
                    <div class="footer__menu">
                        <ul>
                            <? if ($GLOBALS['email']) {?>
                                <li>
                                    <a href="mailto:<?=$GLOBALS['email']?>"><?=$GLOBALS['email']?></a>
                                </li>
                            <? } if ($GLOBALS['phone']) {?>
                                <li>
                                    <a href="tel:<?=$GLOBALS['phone']?>"><?=$GLOBALS['phone']?></a>
                                </li>
                            <? }?>
                        </ul>
                    </div>
                <? }?>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__left">
                <div class="footer__copiright">© ERA. <? the_time('Y')?></div>
                <a href="<?=get_privacy_policy_url();?>" class="footer__link">Privacy Policy</a>
            </div>
            <a href="https://repin.agency/" class="footer__developer">Developed by Repin Agency</a>
        </div>
    </div>
</footer>

<!--
<div class="cookies">
    <div class="cookies__caption">This website uses <a href="#">cookies</a></div>
    <div class="cookies__buttons">
        <button class="cookies__btn btn btn_dark">
            <div class="btn__bg"></div>
            <span>Accept</span>
        </button>
        <button class="cookies__btn btn">
            <div class="btn__bg"></div>
            <span>Reject</span>
        </button>
    </div>
</div>
-->

<div id="video-modal" class="video-modal modal" style="display: none;">
    <div class="modal__closed" data-fancybox-close>
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_725:818)">
                <path d="M72 0L0 72" stroke="white" stroke-width="2" stroke-linecap="round" />
                <path d="M4.05312e-06 0L72 72" stroke="white" stroke-width="2" stroke-linecap="round" />
            </g>
            <defs>
                <clipPath id="clip0_725:818">
                    <rect width="72" height="72" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </div>
    <div class="video-modal__body">
        <video class="video-modal__content" controls="true" pip="true" preload="metadata" playsinline="" webkit-playsinline="" poster="">
            <source src="<?=get_template_directory_uri()?>/img/videos/showreel.mp4" type="video/mp4">
        </video>
    </div>
</div><!-- end video-modal -->

<!--div id="video-modal" class="video-modal modal" style="display: none;">
	<div class="video-modal__body">
		<div class="video-modal__wrap">
			<div class="video-modal__closed" data-fancybox-close>
				<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="24" cy="24" r="24" fill="white" />
					<path d="M29 19L19 29" stroke="black" stroke-width="2" stroke-linecap="round"
						stroke-linejoin="round" />
					<path d="M19 19L29 29" stroke="black" stroke-width="2" stroke-linecap="round"
						stroke-linejoin="round" />
				</svg>
			</div>
			<iframe class="video"
				src="https://player.vimeo.com/video/939052077?h=939052077?background=1&amp;autoplay=0&amp;muted=0&amp;loop=1&amp;controls=1&amp;autopause=0"
				frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
		</div>
	</div>
</!--div-->

<div id="thanks-modal" class="thanks-modal modal" style="display: none;">
    <div class="modal__closed" data-fancybox-close>
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_725:818)">
                <path d="M72 0L0 72" stroke="white" stroke-width="2" stroke-linecap="round" />
                <path d="M4.05312e-06 0L72 72" stroke="white" stroke-width="2" stroke-linecap="round" />
            </g>
            <defs>
                <clipPath id="clip0_725:818">
                    <rect width="72" height="72" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </div>
    <div class="thanks-modal__body">
        <div class="thanks-modal__wrap">
            <div class="thanks-modal__icon">
                <!--script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
                    type="module"></!--script>
                <dotlottie-player-- src="https://lottie.host/d3158428-ff89-435a-b22a-ee2ef9450758/iawHM5T5Lh.json"
                    background="transparent" speed="1" loop autoplay></dotlottie-player-->
                <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M56.889 26.737L33.5355 13.2539L36.9062 7.41553L60.2597 20.8987L56.889 26.737Z"
                          fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M56.889 33.0344L33.5355 46.5176L36.9062 52.356L60.2597 38.8728L56.889 33.0344Z"
                          fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0.500026 20.8987L23.8535 7.41553L27.2243 13.2539L3.87081 26.737L0.500026 20.8987Z"
                          fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0.500026 38.8728L23.8535 52.356L27.2243 46.5176L3.87081 33.0344L0.500026 38.8728Z"
                          fill="white" />
                </svg>
            </div>
            <div class="thanks-modal__title title">Thank you for your request!</div>
            <div class="thanks-modal__subtitle">We will contact you shortly.</div>
            <a href="index.html" class="thanks-modal__btn btn">
                <div class="btn__bg"></div>
                <span>Home</span>
            </a>
        </div>
    </div>
</div><!-- end thanks-modal -->

<style>
    .card__caption-name span {
        white-space: nowrap
    }
</style>


<? wp_footer(); ?>

    </body>
</html>
