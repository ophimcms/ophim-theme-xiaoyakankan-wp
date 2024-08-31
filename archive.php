<?php
get_header();
?>
<div class="gm-main">
    <div class="gm-bread">
        <ol>
            <li><a href="/"> Trang chủ</a></li>
            <li class="on"><?= single_tag_title(); ?></li>
        </ol>
    </div>
    <div class="gm-list">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <div class="col-md-12">
                    <div class="rowsearch" style="margin: 20px;">
                        <div class="column lefts">
                            <a href="<?php the_permalink(); ?>"><img
                                        style="width: 150px;margin-right: 15px"
                                        src="<?= op_remove_domain(get_the_post_thumbnail_url()) ?>"
                                        alt="<?php the_title(); ?>"
                                        class="pull-left img-responsive thumb margin10 img-thumbnail"></a>
                        </div>
                        <div class="column rights">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <article>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p></article>
                            <a class="btn btn-blog pull-right marginBottom10"
                               href="<?php the_permalink(); ?>">Xem
                                thêm</a>
                        </div>

                    </div>
                </div>
            <?php }
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



