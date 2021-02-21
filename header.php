<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="株式会社Markのコーポレートサイトです。" />
<meta name="robots" content="noindex">
<link rel="preconnect" href="//fonts.gstatic.com">
<link href="//fonts.googleapis.com/css2?family=Crimson+Text&family=Noto+Sans+JP:wght@400;700;900&family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/rest.css">

<?php if (is_front_page()) : ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <title>株式会社Mark</title>
<?php elseif (is_page('about')) : ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/about.css">
    <title>株式会社Mark About</title>
<?php elseif (is_archive()) : ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/news.css">
    <title>株式会社Mark News</title>
<?php elseif (is_page('company')) : ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/company.css">
    <title>株式会社Mark Company</title>
<?php elseif (is_page('contact')) : ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/contact.css">
    <title>株式会社Mark Contact</title>
<?php endif; ?>
