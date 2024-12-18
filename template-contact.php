<?php
/*
Template Name: Шаблон Contact
*/
get_header();
?>

<!-- Map Section Begin -->
<div class="map">
    <?php echo get_field('map'); ?>
</div>
<!-- Map Section End -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-text">
                    <h4><?php the_field('contact-us_title') ?></h4>
                    <?php
                    if (have_rows('contact_area')):
                        while (have_rows('contact_area')) : the_row(); ?>

                            <div class="ct-item">
                                <div class="ci-icon">
                                    <span class="ti-<?php the_sub_field('contact_area-icon') ?>"></span>
                                </div>
                                <div class="ci-text">
                                    <ul>
                                        <li>
                                            <span><?php the_sub_field('contact_area-name') ?></span>
                                            <?php the_sub_field('contact_area-content') ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                    <?php endwhile;
                    else :
                        echo 'Ошибка: поля не найдены';
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-option">
                    <h4><?php the_field('leave-us_title') ?></h4>
                    <?php echo do_shortcode('[contact-form-7 id="56457f1" title="Страница Contact" html_class="comment-form contact-form"]') ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<?php get_footer(); ?>