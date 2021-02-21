<!DOCTYPE html>
<html language_attributes();>

<head>
    <?php get_header(); ?>

    <!-- 必須 -->
    <?php wp_head(); ?>
</head>

<body>
    <!-- header共通 -->
    <?php get_template_part('includes/nav'); ?>
    <!-- header共通 -->



    <?php
    $args = array(
        'post_type' => 'Top',
        'posts_per_page' => 1
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <!-- first-viwe -->
            <?php get_template_part('includes/first-view'); ?>
            <!-- first-viwe -->


            <section class="About">
                <div class="About-wrap observer">
                    <div class="About-info">
                        <h2><?php echo CFS()->get('SubTitle1'); ?></h2>
                        <h3><?php echo CFS()->get('Subtitle1-text'); ?></h3>

                        <div class="flex-yoko">
                            <div class="flex-r">
                                <p><?php echo CFS()->get('Subtitle1-info'); ?></p>
                                <div class="ViewBtn">
                                    <a href="<?php bloginfo('url'); ?>/about"><?php echo CFS()->get('Sub-button1'); ?><span class="mgl-8">＞</span></a>
                                </div>
                            </div>
                            <div class="img">
                                <img src="<?php echo CFS()->get('Sub-Img1'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="service">
                <div class="service-wrap">
                    <div class="service-info observer">
                        <div class="service-flex">
                            <div class="img-l">
                                <img src="<?php echo CFS()->get('Sub-Img2'); ?>">
                            </div>
                            <div class="flex-r">
                                <h2><?php echo CFS()->get('SubTitle2'); ?></h2>
                                <h3><?php echo CFS()->get('Subtitle2-text'); ?></h3>
                                <img class="serviceImg" src="<?php echo CFS()->get('Sub-Img2'); ?>">
                                <p><?php echo CFS()->get('Subtitle2-info'); ?></p>
                                <div class="ViewBtn">
                                    <a href="//noisy-amami-6173.backdrop.jp/MARKLALY" target="_blank" rel="noopener noreferrer"><?php echo CFS()->get('Sub-button2'); ?><span class="mgl-8">＞</span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <?php endif; ?>

    <article class="news">
        <div class="news-wrap">
            <div class="news-info observer">
                <h2>News</h2>
                <dl class="dlSp">


                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <div class="newsitem">
                                <div class="flex-f">
                                    <dt class="time"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></dt>
                                    <dt><span class="pre"><?php the_title(); ?></span></dt>
                                </div>

                                <dd class="text"><?php the_content(); ?></dd>

                            </div>

                    <?php endwhile;
                    endif; ?>
                    <!--  /ループ終わり -->




                </dl>

                <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <div class="btnwrap">
                            <a href="<?php bloginfo('url'); ?>/news"><?php echo CFS()->get('Sub-button3'); ?><span class="mgl-8">＞</span></a>
                        </div>


                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <?php endif; ?>

            </div>
        </div>
    </article>


    <!-- footer.php共通 -->
    <?php get_template_part('includes/footer'); ?>
    <!--footer.php終了  -->


    <!-- 必須 -->

    <?php wp_footer(); ?>
</body>

</html>
