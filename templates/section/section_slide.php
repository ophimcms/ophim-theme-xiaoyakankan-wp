<section class="z-recently-listen">
    <div class="container">
        <div class="sub-container z-widget bor-top">
            <div class="row">
                <div class="col-md-12">
                    <div class="z-float-header clearfix"><a class="z-box-title z-show"
                                                            href="<?= $slug; ?>"><?= $title; ?> <i
                                    class="icon ic-go-right"></i></a></div>
                    <div class="box-slide album-slider">
                        <div class="z-slidersel slide">
                            <div class="regular slider" id="slick-main-cartoon">
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <div class="z-album-item card-240 col-md-3">
                                        <div class="col-album">
                                            <div class="card-210 fix-height">
                                                <a title="<?php the_title(); ?> / <?= op_get_original_title() ?>"
                                                   href="<?php the_permalink(); ?>">
                                                    <div class="image lazyload-img loaded">
                                                        <img class="ateslazi img"
                                                             src="<?= op_get_thumb_url() ?>"
                                                             style="background-size:cover;">
                                                    </div>
                                                    <div class="opac"></div>
                                                </a>
                                                <div class="player-actions">
                                                    <ul>
                                                        <li style="z-index: 11;"><a
                                                                    href="<?php the_permalink(); ?>"
                                                                    title="<?php the_title(); ?> / <?= op_get_original_title() ?>"><i
                                                                        class="icon ic-svg-play-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="z-brand"><i
                                                            class="icon ic-play"></i><?= op_get_episode() ?></span>
                                                <span class="z-brand-lang"><i
                                                            class="icon ic-play-outline"></i><?= op_get_lang() ?></span>
                                            </div>
                                            <div class="card-info ">
                                                <div class="title"><a role="a" class=""
                                                                      title="<?php the_title(); ?> / <?= op_get_original_title() ?>"
                                                                      href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </div>
                                                <div class="artist"><a role="a" class="" title="<?= op_get_original_title() ?>"
                                                                       href="<?php the_permalink(); ?>"><?= op_get_original_title() ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>