<div class="lawyer-card">
    <div class="col-left">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="col-right">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php $qual = get_field('qualifications'); ?>
        <?php if( $qual ): ?>
            <div class="additional-info_row">
                <h3>Qualifications</h3>
                <div class="content">
                    <strong><?php echo $qual['degree']; ?></strong><br>
                    <small><?php echo $qual['university__college']; ?></small>
                </div>
            </div>
        <?php endif; ?>
        <?php $areas = get_field('areas_of_practice'); ?>
        <div class="additional-info_row">
            <h3>Areas of Practice</h3>
            <div class="content">
                <?php foreach($areas as $area){ ?>
                    <span class="aop"><a href="<?php echo get_permalink( $area->ID ); ?>"><?php echo $area->post_title; ?></a></span>
                <?php } ?>
            </div>
        </div>

        <?php $contact = get_field('contact'); ?>
        <?php if( $contact ): ?>
            <div class="additional-info_row">
                <h3>Contact</h3>
                <div class="content">
                    <span><strong>Email:</strong> <a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></span>
                    <br>
                    <span><strong>Phone:</strong> <a href="tel:<?php echo $contact['phone']; ?>"><?php echo $contact['phone']; ?></a></span>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>