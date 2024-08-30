<div class="gm-meta">
    <h3><?= $title; ?></h3>
</div>
<div class="gm-list">
    <?php while ($query->have_posts()) : $query->the_post();
        get_template_part('templates/section/section_thumb_item');
    endwhile; ?>
</div>