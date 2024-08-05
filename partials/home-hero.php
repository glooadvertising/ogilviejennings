    <section class="home-hero" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
        <div class="container">
            <div class="box-one">
                <div class="box-container">
                    <div class="text-group">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                    <a href="<?php echo get_field('link_url'); ?>" class="btn">Talk to us</a>
                </div>
            </div>
        </div>
    </section>