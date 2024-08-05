<section class="get-started-online">
    <div class="container">
        <div class="text-container">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
        <div class="cards-container">
            <a href="" target="_blank">
                <div class="card">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Family" class="icon">
                    <h3>Family Law</h3>
                    <small>Start online</small>
                </div>
            </a>
        </div>

    </div>
</section>