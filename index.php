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

		<h2>Search</h2>
		<?php get_search_form(); ?>

		<h2>Archives</h2>

		<h3>Yearly</h3>
		<ul>
			<?php wp_get_archives( 'type=yearly' ); ?>
		</ul>

		<h3>Monthly</h3>
		<ul>
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ul>

		<h3>Categories</h3>
		<ul>
			<?php wp_list_categories(); ?>
		</ul>

	</div> <!-- .secondary-content -->

<?php 
get_footer(); 
?>
