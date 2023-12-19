<!DOCTYPE html>
<html <?php language_attributes( );?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'title' );?></title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <header class="main-header">
        <div class="container">
            <a href="<?php echo site_url('/'); ?>" class="main-logo">
            <span class="invisible-text"><?php bloginfo('title'); ?></span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/OJ_logo_trans.png" alt="Ogilvie Jennings logo">
            </a>
            <?php wp_nav_menu(); ?>
        </div>
    </header>
