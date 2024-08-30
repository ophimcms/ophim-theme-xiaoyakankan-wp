<?php
get_header();
?>
<div class="gm-main">
    <div class="gm-bread">
        <ol>
            <li><a href="/"> Trang chủ</a></li>
            <li class="on">Tất cả phim</li>
        </ol>
    </div>
    <div class="gm-list">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('templates/section/section_thumb_item');
            }
            wp_reset_postdata();
        } ?>
    </div>
</div>
<div class="gm-page">
    <?php ophim_pagination(); ?>
</div>
<?php
get_footer();
?>

