<?php 
get_header(); 
?>

<?php printf( __( '<strong>Search Results for:</strong> %s', '' ), get_search_query() ); ?> <br>

<hr>

<h3>Results</h3>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content' ); ?>
<?php endwhile; else: ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<?php 
get_footer(); 
?>
