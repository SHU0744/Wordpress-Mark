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
    <!-- first-viwe -->
    <?php get_template_part('includes/first-view'); ?>
    <!-- first-viwe -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!--  ループ開始  -->
            <?php the_title(); ?>
            <!-- 管理画面で設定したタイトルを表示するテンプレートタグ -->

            <?php the_content(); ?>
            <!-- 管理画面で設定したコンテンツを表示するテンプレートタグ -->

    <?php endwhile;
    endif; ?>
    <!--  /ループ終わり -->

    <?php get_template_part('includes/footer'); ?>
    <?php wp_footer(); ?>
</body>

</html>
