<div class="lawyers-list">
    <?php 
    $args = array(
        'post_parent' => $post->ID,
        'taxonomy' => 'role',
        'post_type' => 'page',
        'orderby' => ['menu_order', 'taxonomy'],
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'roles',
                'field' => 'slug',
                'terms' => ['director'],
            )
        )
    );
        $directors = new WP_Query( $args );
    ?>

    <h2>Directors</h2>
    <ul>
        <?php while ( $directors->have_posts() ) : $directors->the_post(); ?>
        <li><a href="#<?php echo basename(get_permalink()); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </ul>

    <?php 
    $args = array(
        'post_parent' => $post->ID,
        'taxonomy' => 'role',
        'post_type' => 'page',
        'orderby' => ['menu_order', 'taxonomy'],
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'roles',
                'field' => 'slug',
                'terms' => ['senior-associate'],
            )
        )
    );

        $senior_associates = new WP_Query( $args );
    ?>

    <h2>Senior Associates</h2>
    <ul>
        <?php while ( $senior_associates->have_posts() ) : $senior_associates->the_post(); ?>
        <li><a href="#<?php echo basename(get_permalink()); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </ul>

    <?php 
    $args = array(
        'post_parent' => $post->ID,
        'taxonomy' => 'role',
        'post_type' => 'page',
        'orderby' => ['menu_order', 'taxonomy'],
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'roles',
                'field' => 'slug',
                'terms' => ['associate'],
            )
        )
    );

        $associates = new WP_Query( $args );
    ?>
    <h2>Associates</h2>
    <ul>
        <?php while ( $associates->have_posts() ) : $associates->the_post(); ?>
        <li><a href="#<?php echo basename(get_permalink()); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </ul>

    <?php 
    $args = array(
        'post_parent' => $post->ID,
        'taxonomy' => 'role',
        'post_type' => 'page',
        'orderby' => ['menu_order', 'taxonomy'],
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'roles',
                'field' => 'slug',
                'terms' => ['lawyer'],
            )
        )
    );

        $lawyers = new WP_Query( $args );
    ?>

    <h2>Laywers</h2>
    <ul>
        <?php while ( $lawyers->have_posts() ) : $lawyers->the_post(); ?>
        <li><a href="#<?php echo basename(get_permalink()); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </ul>

    <?php 
    $args = array(
        'post_parent' => $post->ID,
        'taxonomy' => 'role',
        'post_type' => 'page',
        'orderby' => ['menu_order', 'taxonomy'],
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'roles',
                'field' => 'slug',
                'terms' => ['conveyancer'],
            )
        )
    );

        $conveyancers = new WP_Query( $args );
    ?>
    <h2>Conveyancers</h2>
    <ul>
        <?php while ( $conveyancers->have_posts() ) : $conveyancers->the_post(); ?>
        <li><a href="#<?php echo basename(get_permalink()); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </ul>
</div>