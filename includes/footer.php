<?php
$args = array(
    'post_type' => 'Top', // 投稿タイプスラッグ
    'posts_per_page' => 1
);
$the_query = new WP_Query($args); // データベースを検索して引っ張ってくる情報を作成（$argsで必要な情報を配列にして渡している）
?>


<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <?php if (is_front_page() || is_page('about') || is_archive() || is_page('company')) : ?>
            <section class="conatactFtr" style="background-image: url('<?php echo CFS()->get('footer-img'); ?>')">
                <div class="conatactFtr-wrap">
                    <div class="conatactFtr-flex">
                        <h2><?php echo CFS()->get('footerTitle'); ?></h2>
                        <div class="contactbtnwrap">
                            <a href="<?php bloginfo('url'); ?>/contact" class="contactbtn"><?php echo CFS()->get('footer-btn'); ?></a>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>




    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
<?php endif; ?>

<footer class="footer">
    <div class="footer-wrap">
        <nav>
            <ul>
                <div class="flex-t">
                    <li><a href="<?php bloginfo('url'); ?>/about" class="firstA">About</a></li>
                    <li><a href="//noisy-amami-6173.backdrop.jp/MARKLALY" class="secondA" target="_blank" rel="noopener noreferrer">Service</a></li>
                </div>
                <div class="flex-b">
                    <li><a href="<?php bloginfo('url'); ?>/news" class="fourA">News</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/company" class="threeA">Company</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/contact" class="lastA">Contact</a></li>
                </div>
            </ul>
        </nav>
        <small>&copy;️SHU miyamura</small>
    </div>
</footer>


<?php if (is_front_page()) : ?>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js" type="module"></script>
    <script src="//polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
<?php elseif (is_page('about')) : ?>
    <script src="<?php bloginfo('template_url'); ?>/js/about.js" type="module"></script>
    <script src="//polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>

<?php elseif (is_archive()) : ?>
    <script src="<?php bloginfo('template_url'); ?>/js/news.js" type="module"></script>
<?php elseif (is_page('company')) : ?>
    <script src="<?php bloginfo('template_url'); ?>/js/company.js" type="module"></script>
    <script src="//polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
<?php elseif (is_page('contact')) : ?>
    <script src="<?php bloginfo('template_url'); ?>/js/contact.js" type="module"></script>
<?php endif; ?>
