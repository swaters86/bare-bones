<?php 
get_header(); 
?>

	<!-- start search.php --> 

	<div class="primary">

	<h2>
		Results
	</h2>

	<label><?php printf( __( '<strong>Search Results for:</strong> <em>%s</em>', '' ), get_search_query() ); ?> </label>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content' ); ?>

	<?php endwhile; else: ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

	</div> <!-- .primary -->

	<!-- end search.php -->

<?php
get_sidebar();
get_footer(); 
?>
