<?php

// Create Post Excerpt and Add Read More Link 
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}

// Add Filters
add_filter( 'excerpt_more', 'new_excerpt_more' );

?>