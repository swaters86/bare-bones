<?php

// Creating a Custom Wordpress Widget 
register_sidebar(
	array(
	   'name' => __( 'custom-content', 'bare-bones' ),
	   'description'   => __( 'Appears anywhere in the site.', 'bare-bones' ),
	   'before_widget' => '<div class="widget %2$s">',
	   'after_widget'  => '</div>',
	   'before_title'  => '<h3 class="widget-title">',
	   'after_title'   => '</h3>',
	) 
 );

// Thumbnail Support
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 600, 150 );

// Create Post Excerpt and Add Read More Link 
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}

// Add Filters
add_filter( 'excerpt_more', 'new_excerpt_more' );

?>