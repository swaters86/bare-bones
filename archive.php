<?php 
get_header(); 
?>
	<!-- start archive.php --> 

	<div class="primary">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<label>

		<?php

			if ( is_day() ) :

				printf( __( '<h2>Daily Archives:</h2> <em>%s</em>', '' ), get_the_date() );

			elseif ( is_month() ) :

				printf( __( '<h2>Monthly Archives:</h2> <em>%s</em>', '' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'bare-bones' ) ) );

			elseif ( is_year() ) :

				printf( __( '<h2>Yearly Archives:</h2>', '' ), get_the_date( _x( 'Y', 'yearly archives date format', 'bare-bones' ) ) );

			else :

				_e( '<h2>Archives</h2>', '' );

			endif;
		?> 

	</label>

	<?php get_template_part( 'content' ); ?>

	<?php endwhile; else: ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

	</div> <!-- .primary -->

	<!-- end archive.php -->

<?php
get_sidebar();
get_footer(); 
?>