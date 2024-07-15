<section class="contact-section">
    <div class="container">
    <?php if( have_rows('office') ):?>
    <?php while ( have_rows('office') ) : the_row();?>
    <div class="office-card-wrapper">
        <div class="office-card">
            <h2><?php the_sub_field('location'); ?></h2>
            <span><strong>Phone: </strong><a href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a></span>
            <span><strong>Fax: </strong><a href="tel:<?php the_sub_field('fax'); ?>"><?php the_sub_field('fax'); ?></a></span>
            <span><strong>Address: </strong><a href="<?php the_sub_field('map_link'); ?>" target="_blank" class="highlighted-link"><?php the_sub_field('address'); ?></a></span>
			<?php $gpo = get_sub_field('gpo_box');?>
            <?php if(get_sub_field('gpo_box') == true) { ?> <?php echo "<span><strong>GPO Box: </strong>{$gpo}</span>"?><?php }?>
            <span><strong>Email: </strong><a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></span>
        </div>
    </div>
    <?php endwhile;?>
	<?php endif;?>
    </div>
</section>