<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'home_block',
    'orderby' => 'menu_order',
    'order' => 'ASC',
);

$homeBlocks = new WP_Query($args); ?>

        <?php
        $elpico = convertTitleToURL(the_title());
        $laZorra = "patials/" . $elpico;

        ?>

        <?php while ($homeBlocks->have_posts()) : $homeBlocks->the_post(); ?>
        <?php get_template_part($laZorra); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

<?php

// get_template_part('partials/home-hero');
// get_template_part('partials/our-lawyers');
// get_template_part('partials/get-started-online');
// get_template_part('partials/proud-history');

?>
<?php get_footer(); ?>