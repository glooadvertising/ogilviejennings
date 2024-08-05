<?php get_header(); ?>
<?php is_front_page() ? get_template_part('partials/home-hero') : get_template_part('partials/page-hero'); ?>
<?php if (!is_front_page() && !is_page('our-lawyers') && !is_child(11)) { ?>
    <section class="page-content">
        <div class="container">
            <?php the_content(); ?>
            <?php if (is_page('practice-areas')) { ?>
                <?php
                $args = array(
                    'post_parent' => $post->ID,
                    'post_type' => 'page',
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );

                $child_query = new WP_Query($args);
                ?>
                <ul class="practice-areas">
                    <?php while ($child_query->have_posts()) : $child_query->the_post(); ?>

                        <li <?php post_class(); ?>>
                            <a href="<?php the_permalink(); ?>#<?php echo basename(get_permalink()); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>

                <?php wp_reset_postdata(); ?>
            <?php } ?>


        </div>
        <?php if (is_page('contact-us')) { ?>
            <?php get_template_part('partials/contact'); ?>
        <?php } ?>
    </section>
<?php } ?>
<?php if (is_page('our-lawyers') || is_child(11)) { ?>
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
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'roles',
                            'field' => 'slug',
                            'terms' => 'director'
                        )
                    )
                );

                $child_query = new WP_Query($args);
                ?>

                <?php while ($child_query->have_posts()) : $child_query->the_post(); ?>

                    <?php get_template_part('partials/lawyer-card'); ?>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

                <!-- Senior associates -->
                <?php $args = array(
                    'post_parent' => $post->ID,
                    'taxonomy' => 'role',
                    'post_type' => 'page',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'roles',
                            'field' => 'slug',
                            'terms' => 'senior-associate'
                        )
                    )
                );

                $child_query = new WP_Query($args);
                ?>

                <?php while ($child_query->have_posts()) : $child_query->the_post(); ?>

                    <?php get_template_part('partials/lawyer-card'); ?>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

                <!-- Associates -->
                <?php $args = array(
                    'post_parent' => $post->ID,
                    'taxonomy' => 'role',
                    'post_type' => 'page',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'roles',
                            'field' => 'slug',
                            'terms' => 'associate'
                        )
                    )
                );

                $child_query = new WP_Query($args);
                ?>

                <?php while ($child_query->have_posts()) : $child_query->the_post(); ?>

                    <?php get_template_part('partials/lawyer-card'); ?>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

                <!-- Lawyers -->
                <?php $args = array(
                    'post_parent' => $post->ID,
                    'taxonomy' => 'role',
                    'post_type' => 'page',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'roles',
                            'field' => 'slug',
                            'terms' => 'lawyer'
                        )
                    )
                );

                $child_query = new WP_Query($args);
                ?>

                <?php while ($child_query->have_posts()) : $child_query->the_post(); ?>

                    <?php get_template_part('partials/lawyer-card'); ?>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

                <!-- conveyancer -->

                <?php $args = array(
                    'post_parent' => $post->ID,
                    'taxonomy' => 'role',
                    'post_type' => 'page',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'roles',
                            'field' => 'slug',
                            'terms' => 'conveyancer'
                        )
                    )
                );

                $child_query = new WP_Query($args);
                ?>

                <?php while ($child_query->have_posts()) : $child_query->the_post(); ?>

                    <?php get_template_part('partials/lawyer-card'); ?>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            </div>
            <div class="right-col">
                <?php is_page('our-lawyers') ? get_template_part('partials/lawyers-list') : null; ?>
                <?php if (is_child(11)) {
                    echo "<h3>See other practice areas</h3>";
                } ?>
                <?php is_child(11) ? wp_nav_menu(['menu' => 'practice-areas']) : null; ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php do_shortcode('[cwpai_contact_form]'); ?>

<!--?php get_template_part('partials/mobile-submenu'); ?-->
<?php is_child(11) ? mobile_submenu('See more practice areas', 'practice-areas') : null; ?>
<?php is_page('our-lawyers') ? get_template_part('partials/mobile-submenu') : null; ?>
<?php get_footer(); ?>