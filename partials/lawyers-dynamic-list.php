<div class="lawyers-list">
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

        <details <?php echo $the_slug == 'director' ? 'open' : null; ?>>
            <summary><?php echo $term->name; ?></summary>
            <ul>
                <?php while ($directors->have_posts()) : $directors->the_post(); ?>
                    <li><a href="#<?php echo basename(get_permalink()); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </details>
    <?php endforeach; ?>
</div>