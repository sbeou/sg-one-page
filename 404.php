<?php get_header(); ?>
<div class="fullscreen">
    <div class="container">
        <div class="row">   	
            <div class="col-md-12 text-center">
            	<img src="<?php echo get_template_directory_uri(); ?>/bootstrap/img/error-404.jpg" class="animation-element zoomIn" alt="<?php _e( 'Página não econtrada', 'SG_Onepage' ); ?>">
               <h1><?php _e( 'Página não econtrada', 'SG_Onepage' ); ?></h1>
				<p><?php _e( 'O que você está procurando?', 'SG_Onepage' ); ?></p>

					<?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>