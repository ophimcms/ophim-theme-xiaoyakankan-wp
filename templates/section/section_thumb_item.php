<div class="item">
    <a class="link" href="<?php the_permalink(); ?>">
        <img class="img" src="<?= op_get_thumb_url() ?>" data-src="<?= op_get_thumb_url() ?>" alt="<?php the_title(); ?>"> <div class="tag1"><?= op_get_quality() ?></div>
        <div class="tag2"><?= op_get_status() ?> / <?= op_get_year(' ') ?></div>
        <div class="play"></div>
    </a>
    <div class="info">
        <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <div class="desc"><?= op_get_original_title() ?></div>
    </div>
</div>