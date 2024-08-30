<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <link rel="profile" href="http://gmgp.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php wp_head(); ?>
    <link href="<?= get_template_directory_uri() ?>/assets/theme/app2.css" rel="stylesheet">
</head>
<body>
<script>var isA = false;</script>
<?php get_template_part('templates/header') ?>
<?php if (get_option('ophim_is_ads') == 'on') { ?>
<div id=top_addd></div>
<?php } ?>