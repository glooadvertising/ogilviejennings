<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'home_block',
    'orderby' => 'menu_order',
    'order' => 'ASC',
);

$homeBlocks = new WP_Query($args); ?>

<?php

get_template_part('partials/home-hero');
get_template_part('partials/our-lawyers');
get_template_part('partials/get-started-online');
get_template_part('partials/proud-history');

?>
<?php get_footer(); ?>