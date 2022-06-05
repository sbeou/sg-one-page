<?php get_header(); ?>
<div class="fullscreen">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php sgonepage_portfolio_nav(); ?>
		<?php the_content(); ?>

        
        <?php //comments_template(); ?>
    
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>