<?php 
get_header(); 
sgonepage_post_nav(); ?>	
        <div class="breadcrumb">
        	<h2><a href="<?php echo get_home_url(); ?>"><?php echo get_the_title( get_option('page_on_front', true) ); ?></a> <i class="fa fa-angle-right"></i> <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><?php echo get_the_title( get_option('page_for_posts', true) ); ?></a> <i class="fa fa-angle-right"></i> <?php the_category(' <i class="fa fa-angle-right"></i> ' , 'parents'); ?> <i class="fa fa-angle-right"></i> <?php echo get_breadcrumb(); ?></h2>
        </div>
<div class="container">
    <div class="row">
    	<div class="col-md-6 animation-element fadeInLeft">
    	<?php
		$value2 = get_field('galery-slider1');
		if (empty($value2)){echo "<!-- no slider -->";}
		else {echo do_shortcode('[gallery type="slideshow" size="large" link="none" ids="'.$value2.'"]');}
		?>
        </div>
      	<div class="col-md-6 animation-element fadeInRight">
        <?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        	
        	<h1 class="title-post"><?php the_title(); ?></h1> 
            <ul class="info-post">
            	<li><i class="fa fa-calendar"></i> <?php the_date(); ?></li> 
				<li><?php the_tags( '#', ' &nbsp;#', ' ' ); ?> </li>
                <li><i class="fa fa-folder-open"></i> <?php the_category(',' , ''); ?></li>
            </ul>
           <?php the_content(); ?>
		   
   
      </div>
    </div>
    <?php 
	
        echo do_shortcode('[rp4wp]'); 
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>
    
        <?php endwhile; else: ?>
            <p><?php _e('Desculpa, essa página não existe.', 'SG_Onepage'); ?></p>
        <?php endif; ?>
</div>
<?php get_footer(); ?>