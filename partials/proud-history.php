<?php
$args = array(
    'post_type' => 'home_block',
    'pagename' => 'home-block-4',
);

$proudHistory = new WP_Query($args);

?>

<?php while ($proudHistory->have_posts()) : $proudHistory->the_post(); ?>

    <section class="proud-history" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
        <div class="container">
            <div class="translucid-box">
                <div class="text-container">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
                <a href="<?php echo get_field('link_url'); ?>" class="btn">About us</a>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>