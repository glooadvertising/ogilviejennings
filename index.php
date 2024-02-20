<?php get_header();?>
<?php is_front_page() ? get_template_part( 'partials/home-hero' ) : get_template_part( 'partials/page-hero' ); ?>
<?php is_front_page() ? get_template_part( 'partials/our-lawyers' ) : null ; ?>
<?php is_front_page() ? get_template_part( 'partials/get-started-online' ) : null ; ?>
<?php is_front_page() ? get_template_part( 'partials/proud-history' ) : null ; ?>
<?php if(!is_front_page() && !is_page('our-lawyers')) { ?>
    <section class="page-content">
        <div class="container">
            <?php the_content(); ?>
            <?php if(is_page('practice-areas')) { ?>
                    <?php
                    $args = array(
                        'post_parent' => $post->ID,
                        'post_type' => 'page',
                        'orderby' => 'menu_order'
                    );

                    $child_query = new WP_Query( $args );
                    ?>
                    <ul class="practice-areas">
                        <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
        
                            <li <?php post_class(); ?>>  
                                <a href="<?php the_permalink(); ?>#<?php echo basename(get_permalink()); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>

                    <?php wp_reset_postdata(); ?>
                <?php } ?>

        </div>
    </section>
<?php } ?>
<?php if(is_page('our-lawyers')) {?>
    <section class="page-content-cols">
        <div class="container">
            <div class="left-col">
                <?php the_content(); ?>

                <!-- directors -->
                    <?php $args = array(
                        'post_parent' => $post->ID,
                        'taxonomy' => 'role',
                        'post_type' => 'page',
                        'posts_per_page' => -1,
                        'orderby' => 'taxonomy',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'roles',
                                'field' => 'slug',
                                'terms' => 'director'
                            )
                        )
                    );

                    $child_query = new WP_Query( $args );
                ?>

                <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

                    <?php get_template_part( 'partials/lawyer-card' ); ?>
                    
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

                <!-- Senior associates -->
                <?php $args = array(
                        'post_parent' => $post->ID,
                        'taxonomy' => 'role',
                        'post_type' => 'page',
                        'posts_per_page' => -1,
                        'orderby' => 'taxonomy',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'roles',
                                'field' => 'slug',
                                'terms' => 'senior-associates'
                            )
                        )
                    );

                    $child_query = new WP_Query( $args );
                ?>

                <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

                    <?php get_template_part( 'partials/lawyer-card' ); ?>
                    
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>


                    
                <?php }?>


            </div>
            <div class="right-col">
                <?php is_page('our-lawyers') ? get_template_part( 'partials/lawyers-list' ) : null; ?>
            </div>
        </div>
    </section>

<?php is_page( 'contact-us' ) ? get_template_part('partials/contact') : null; ?>
<?php get_footer();?>