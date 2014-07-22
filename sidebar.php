<div class="sidebar">

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


    <?php dynamic_sidebar( 'custom-content' ); ?>


</div> <!-- .secondary-content -->