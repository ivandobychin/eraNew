<?
/* Template Name: Privacy Policy */
get_header();
the_post();

$text_list = get_field('text_list');
?>

    <main class="main-page">

        <section class="privacy-policy">
            <div class="wrapper wrapper_mini">
                <h1 class="privacy-policy__title title title_big"><? the_title();?></h1>
                <? if ($text_list) {?>
                    <div class="privacy-policy__body">
                        <? foreach ($text_list as $txt) {?>
                            <div class="privacy-policy__wrap">
                                <div class="privacy-policy__caption"><?=$txt['text_list_title']?></div>
                                <div class="privacy-policy__text"><?=$txt['text_list_text']?></div>
                            </div>
                        <? }?>
                    </div>
                <? }?>
            </div>
        </section>

    </main>

<? get_footer();?>