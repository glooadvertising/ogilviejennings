<?php get_header();?>
<section class="page-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/nyas-ebriefings-next-moon-landing.jpg');">
    <div class="container">
    </div>
</section>
<section class="page-hero-mobile" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/nyas-ebriefings-next-moon-landing.jpg');">
    <div class="container">
    </div>
</section>
<section id="<?php echo basename(get_permalink()); ?>" class="page-heading">
    <div class="container <?php echo is_page('our-lawyers') || is_child(11) ? "page-width" : null; ?>">
        <h1>Sorry!</h1>
    </div>
</section>
<section class="page-content">
    <div class="container">
        <p>The page you are looking for doesn't exist. Click <a href="<?php echo site_url('/'); ?>">here</a> to go back to our home page.</p>
    </div>
</section>
<?php get_footer();?>