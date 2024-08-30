<nav class="bg-page">
    <ul id="breadcrumb" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"><a href="/"
                                                                                                       itemprop="item"
                                                                                                       title="Xem phim"><span
                        itemprop="name">Xem Phim</span></a></li>
        <?php foreach (op_get_genre() as $item) : ?>
            <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"
                class="breadcrumb-item"><a itemprop="item" href="#"><span itemprop="name"><?= $item->name ?></span></a>
            </li>
        <?php endforeach ?>
        <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"
            class="breadcrumb-item"><a itemprop="item"
                                       href="<?php the_permalink(); ?>"><span
                        itemprop="name"><?php the_title() ?></span></a></li>
    </ul>
</nav>
<main id="main-body" class="bg-page">
    <div>
        <section class="info-banner-box">
            <div class="container">
                <div class="blur-container"
                     style="background: url(<?= op_get_poster_url() ?>) center center / cover no-repeat rgb(110, 97, 78); opacity: 0.3;"></div>
                <img id="song-thumbnail-temp" hidden="" class="ateslazi"
                     src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                     data-src="<?= op_get_thumb_url() ?>" width="240" alt="<?php the_title() ?>">
                <div class="sub-container clearfix" itemprop="potentialAction" itemscope=""
                     itemtype="https://schema.org/WatchAction">
                    <a class="medium-card-11" href="<?= watchUrl() ?>" itemprop="target">
                        <img class="ateslazi" src="<?= op_get_thumb_url() ?>" data-src="<?= op_get_thumb_url() ?>"
                             alt="<?php the_title() ?>">
                        <i class="icon ic-svg-play-outline"></i>
                    </a>
                    <div class="info-banner-body clearfix">
                        <div class="left-info">
                            <div class="ranking"></div>
                            <h1 itemprop="name"><span class="text-upper "><?php the_title() ?></span></h1>
                            <div class="artist-name">
                                <h2 itemprop="name"><?= op_get_original_title() ?> (<?= op_get_years(' ') ?>)</h2>
                            </div>
                            <div class="subtext release">Trạng thái: <span
                                        style="color:#63c0ac"><b><?= op_get_status() ?> <?= op_get_lang() ?></b></span>
                            </div>
                            <div class="subtext release">Đạo diễn:<?= op_get_directors(10, ', ') ?></div>
                            <div class="subtext release">Diễn viên: <?= op_get_actors(110, ', ') ?></div>
                            <div class="subtext release">Quốc Gia: <?= op_get_regions(', ') ?></div>
                            <div class="subtext release">Năm sản xuất: <?= op_get_years(' ') ?> | Thời
                                lượng: <?= op_get_runtime() ?>
                            </div>
                            <div class="subtext category">Thể loại: <?= op_get_genres(', ') ?></div>
                        </div>
                        <div class="myui-panel_bd">
                            <?php if (op_get_showtime_movies()): ?>
                                <p>Lịch chiếu : <?= op_get_showtime_movies(); ?></p>
                            <?php endif ?>
                            <?php if (op_get_notify()) : ?>
                                <p>Thông báo : <?= op_get_notify() ?></p>
                            <?php endif ?>
                        </div>
                        <div class="right-info">
                            <div class="log-stats">
                                <div class="viewed"><i class="icon ic-play"></i> <?= op_get_post_view() ?></div>
                                <a class="action liked"><i class="icon ic-like"></i> <?= op_get_rating_count() ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="user-interaction-box">
            <div class="container">
                <div class="sub-container">
                    <div class="user-interaction-wrapper">
                        <ul class="action-list">
                            <li itemprop="potentialAction" itemscope="" itemtype="https://schema.org/WatchAction"><a
                                        class="action watch" href="<?= watchUrl() ?>" itemprop="target"><i
                                            class="icon ic-play"></i> Xem ngay</a></li>
                            <?php if (op_get_trailer_url()) :
                                parse_str(parse_url(op_get_trailer_url(), PHP_URL_QUERY), $my_array_of_vars);
                                $video_id = $my_array_of_vars['v'];
                                ?>
                                <li itemprop="potentialAction" itemscope="" itemtype="https://schema.org/WatchAction"><a
                                            class="action watch fancybox fancybox.iframe"
                                            href="https://www.youtube.com/embed/<?= $video_id ?>" itemprop="target"><i
                                                class="icon ic-play"></i> Trailer</a></li>
                            <?php endif ?>

                            <li><a class="action"><i class="icon ic-imdb"></i> <span
                                            style="color:#ffd500">N/A</span></a></li>
                            <li><a class="action"><i class="icon ic-calendar"></i> Lịch Chiếu: <span>N/A</span></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="info-player-details-box">
            <div class="container">
                <div class="sub-container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="artist-profile clearfix" style="">
                                <div class="detail-star">
                                    <h3>Đánh giá<small class="pull-right">
                                            <div>
                                                (<?= op_get_rating(); ?>
                                                sao
                                                /
                                                <?= op_get_rating_count() ?> đánh giá)
                                            </div>
                                        </small>
                                    </h3>
                                    <div class="ewave-star-box center-block">
                                        <div class="rating-content">
                                            <div id="movies-rating-star"></div>
                                            <div id="movies-rating-msg"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="lyrics-wrapper">
                                <div class="heading">NỘI DUNG PHIM</div>
                                <div class="lyrics-text" itemprop="description">
                                    <div>
                                        <?php the_content() ?>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="heading">TỪ KHÓA</div>
                                <div class="tags-list-movie"><?= op_get_tags(' ') ?></div>
                            </div>
                            <div id="comment">
                                <div class="heading">BÌNH LUẬN</div>
                                <div class="comment-list-wrapper" style="background-color: #FFF !important;">
                                    <div class="fb-comments w-full" data-href="<?= getCurrentUrl() ?>" data-width="100%"
                                         data-numposts="5" data-colorscheme="light" data-lazy="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <aside class="z-video-player-aside">
                                <div class="z-aside-header clearfix">
                                    <div class="heading pull-left">PHIM LIÊN QUAN</div>
                                </div>
                                <ul class="z-video-130-73-list list-info-mw-150">
                                    <?php
                                    $postType = 'ophim';
                                    $taxonomyName = 'ophim_genres';
                                    $taxonomy = get_the_terms(get_the_id(), $taxonomyName);
                                    if ($taxonomy) {
                                        $category_ids = array();
                                        foreach ($taxonomy as $individual_category) $category_ids[] = $individual_category->term_id;
                                        $args = array('post_type' => $postType, 'post__not_in' => array(get_the_id()), 'posts_per_page' => 12, 'tax_query' => array(array('taxonomy' => $taxonomyName, 'field' => 'term_id', 'terms' => $category_ids,),));
                                        $my_query = new wp_query($args);

                                        if ($my_query->have_posts()):
                                            while ($my_query->have_posts()):$my_query->the_post();
                                                ?>
                                                <li>
                                                    <div class="z-card card-130-73">
                                                        <a class="thumb-130-73"
                                                           href="<?php the_permalink(); ?>">
                                                            <div class=" lazyload-img loaded"><img class="ateslazi"
                                                                                                   src="<?= op_get_poster_url() ?>"
                                                                                                   data-src="<?= op_get_poster_url() ?>"
                                                                                                   alt="<?php the_title(); ?> / <?= op_get_original_title() ?>">
                                                            </div>
                                                            <i class="icon ic-svg-play-outline"></i><span
                                                                    class="opac"></span>
                                                        </a>
                                                        <div class="card-info">
                                                            <div class="title"><a class=""
                                                                                  title="Phim Tình Tựa Ánh Hồng / Rainbow Round My Shoulder"
                                                                                  href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                                            </div>
                                                            <div class="artist"><a class="mr-2" title="Will"
                                                                                   href="<?php the_permalink(); ?>"><?= op_get_original_title() ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php
                                            endwhile;
                                        endif;
                                        wp_reset_query();
                                    }
                                    ?>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php add_action('wp_footer', function () { ?>
    <script src="<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/jquery.raty.js"></script>
    <link href="<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/jquery.raty.css" rel="stylesheet"
          type="text/css"/>
    <script>
        var rated = false;
        $('#movies-rating-star').raty({
            score: <?= op_get_rating(); ?>,
            number: 10,
            numberMax: 10,
            hints: ['quá tệ', 'tệ', 'không hay', 'không hay lắm', 'bình thường', 'xem được', 'có vẻ hay', 'hay',
                'rất hay', 'siêu phẩm'
            ],
            starOff: '<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/images/star-off.png',
            starOn: '<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/images/star-on.png',
            starHalf: '<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/images/star-half.png',
            click: function (score, evt) {
                if (rated) return
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php')?>',
                    type: 'POST',
                    data: {
                        action: "ratemovie",
                        rating: score,
                        postid: '<?php echo get_the_ID(); ?>',
                    },
                }).done(function (data) {
                    $('#movies-rating-msg').html(`Bạn đã đánh giá ${score} sao cho phim này!`);
                });
                rated = true;
                //$('#movies-rating-star').data('raty').readOnly(true);
            }
        });
    </script>
    <script src="<?= get_template_directory_uri() ?>/assets/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css"
          href="<?= get_template_directory_uri() ?>/assets/source/jquery.fancybox.css?v=2.1.5" media="screen"/>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".fancybox").fancybox({
                maxWidth: 800,
                maxHeight: 600,
                fitToView: false,
                width: '70%',
                height: '70%',
                autoSize: false,
                closeClick: false,
                openEffect: 'none',
                closeEffect: 'none'
            });
        });

    </script>
<?php }) ?>
