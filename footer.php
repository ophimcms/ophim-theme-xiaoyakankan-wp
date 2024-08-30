<?php
if ( is_active_sidebar('widget-footer') ) {
    dynamic_sidebar( 'widget-footer' );
} else {
    _e('This is widget footer. Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
<script src="<?= get_template_directory_uri() ?>/assets/theme/js/1.12.4-jquery.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/theme/js/2.0.0-lazyload.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/theme/js/0.13.2-hls.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/theme/js/1.26.0-DPlayer.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/theme/js/1.0.1-browser-storage.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/theme/js/js-app.js"></script>
<?php wp_footer(); ?>
</body>
</html>