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

    <section class="contact">
        <div class="contact-wrap">
            <h2 class="title">お問い合わせ</h2>
            <p class="teltitle">電話でのお問い合わせ</p>
            <h3 class="telNumber">0120-123-456</h3>
            <p class="time">平日 09:00~17:00</p>
            <p class="info">メールフォームからお問い合わせ、ご要望等がございましたら、以下に必要事項をご記入いただき、プライバシーポリシーをご確認の上、送信してください。</p>
        </div>
    </section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!--  ループ開始  -->


            <?php the_content(); ?>
            <!-- 管理画面で設定したコンテンツを表示するテンプレートタグ -->

    <?php endwhile;
    endif; ?>
    <!--  /ループ終わり -->

    <?php get_template_part('includes/footer'); ?>
    <?php wp_footer(); ?>
</body>

</html>
