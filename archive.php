<!DOCTYPE html>
<html language_attributes();>

<head>
    <?php get_header(); ?>

    <?php wp_head(); ?>
</head>

<body>
    <!-- header共通 -->
    <?php get_template_part('includes/nav'); ?>
    <!-- header共通 -->

    <?php get_template_part('includes/first-view'); ?>

    <article class="newNews">
        <div class="newNews-wrap">
            <h2 class="tilte">最新のニュース</h2>
            <div class="selects">
                <div class="selects-item">
                    <label>YEAR</label>
                    <select name="" id="selectYear">
                        <option value="all" selected>All</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="selects-item">
                    <label>GATEGORY</label>
                    <select name="" id="selectGategory">
                        <option value="all" selected>All</option>
                        <option value="release">プレスリリース</option>
                        <option value="notice">お知らせ</option>
                    </select>
                </div>
                <span class="sibori">絞り込み可能</span>
            </div>
            <div class="item-flex">


                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <!--  ループ開始  -->

                        <?php
                        if (has_post_thumbnail()) :
                            $id = get_post_thumbnail_id();
                            $img = wp_get_attachment_image_src($id, "large");
                        else :

                        endif;

                        ?>

                        <?php

                        $cat = get_the_category();
                        $cat = $cat[0];
                        $item =  get_cat_name($cat->term_id);
                        ?>

                        <div class="item" data-year="<?php echo get_the_date('Y'); ?>" data-gategory="<?php if ($item === "プレスリリース") {
                                                                                                            echo "release";
                                                                                                        } else if ($item === "お知らせ") {
                                                                                                            echo "notice";
                                                                                                        } ?>" data-all="all">
                            <div class="img">
                                <img src="<?php echo $img[0]; ?>">
                            </div>
                            <dl>
                                <dt class="time"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></dt>
                                <dt><span class="pre"><?php the_category(); ?></span></dt>

                                <dd class="text"><?php the_content(); ?></dd>
                            </dl>
                        </div>

                <?php endwhile;
                endif; ?>
                <!--  /ループ終わり -->

            </div>

        </div>
    </article>

    <?php get_template_part('includes/footer'); ?>

    <?php wp_footer(); ?>
</body>

</html>
