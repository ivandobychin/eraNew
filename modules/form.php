<?
    $text_top = get_field('Form_text_top', 'options');
?>

<section class="<?=(is_page(13) ? 'contacts' : '')?> order">
    <div class="wrapper <?=(isset($wrapMin) ? 'wrapper_mini' : '')?>">
        <? if ($text_top) {?>
            <div class="order__top">
                <h2 class="order__title space-grotesk">
                    <? foreach ($text_top as $row) {?>
                        <span><?=$row['text_top_txt']?></span>
                    <? }?>
                </h2>
            </div>
        <? }?>
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
                        <input type="text" class="form__field field" placeholder="E-mail">
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