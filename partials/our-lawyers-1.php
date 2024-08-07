<?php
$args = array(
    'post_type' => 'home_block',
    'pagename' => 'our-lawyers-1',
);

$ourLawyers = new WP_Query($args);

?>

<?php while ($ourLawyers->have_posts()) : $ourLawyers->the_post(); ?>

    <section class="our-lawyers">
        <div class="box-two">
            <div class="container">
                <div class="box-container">
                    <div class="featured-image">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <div class="white-box">
                        <div class="text-group">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                        <a href="<?php echo get_field('link_url'); ?>" class="btn">Meet our team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>