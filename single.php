<?php

get_header();
?>

<!-- Blog Details Hero  Section Begin -->
<section class="blog-hero-section set-bg spad" data-setbg="<?php the_field('single_background') ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <div class="bh-text">
                    <div class="categories-custom">
                        <?php
                        global $post;
                        $categories = get_the_category($post->ID);
                        foreach ($categories as $key => $value) {
                            echo '<span>' . $value->name . '</span>';
                        }
                        ?>
                    </div>
                    <h2><?php the_title(); ?></h2>
                    <ul>
                        <li>
                            <?php
                            while (have_posts()) :
                                the_post();
                                echo 'By ';
                                the_author();
                            endwhile; ?>
                        </li>
                        <li><?php echo get_the_date(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Hero Section End -->

<!-- Blog Details Section Begin -->
<section class="blog-details-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="bd-text">
                    <div class="bd-title">
                        <p>Your clients would like to see optimal results for minimal work. For this reason, it can
                            be difficult to convince them that a website redesign enhances SEO strategies. However,
                            if you try to redesign a site without taking SEO into account, you are going to face
                            bigger problems down the road.</p>
                        <p>Start off by explaining to clients what will happen if you ignore SEO in your redesign.
                            Explain to them how a website redesign enhances SEO strategies across the board. A
                            redesign is essential and should be part of your client’s budget. There are a couple of
                            risks to point out.</p>
                    </div>
                    <div class="bd-pic">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo get_template_directory_uri() ?>/img/blog/details/bd-more-1.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo get_template_directory_uri() ?>/img/blog/details/bd-more-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="bd-more-text">
                        <div class="bm-item">
                            <h4>You May Have to Redo All Your Content</h4>
                            <p>It is impossible to create effective content without taking SEO into consideration.
                                If you create content without thinking about SEO, you may need to go back and redo
                                all the new content you made for your website when you start your SEO strategy.
                                There are a few reasons for this. First, you’ll be unsure as to what keyword terms
                                you want to rank for. If you write content that doesn’t include appropriate
                                keywords, it will be difficult to go back and include the terms naturally. Second,
                                you may be unclear as to who makes up your target audience. The content you write
                                for the wrong audience is useless and will need replacing.</p>
                        </div>
                        <div class="bm-item">
                            <h4>You May Have Technical Mistakes</h4>
                            <p>Technical mistakes may mean you require a site migration in the near future. This is
                                a huge waste of time. Taking the technical side of SEO into account now will allow
                                you to decide on</p>
                        </div>
                    </div>
                    <div class="bd-quote">
                        <img src="<?php echo get_template_directory_uri() ?>/img/blog/details/quote.png" alt="">
                        <p>We need to stop interrupting what people are interested in and be what people are
                            interested in.”</p>
                        <div class="quote-author">
                            <h5>Mitchell Jackson</h5>
                            <span>CEO-DeerCreative</span>
                        </div>
                    </div>
                    <div class="bd-last-para">
                        <p>All the above assumes that a client is willing to create a website in the first place.
                            Some clients may believe that they can forgo a website entirely. However, without a
                            website, it is impossible for a business to grow. You need to explain why having an
                            SEO-optimized website is necessary for being found online. Of course, businesses can
                            find customers using other means, such as through social media, but these methods are
                            slower. Plus, users will still expect the business to have a website — to obtain more
                            information about products, services, and the brand as a whole.</p>
                    </div>
                    <div class="tag-share">
                        <div class="tags">
                            <a href="#">Camera</a>
                            <a href="#">Photography</a>
                            <a href="#">Tips</a>
                        </div>
                        <div class="social-share">
                            <span>Share:</span>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                    <div class="blog-author">
                        <?php
                        global $post;
                        $url = get_avatar_url($post, "size=100&default=monsterid");
                        $img = '<img alt="" src="' . $url . '">';
                        echo $img;
                        ?>
                        <h5><?php the_author(); ?></h5>
                        <p><?php the_author_meta('description'); ?></p>
                        <div class="bt-social">
                            <?php
                            $post_id = get_the_ID();
                            $author_id = get_post_field('post_author', $post_id);

                            $ourId = 'user_' . $author_id;
                            if (have_rows('user_repeater', $ourId)):
                                while (have_rows('user_repeater', $ourId)) : the_row(); ?>
                                    <a href="<?php the_sub_field('link'); ?>"><i class="fa fa-<?php the_sub_field('social'); ?>"></i></a>
                            <?php endwhile;
                            else :
                                echo 'Ошибка: поля не найдены';
                            endif;
                            ?>
                            <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a> -->
                        </div>
                    </div>
                    <div class="leave-comment">
                        <h2>Contact Us</h2>
                        <form action="#" class="comment-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Messages"></textarea>
                                    <button type="submit" class="site-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

<!-- Recommend Section Begin -->
<section class="recommend-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Recommended</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            // задаем нужные нам критерии выборки данных из БД
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
                'orderby' => 'rand'
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
</section>
<!-- Recommend Section End -->

<?php
get_footer();
