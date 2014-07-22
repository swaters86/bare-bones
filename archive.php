<?php 
get_header(); 
?>
	<div class="primary">

	<h2>
		Archives
	</h2>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<label>
		<?php

			if ( is_day() ) :

				printf( __( '<strong>Daily Archives:</strong> <em>%s</em>', '' ), get_the_date() );

			elseif ( is_month() ) :

				printf( __( '<strong>Monthly Archives:</strong> <em>%s</em>', '' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'bare-bones' ) ) );

			elseif ( is_year() ) :

				printf( __( '<strong>Yearly Archives:</strong>', '' ), get_the_date( _x( 'Y', 'yearly archives date format', 'bare-bones' ) ) );

			else :
				_e( '<strong>Archives</strong>', '' );
			endif;
		?> 
	</label>

	<?php get_template_part( 'content' ); ?>

	<?php endwhile; else: ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

	</div> <!-- .primary -->
<?php
get_sidebar();
get_footer(); 
?>