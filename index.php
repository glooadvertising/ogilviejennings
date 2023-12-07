<?php get_header();?>
<?php is_front_page() ? get_template_part( 'partials/home-hero' ) : get_template_part( 'partials/page-hero' ); ?>
<?php is_front_page() ? get_template_part( 'partials/our-lawyers' ) : null ; ?>
<?php is_front_page() ? get_template_part( 'partials/get-started-online' ) : null ; ?>
<?php is_front_page() ? get_template_part( 'partials/proud-history' ) : null ; ?>
<?php if(!is_front_page()) { ?>
    <section class="page-content">
        <div class="container">
            <?php the_content(); ?>

            <?php if(is_page('our-lawyers')) {?>
                <?php $args = array(
                'post_parent' => $post->ID,
                'post_type' => 'page',
                'orderby' => 'menu_order'
            );

                $child_query = new WP_Query( $args );
            ?>

            <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

                <?php get_template_part( 'partials/lawyer-card' ); ?>
                
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
                
            <?php }?>
        </div>
    </section>
<?php } ?>
<?php get_footer();?>