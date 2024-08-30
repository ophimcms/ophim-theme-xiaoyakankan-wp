<?php
get_header();
?>

    <div class="gm-main">

        <?php if (is_active_sidebar('widget-area')) {
            dynamic_sidebar('widget-area');
        } else {
            _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
        }
        ?>
    </div>

<?php get_footer() ?>