<?php
/*
Template Name: Шаблон ГЛАВНОЙ страницы
*/
get_header();
?>

<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/img/hero-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="hs-text">
                    <span><?php the_field('hero_subtitle') ?></span>
                    <h2><?php the_field('hero_title') ?></h2>
                    <p><?php the_field('hero_description') ?></p>
                    <a href="<?php echo get_field('hero_btn')['url'] ?>" class="primary-btn"><?php echo get_field('hero_btn')['title'] ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- About Us Section Begin -->
<section class="about-us-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="as-pic">
                    <img src="<?php echo get_field('about-us_img')['url'] ?>" alt="<?php echo get_field('about-us_img')['alt'] ?>">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-text">
                    <div class="section-title">
                        <span><?php the_field('about-us_subtitle') ?></span>
                        <h2><?php the_field('about-us_title') ?></h2>
                    </div>
                    <p class="f-para"><?php the_field('about-us_description') ?></p>
                    <a href="<?php echo get_field('about-us_btn')['url'] ?>" class="primary-btn"><?php echo get_field('about-us_btn')['title'] ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<!-- Services Section Begin -->
<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span><?php the_field('services_subtitle') ?></span>
                    <h2><?php the_field('services_title') ?></h2>
                </div>
            </div>
        </div>
        <div class="row services-custom-row">
            <?php
            if (have_rows('services-repeater')):
                while (have_rows('services-repeater')) : the_row(); ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <img src="<?php the_sub_field('image') ?>" alt="">
                            <h4><?php the_sub_field('title') ?></h4>
                            <p><?php the_sub_field('description') ?></p>
                        </div>
                    </div>

                    <?php the_sub_field('sub_field'); ?>

            <?php endwhile;
            else :
                echo 'Ошибка: поля не найдены';
            endif;
            ?>

        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Portfolio Section Begin -->
<section class="portfolio-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span><?php the_field('oportfol_subtitle') ?></span>
                    <h2><?php the_field('oportfol_title') ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="portfolio-item set-bg large-item" data-setbg="<?php echo get_field('oportfol_img1')['url'] ?>">
                    <div class="pi-hover">
                        <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                        <a href="<?php echo get_field('oportfol_img1')['url'] ?>" class="search-icon image-popup"><i
                                class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="portfolio-item set-bg" data-setbg="<?php echo get_field('oportfol_img2')['sizes']['hazze-custom'] ?>">
                    <div class="pi-hover">
                        <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                        <a href="<?php echo get_field('oportfol_img2')['url'] ?>" class="search-icon image-popup"><i
                                class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="portfolio-item set-bg" data-setbg="<?php echo get_field('oportfol_img3')['url'] ?>">
                            <div class="pi-hover">
                                <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                                <a href="<?php echo get_field('oportfol_img3')['url'] ?>" class="search-icon image-popup"><i
                                        class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item set-bg" data-setbg="<?php echo get_field('oportfol_img4')['url'] ?>">
                            <div class="pi-hover">
                                <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                                <a href="<?php echo get_field('oportfol_img4')['url'] ?>" class="search-icon image-popup"><i
                                        class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Section End -->

<!-- Counter Section Begin -->
<section class="counter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="counter-text">
                    <div class="section-title">
                        <span><?php the_field('numbers_subtitle') ?></span>
                        <h2><?php the_field('numbers_title') ?></h2>
                    </div>
                    <a href="<?php echo get_field('numbers_btn')['url'] ?>" class="primary-btn"><?php echo get_field('numbers_btn')['title'] ?></a>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                if (have_rows('numbers_achievements-repeater')):
                    while (have_rows('numbers_achievements-repeater')) : the_row(); ?>
                        <div class="counter-item">
                            <div class="ci-number count">
                                <?php the_sub_field('number') ?>
                            </div>
                            <div class="ci-text">
                                <h4><?php the_sub_field('title') ?></h4>
                                <p><?php the_sub_field('description') ?></p>
                            </div>
                        </div>

                        <?php the_sub_field('sub_field'); ?>

                <?php endwhile;
                else :
                    echo 'Ошибка: поля не найдены';
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial-section spad">
    <div class="container">
        <div class="row testimonial-slider owl-carousel">
            <?php
            $i = 1;
            if (have_rows('numbers_slider')):
                while (have_rows('numbers_slider')) : the_row();
                    $isEven = false;
                    if ($i % 2 === 0) $isEven = true;
            ?>
                    <div class="col-lg-6">
                        <div class="testimonial-item" <?php if ($isEven) echo 'style="background: #e32879"' ?>>
                            <div class="ti-pic">
                                <img src="<?php echo get_sub_field('image')['sizes']['thumbnail'] ?>" alt="<?php echo get_sub_field('image')['alt'] ?>">
                            </div>
                            <div class="ti-text">
                                <div class="ti-title">
                                    <h4><?php the_sub_field('name') ?></h4>
                                    <span <?php if ($isEven) echo 'style="color: #fff"' ?>><?php the_sub_field('position') ?></span>
                                </div>
                                <p <?php if ($isEven) echo 'style="color: #fff"' ?>><?php the_sub_field('description') ?></p>
                            </div>
                        </div>
                    </div>
                    <?php the_sub_field('sub_field'); ?>

            <?php
                    $i++;
                endwhile;
            else :
                echo 'Ошибка: поля не найдены';
            endif;
            ?>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Call To Action Section Begin -->
<?php echo do_shortcode('[pink-banner]') ?>
<!-- <section class="callto-section set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/img/ctc-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="ctc-text">
                    <h2>We Create Trends For The World</h2>
                    <p>Donec faucibus consequat ante. Mauris eget mi sed ex efficitur porta id non quam. Cras
                        aliquam turpis tellus, quis laoreet lacus congue sed. Nullam at est quis urna vestibulum
                        interdum. Praesent auctor leo ut massa ultrices tempor.</p>
                    <a href="#" class="primary-btn ctc-btn">Work With Us</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Call To Action Section End -->

<!-- Member Section Begin -->
<section class="member-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span><?php the_field('ourteam_subtitle') ?></span>
                    <h2><?php the_field('ourteam_title') ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            // задаем нужные нам критерии выборки данных из БД
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'our-team',
            );

            $query = new WP_Query($args);

            // Цикл
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="member-item set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
                            <div class="mi-text <?php
                                                $pinkMiText = get_field('ourteam_pink-card');
                                                if ($pinkMiText) echo 'mi-text--pink';
                                                ?>">
                                <?php the_content(); ?>
                                <div class="mt-title">
                                    <h4><?php the_title(); ?></h4>
                                    <span><?php the_field('ourteam_position') ?></span>
                                </div>
                                <div class="mt-social">
                                    <?php
                                    if (have_rows('ourteam-repeater')):
                                        while (have_rows('ourteam-repeater')) : the_row(); ?>
                                            <a href="<?php the_sub_field('link'); ?>"><i class="fa fa-<?php the_sub_field('social'); ?>"></i></a>
                                    <?php endwhile;
                                    else :
                                        echo 'Ошибка: поля не найдены';
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php }
            } else {
                // Постов не найдено
            }

            // Возвращаем оригинальные данные поста. Сбрасываем $post.
            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>
<!-- Member Section End -->

<!-- Blog Section Begin -->
<div class="blog-section latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Latest Blog</span>
                    <h2>From Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            // задаем нужные нам критерии выборки данных из БД
            $args = array(
                'posts_per_page' => 2,
                'post_type' => 'post',
            );

            $query = new WP_Query($args);

            // Цикл
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>

                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="bi-pic set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bi-text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i> <?php echo get_the_date(); ?></li>
                                        </ul>
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <?php the_excerpt(); ?>
                                        <div class="bt-author">
                                            <div class="ba-pic">
                                                <?php
                                                global $post;
                                                $url = get_avatar_url($post, "size=100&default=monsterid");
                                                $img = '<img alt="" src="' . $url . '">';
                                                echo $img;
                                                ?>
                                            </div>
                                            <div class="ba-text">
                                                <h5><?php the_author(); ?></h5>
                                                <span><?php echo wp_roles()->roles['administrator']['name']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php }
            } else {
                // Постов не найдено
            }

            // Возвращаем оригинальные данные поста. Сбрасываем $post.
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<!-- Blog Section End -->

<?php get_footer(); ?>