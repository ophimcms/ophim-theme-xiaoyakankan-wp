<section class="z-slider-main">
 <div class="container">
        <div class="row">
            <div id="slider-main">
                <div class="regular slider" id="slick-main-top">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a class="z-slide"
                       href="<?php the_permalink(); ?>">
                        <div class="image lazyload-img loaded">
                            <img class="ateslazi"
                                 src="<?= op_get_poster_url() ?>"
                                 alt="<?php the_title(); ?> / <?= op_get_original_title() ?>"
                                 title="<?php the_title(); ?> / <?= op_get_original_title() ?>">
                        </div>
                        <div class="title-movie text-shadow">
                            <div class="title1"><?php the_title(); ?></div>
                            <p class="title2"><?= op_get_original_title() ?></p>
                        </div>
                    </a>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>