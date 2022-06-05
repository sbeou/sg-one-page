<?php get_header(); ?>
<div class="fullscreen">
    <div class="container">
        <h1><?php single_cat_title(); ?></h1>
        <h3><?php echo category_description(); ?></h3>
        <div class="row">
            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-4 gril-post animation-element zoomIn">
                <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('capa-thumb');
            } ?>
            	<div class="text-content">
                    <h3 class="title-post"><?php echo wp_trim_words( get_the_title(), 5, '...' );?></h3>
                    <h6><i class="fa fa-folder-open"></i> <?php
                    foreach((get_the_category()) as $category) {
                        echo $category->cat_name . ' ';
                    }
                    ?></h6>
                </div>
               </a>
                </div>
            <?php endwhile; else: ?>
               <div class="col-md-12"> <p><?php _e('Desculpa, essa página não existe.', 'SG_Onepage'); ?></p></div>
            <?php endif; ?>
        </div>
        <?php if (function_exists("pagination")) {
        pagination($additional_loop->max_num_pages);
    } ?>
    </div>
</div>
<?php get_footer(); ?>