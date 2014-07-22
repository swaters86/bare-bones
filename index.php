<?php 
get_header(); 
?>
    <!-- start index.php -->

	<div class="primary">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content' ); ?>

		<?php endwhile; else: ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?> 

	</div> <!-- .primary -->
	
	<!-- end index.php -->
<?php 
get_sidebar();
get_footer(); 
?>
