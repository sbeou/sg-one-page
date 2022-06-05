<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

function bbx_enqueue_scripts() 
{ 
	$js_directory = get_template_directory_uri() . '/bootstrap/js/'; 
	wp_register_script( 'animate', $js_directory . 'animate.js', 'jquery', '1.0' );  
	wp_enqueue_script( 'animate' ); 
} 
add_action( 'wp_enqueue_scripts', 'bbx_enqueue_scripts' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 2',
'id' => 'footer-sidebar-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 3',
'id' => 'footer-sidebar-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
	
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
	  'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,600', false );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

function themeslug_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	$wp_customize->add_setting( 'themeslug_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
	) ) );
}
add_action( 'customize_register', 'themeslug_theme_customizer' );

function custom_theme_setup() {
	add_theme_support( $feature, $arguments );
}
if ( ! function_exists( 'sgonepage_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
*
* @since Twenty Thirteen 1.0
*/
function sgonepage_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
		<div class="pager">
        	<ul>
				<li class="previous"><?php previous_post_link( '%link', _x( '<i class="fa fa-angle-left"></i> <span><small>Post anterior</small>%title</span>', 'Post anterior', 'sg-one-page' ) ); ?></li>
				<li class="next"><?php next_post_link( '%link', _x( '<i class="fa fa-angle-right"></i> <span><small>Próximo post</small>%title</span>', 'Próximo post', 'sg-one-page' ) ); ?></li>
            </ul>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'sgonepage_portfolio_nav' ) ) :
/**
 * Display navigation to next/previous portfolio when applicable.
*
* @since Twenty Thirteen 1.0
*/
function sgonepage_portfolio_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<a href="<?php echo get_home_url(); ?>#portfolio" class="go-to-home"><i class="fa fa-times-circle" aria-hidden="true"></i></a></li>

	<?php
}
endif;
add_image_size( 'my-thumbnail-size', 350, 350, array( 'center', 'center') );
function rp4wp_example_my_thumbnail_size( $thumb_size ) {
	return 'my-thumbnail-size';
}
add_filter( 'rp4wp_thumbnail_size', 'rp4wp_example_my_thumbnail_size' );
// VIDEO
// remove dimensions from oEmbed videos
add_filter( 'embed_oembed_html', 'tdd_oembed_filter', 10, 4 ) ;
function tdd_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="video-container">'.$html.'</div>';
    return $return;
}
add_action( 'after_setup_theme', 'custom_theme_setup' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'capa-thumb', 400, 300, array( 'center', 'center') );
function get_breadcrumb() {

	global $post;

	$trail = '

';
	$page_title = get_the_title($post->ID);

	if($post->post_parent) {
		$parent_id = $post->post_parent;

		while ($parent_id) {
			$page = get_page($parent_id);
			$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a> <i class="fa fa-angle-right"></i> ';
			$parent_id = $page->post_parent;
		}

		$breadcrumbs = array_reverse($breadcrumbs);
		foreach($breadcrumbs as $crumb) $trail .= $crumb;
	}

	$trail .= $page_title;
	$trail .= '

';

	return $trail;	

}
add_filter( 'rp4wp_append_content', '__return_false' );
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo '<nav aria-label="Page navigation" class="text-center"><ul class="pagination"><li class=\"disabled\"><a>Página '.$paged.' de '.$pages.'</a></li>';
         //if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo; Primeiro</a></li>";
         //if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Precedente</a></li>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class=\"active\"><a href='".get_pagenum_link($i)."' >".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' >".$i."</a></li>";
             }
         }
 
         //if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\">Próximo &rsaquo;</a></li>";  
         //if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>Último &raquo;</a></li>";
         echo "</ul></nav>\n";
     }
	
}

	?>