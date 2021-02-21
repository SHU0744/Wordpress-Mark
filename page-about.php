<?php
/*
Template Name:Aboutページ
*/
?>


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
    <section class="misson">
        <div class="misson-wrap">
            <div class="misson-info">
                <div class="cover"></div>
                <h3><?php echo CFS()->get('mainTitle'); ?></h3>

                <h2><?php echo CFS()->get('mainText'); ?></h2>

                <p><?php echo CFS()->get('mainInfo'); ?></p>
            </div>
        </div>
    </section>
    <section class="Leadership">
        <div class="Leadership-wrap">
            <h2 class="tlt"><?php echo CFS()->get('mainSubtitle'); ?></h2>
            <h3 class="subTit"><?php echo CFS()->get('mainSubinfo'); ?></h3>
            <div class="Leader-item">
                <div class="img">
                    <img src="<?php echo CFS()->get('img1'); ?>">
                </div>

                <div class="info">
                    <h2><span><?php echo CFS()->get('position1'); ?></span><?php echo CFS()->get('leaderName1'); ?></h2>
                    <hr>
                    <p><?php echo CFS()->get('Position1-text'); ?></p>
                </div>
            </div>
            <div class="Leader-item">
                <div class="info infor">
                    <h2><span><?php echo CFS()->get('position2'); ?></span><?php echo CFS()->get('leaderName2'); ?></h2>
                    <hr>
                    <p><?php echo CFS()->get('Position2-text'); ?></p>
                </div>
                <div class="img">
                    <img src="<?php echo CFS()->get('img2'); ?>">
                </div>
            </div>
            <div class="Leader-item">
                <div class="img">
                    <img src="<?php echo CFS()->get('img3'); ?>">
                </div>
                <div class="info">
                    <h2><span><?php echo CFS()->get('position3'); ?></span><?php echo CFS()->get('leaderName3'); ?></h2>
                    <hr>
                    <p><?php echo CFS()->get('Position3-text'); ?></p>
                </div>
            </div>
        </div>
    </section>



    <?php get_template_part('includes/footer'); ?>
    <?php wp_footer(); ?>
</body>

</html>
