<?php
/*
Template Name: Шаблон страницы блога
*/
get_header(); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-option">
                    <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(''); ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 text-right">
                <div class="breadcrumb-text">
                    <h3><?php the_title(); ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<div class="blog-section spad">
    <div class="container">
        <div class="row">
            <?php
            $counter = 1;
            // задаем нужные нам критерии выборки данных из БД
            $args = array(
                'posts_per_page' => 6,
                'post_type' => 'post',
            );

            $query = new WP_Query($args);

            // Цикл
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>
                    <?php if ($counter  % 3 !== 0) { ?>
                        <div class="col-lg-6">
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
                    <?php } else { ?>
                        <div class="col-lg-6">
                            <div class="blog-item solid-bg">
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
                    <?php } ?>
            <?php $counter++;
                }
            } else {
                // Постов не найдено
            }

            // Возвращаем оригинальные данные поста. Сбрасываем $post.
            wp_reset_postdata();
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="blog-btn">
                    <a href="<?php echo get_field('blog_btn')['url'] ?>" class="primary-btn"><?php echo get_field('blog_btn')['title'] ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section End -->

<?php get_footer(); ?>