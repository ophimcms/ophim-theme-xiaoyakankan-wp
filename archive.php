<?php
get_header();
?>
<main id="main-body" class="bg-page">
    <div>
        <section class="bg-gradient-grey pad-top-30">
            <div class="container bor-bottom">
                <div class="sub-container">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="z-box-title"><?= single_tag_title(); ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="para-content pad-top-5"></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-color-1">
            <section>
                <div class="container pad-bottom-10 pad-top-0">
                    <div class="sub-container mw-990 pad-top-40 pad-bottom-10">
                        <div class="row">
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
                        <div class="row">
                            <div class="col-md-12 pad-bottom-30">
                                <div class="z-center">
                                    <?php ophim_pagination(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php
get_footer();
?>



