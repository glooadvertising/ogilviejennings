<section class="page-hero" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <div class="container">
    </div>
</section>
<section class="page-hero-mobile" style="background-image: url('<?php echo the_field('mobile_hero'); ?>');">
    <div class="container">
    </div>
</section>
<section id="<?php echo basename(get_permalink()); ?>" class="page-heading">
    <div class="container <?php echo is_page('our-lawyers') || is_child(11) ? "page-width" : null; ?>">
        <h1><?php the_title(); ?></h1>
    </div>
</section>