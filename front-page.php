<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	  	<?php the_content(); ?>

	  	
		<?php //comments_template(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Desculpa, essa página não existe.', 'SG_Onepage'); ?></p>
	<?php endif; ?>
<?php get_footer(); ?>