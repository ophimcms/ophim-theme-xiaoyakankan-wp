<?php
get_header();
?>
<?php
while (have_posts()) : the_post();
    ?>
    <main id="main-body" class="bg-page">
        <div>
            <section class="bg-gradient-grey pad-top-30">
                <div class="container bor-bottom">
                    <div class="sub-container">
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="z-box-title"><?php the_title(); ?></h1>
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
                                <div class="col-md-12">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
<?php
endwhile;
?>
<?php
get_footer();
?>



