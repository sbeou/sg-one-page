<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php
		$background = get_field('background');
		$icone = get_field('icone');
		$title = get_field('title-page');
	?>
    <div class="fullscreen">
		<?php if (empty($background)){echo "<!-- no banner -->";}
            else { ?>
            <div class="banner-page text-center" style="background-image:url(<?php echo $background ;?>);background-size:cover;background-position:center;">
                <div class="container">
                    <img src="<?php echo $icone ;?>" class="animation-element fadeInTop">
                    <h1 class="animation-element fadeInBottom"><?php if (empty($title)){ the_title();}
            		else { echo $title;}?></h1>
                    <h4><a href="<?php echo get_home_url(); ?>"><?php echo get_the_title( get_option('page_on_front', true) ); ?></a>  <i class="fa fa-angle-right"></i> <?php echo get_breadcrumb(); ?></h4>
                </div>
            </div>
        <?php ;}?>
        <div class="container">
            <div class="row">   	
                <div class="col-md-12">
                	<?php the_content(); ?>      
                </div>
            </div>
        </div>
    </div>               
    <?php endwhile; else: ?>
    <p class="text-center"><?php _e('Desculpa, essa página não existe.', 'SG_Onepage'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>