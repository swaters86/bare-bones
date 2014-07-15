<?php 
get_header(); 
?>
	<div class="primary-content">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); ?>
		<?php endwhile; else: ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?> 
		
	</div> <!-- .primary-content -->

	<div class="secondary-content">

	
	</div> <!--.secondary-content -->
	
<?php 
get_footer(); 
?>
