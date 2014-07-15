<?php 
get_header(); 
?>
	<main>
	<section> 
		<?php printf( __( '<strong>Search Results for:</strong> %s', '' ), get_search_query() ); ?> <br>
	</section>
		<h2>
			Results
		</h2>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); ?>
		<?php endwhile; else: ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</main>
	<aside>

	</aside>
<?php 
get_footer(); 
?>
