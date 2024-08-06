<?php get_header(); ?>
<?php get_template_part('partials/page-hero') ?>
<section class="page-content-cols">
    <div class="container">

        <div class="left-col">
            <?php the_content(); ?>

            <?php
            // Displaying taxonomy terms
            $terms = get_terms('roles');
            ?>


            <?php foreach ($terms as $term) : ?>

                <?php $the_slug = $term->slug; ?>
                <?php
                $args = array(
                    'post_parent' => $post->ID,
                    'taxonomy' => 'role',
                    'post_type' => 'page',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'roles',
                            'field' => 'slug',
                            'terms' => $the_slug,
                        )
                    )
                );
                $directors = new WP_Query($args);
                ?>

                <?php while ($directors->have_posts()) : $directors->the_post(); ?>
                    <?php get_template_part('partials/lawyer-card'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>


            <?php endforeach; ?>



        </div>
        <div class="right-col">

            <?php is_page('our-lawyers') ? get_template_part('partials/lawyers-dynamic-list') : null; ?>
            <?php if (is_child(11)) {
                echo "<h3>See other practice areas</h3>";
            } ?>
            <?php is_child(11) ? wp_nav_menu(['menu' => 'practice-areas']) : null; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>