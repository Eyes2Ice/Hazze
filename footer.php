    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-option">
                        <div class="fo-logo">
                            <a href="/">
                                <img src="<?php echo get_field('header_logo', 'option')['url'] ?>" alt="<?php echo get_field('header_logo', 'option')['alt'] ?>">
                            </a>
                        </div>
                        <ul>
                            <?php
                            if (have_rows('footer_inform-repeater', 'options')):
                                while (have_rows('footer_inform-repeater', 'options')) : the_row(); ?>
                                    <?php if (!get_sub_field('is_link', 'options')) { ?>
                                        <li><?php the_sub_field('first-text', 'options') ?> <?php the_sub_field('second_text') ?></li>
                                    <?php } else { ?>
                                        <li><?php the_sub_field('first-text', 'options') ?><a href="<?php echo get_sub_field('link', 'options')['url'] ?>"> <?php echo get_sub_field('link', 'options')['title'] ?></a></li>
                                    <?php } ?>
                            <?php endwhile;
                            else :
                                echo 'Ошибка: поля не найдены';
                            endif;
                            ?>
                            <!-- <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li> -->
                        </ul>
                        <div class="fo-social">
                            <?php
                            if (have_rows('footer_socials-repeater', 'options')):
                                while (have_rows('footer_socials-repeater', 'options')) : the_row(); ?>
                                    <a href="<?php the_sub_field('link', 'options'); ?>"><i class="fa fa-<?php the_sub_field('social', 'options'); ?>"></i></a>
                            <?php endwhile;
                            else :
                                echo 'Ошибка: поля не найдены';
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget fw-links">
                        <h5><?php the_field('footer_menu-title', 'options') ?></h5>
                        <?php
                        wp_nav_menu(array(
                            'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                            'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                            'theme_location'  => 'footer'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                        ));
                        ?>
                        <!-- <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Model</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <?php echo do_shortcode('[contact-form-7 id="46c44dc" title="Контактная форма 1" html_class="news-form"]') ?>
                        <!-- <h5>Join The Newsletter</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p> 
                        <form action="#" class="news-form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Instagram</h5>
                        <div class="insta-pic">
                            <?php
                            $images = get_field('footer_gallery', 'options');
                            if ($images): ?>
                                <?php foreach ($images as $image): ?>
                                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_url($image['alt']); ?>" />
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <p>
                    <?php if (get_field('is_auto-count', 'options')) {
                        the_field('footer_copy-auto', 'options') ?>
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        <?php } else {
                        the_field('footer_copy', 'options');
                    }
                        ?>&nbsp;
                        <?php the_field('footer_copy-second', 'options') ?>
                </p>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <?php wp_footer(); ?>

    </body>

    </html>