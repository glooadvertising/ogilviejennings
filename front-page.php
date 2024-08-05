<?php get_header(); ?>

<?php $related_posts = get_field('blocks_order'); ?>


<?php if ($related_posts) : ?>

    <?php foreach ($related_posts as $re_post) : ?>
        <?php $the_block = $re_post->post_name; ?>
        <?php get_template_part("partials/$the_block"); ?>
    <?php endforeach; ?>


<?php endif ?>

<?php get_footer(); ?>