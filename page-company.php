<?php
/*
Template Name:companyページ
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

    <main class="main">
        <div class="main-wrap">
            <section class="profile">
                <h2 class="title"><?php echo CFS()->get('Subtitle'); ?></h2>
                <div class="tablewrap">
                    <div class="tablebg"></div>
                    <table>
                        <tr>
                            <th><?php echo CFS()->get('item1'); ?></th>
                            <td><?php echo CFS()->get('item1-info'); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo CFS()->get('item2'); ?></th>
                            <td><?php echo CFS()->get('item2-info'); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo CFS()->get('item3'); ?></th>
                            <td><?php echo CFS()->get('item3-info'); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo CFS()->get('item4'); ?></th>
                            <td><?php echo CFS()->get('item4-info'); ?></td>
                        </tr>
                    </table>
                </div>
            </section>


            <section class="access">
                <h2 class="title">Access</h2>
                <div class="iframe">
                    <iframe src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6477.182438204057!2d139.70263197784737!3d35.736270679485834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601892a0a5585c27%3A0xb420ac39f1dc62ba!2z5p2x5Lqs6YO96LGK5bO25Yy65rGg6KKL!5e0!3m2!1sja!2sjp!4v1609645186024!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <p>池袋駅 徒歩5分</p>
            </section>
        </div>
    </main>

    <?php get_template_part('includes/footer'); ?>
    <?php wp_footer(); ?>
</body>

</html>
