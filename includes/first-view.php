<?php if (is_front_page()) : ?>
    <div class="homeTop fadein" id="homeTop" style="background-image: url('<?php echo CFS()->get('TopImg'); ?>')">
        <div class="homeTop-wrap">
            <div class="homeTop-text">
                <h1><?php echo CFS()->get('TopTitle'); ?></h1>
                <h3><?php echo CFS()->get('TopTitle-info'); ?></h3>
                <a href="<?php bloginfo('url'); ?>/contact" class="contactbtn"><?php echo CFS()->get('button'); ?></a>
            </div>
        </div>
    </div>
<?php elseif (is_page('about')) : ?>
    <div class="homeTop" id="homeTop">
        <div class="homeTop-wrap">
            <div class="text">
                <h1><?php echo CFS()->get('titleTop'); ?></h1>
                <p><?php echo CFS()->get('titleSub'); ?></p>
            </div>
            <div class="img" style="background-image: url('<?php echo CFS()->get('TopImg'); ?>')">
            </div>
        </div>
    </div>
<?php elseif (is_archive()) : ?>
    <div class="homeTop" id="homeTop">
        <div class="homeTop-wrap">
            <div class="text">
                <h1>News</h1>
                <p>最新情報</p>
            </div>
            <div class="img">
            </div>
        </div>
    </div>
<?php elseif (is_page('company')) : ?>
    <div class="homeTop" id="homeTop">
        <div class="homeTop-wrap">
            <div class="text">
                <h1><?php echo CFS()->get('titleTop'); ?></h1>
                <p><?php echo CFS()->get('titleSub'); ?></p>
            </div>
            <div class="img" style="background-image: url('<?php echo CFS()->get('TopImg'); ?>')">
            </div>
        </div>
    </div>
<?php elseif (is_page('contact')) : ?>
    <div class="homeTop" id="homeTop">
        <div class="homeTop-wrap">
            <div class="text">
                <h1>Contact</h1>
                <p>お問い合わせ</p>
            </div>
            <div class="img">
            </div>
        </div>
    </div>
<?php endif; ?>
