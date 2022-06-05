<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="site">
  <nav class="navbar navbar-inverse" role="navigation" id="top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            
			<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
            <div class='site-logo'>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
            </div>
            <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
        <?php else : ?>
            <hgroup>
                <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
            </hgroup>
        <?php endif; ?>
        </div>
        <div class="hidden-xs">
		<?php do_action('wpml_add_language_selector');?>
        <ul class="social">
        	<li><a href="https://www.facebook.com/webdesignALaFrancaise/" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
            <li><a href="https://www.instagram.com/webdesignalafrancaise/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/company/webdesign-à-la-française/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
        </div>
    </div>
    </nav>
    <nav class="navbar navbar-inverse affix-top collapse navbar-collapse" id="bs-example-navbar-collapse-1" role="navigation" data-spy="affix">      
        
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            <div class="visible-xs-block">
		<?php do_action('wpml_add_language_selector');?>
        <ul class="social">
        	<li><a href="https://www.facebook.com/webdesignALaFrancaise/" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
            <li><a href="https://www.instagram.com/webdesignalafrancaise/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/company/webdesign-à-la-française/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
        </div>
        <!--/.nav-collapse -->
    </nav>