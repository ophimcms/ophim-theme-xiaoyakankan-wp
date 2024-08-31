<?php
get_header();
?>
<?php
while (have_posts()) : the_post();
    ?>
    <div class="gm-main">
        <div class="gm-bread">
            <ol>
                <li><a href="/"> Trang chủ</a></li>
                <li class="on"><?php the_title(); ?></li>
            </ol>
        </div>
        <div class="gm">
            <?php the_content(); ?>
        </div>
    </div>
<?php
endwhile;
?>
<?php
get_footer();
?>

