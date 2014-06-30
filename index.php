<?php 
get_header(); 
?>

<h2>index.php</h2>

<hr>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content' ); ?>
<?php endwhile; else: ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<hr>

<h3>Search Form</h3>
<?php get_search_form(); ?>

<hr>

<h2>Archives<h2>

<h3>Yearly</h3>
<?php wp_get_archives( 'type=yearly' ); ?>

<h3>Montly</h3>
<?php wp_get_archives( 'type=monthly' ); ?> 

<h3>Categories</h3>
<?php wp_list_categories(); ?>

<?php 
get_footer(); 
?>