<style>
    .xemphim{
        float: left;
        padding: 0 10px;
        border-radius: 17px;
        background-color: #f8f8f8;
        font-size: 13px;
        line-height: 32px;
        height: 32px;
        text-decoration: none; text-decoration: none;
        background: linear-gradient(90deg, #ffb821 0, #d9534f 45%, #ff1459);
        background-color: #ff183e;
        color: #fff;
        margin-left: 10px;
    }
</style>
<div class="gm-main">
    <div class="gm-bread">
        <ol>
            <li><a href="/">Trang chủ</a></li>
            <?php foreach (op_get_genre() as $item) : ?>
                <li><a href="#"><?= $item->name ?></a></li>
            <?php endforeach ?>
            <li class="on"> <?php the_title() ?></li>
        </ol>
    </div>

    <div class="gm-vod">
        <img class="img" src="<?= op_get_thumb_url() ?>" alt="<?php the_title() ?>">
        <div class="more">
            <h1 class="title"> <?php the_title() ?></h1>
            <div class="info">Quốc gia：<?= op_get_regions(', ') ?></div>
            <div class="info">Năm：2024</div>
            <div class="info">Đạo diễn：<?= op_get_directors(10, ', ') ?></p></div>
            <div class="info">Diễn viên：<?= op_get_actors(110, ', ') ?></div>
            <div class="info">
                Nội dung：　　<?php the_content() ?>
            </div>
            <?php if(watchUrl()) : ?>
            <a class="xemphim" href="<?= watchUrl() ?>">Xem phim</a>
            <?php endif ?>
            <?php if (op_get_trailer_url()) :
                parse_str(parse_url(op_get_trailer_url(), PHP_URL_QUERY), $my_array_of_vars);
                $video_id = $my_array_of_vars['v'];
                ?>
                <a class="xemphim fancybox fancybox.iframe" href="https://www.youtube.com/embed/<?= $video_id ?>">Trailer</a>
            <?php endif ?>

        </div>
    </div>
    <div class="gm-meta"><h4>Bình luận</h4></div>
    <div class="gm-list">
        <div style="width: 100%; background-color: #fff">
            <div class="fb-comments w-full" data-href="<?= getCurrentUrl() ?>" data-width="100%"
                 data-numposts="5" data-colorscheme="light" data-lazy="true">
            </div>
        </div>
    </div>
    <div class="gm-meta"><h4>Có thể bạn thích</h4></div>
    <div class="gm-list">
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
                    get_template_part('templates/section/section_thumb_item');
                endwhile;
            endif;
            wp_reset_query();
        }
        ?>
    </div>
</div>
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
