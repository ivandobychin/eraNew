<?
get_header();

$args_cat = array(
    'orderby' => 'count',
    'order' => 'ASC'
);
$terms_cat = get_terms('projects_cat', $args_cat);

$args = array(
    'order' => 'ASC',
    'orderby' => 'date',
    'post_type' => 'projects',
    'posts_per_page' => 9
);
$query = new WP_Query( $args );
?>

    <main class="main-page">

        <section class="projects">
            <div class="wrapper">
                <div class="projects__top">
                    <div class="projects__subtitle">Recent projects</div>
                    <div class="projects__title titlec title_big">Taking the show to the next level</div>
                </div>
                <div class="projects__body">
                    <? if ($terms_cat) {?>
                        <div class="projects__nav">
                            <button class="projects__link active" data-filter="all">All</button>
                            <div class="projects__nav-box">
                                <? foreach ($terms_cat as $term) {?>
                                    <button class="projects__link" data-filter="<?=$term->slug?>"><?=$term->name?></button>
                                <? }?>
                            </div>
                        </div>
                    <? } if ($query->found_posts > 0) {?>
                        <div class="projects__wrap">
                            <?php while ( $query->have_posts()) : $query->the_post();
                                $terms = get_the_terms(get_the_ID(), 'projects_cat');
                                $term_slug = !empty($terms) ? $terms[0]->slug : 'default-class';

                                $location = get_field('location');
                            ?>
                                <div class="projects-card <?=$term_slug?>">
                                    <? include 'modules/project-card.php';?>
                                </div>
                            <? endwhile; wp_reset_postdata();?>
                        </div>
                        <div class="projects__bottom">
                            <button class="projects__btn btn">
                                <div class="btn__bg"></div>
                                <span>Show more</span>
                            </button>
                        </div>
                    <? }?>
                </div>
            </div>
        </section>

    </main>


<? get_footer();?>