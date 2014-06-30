<?php 
get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
	if ( is_day() ) :
		printf( __( '<strong>Daily Archives:</strong> %s', '' ), get_the_date() );
	elseif ( is_month() ) :
		printf( __( '<strong>Monthly Archives:</strong> %s', '' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyfourteen' ) ) );
	elseif ( is_year() ) :
		printf( __( '<strong>Yearly Archives:</strong>', '' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyfourteen' ) ) );
	else :
		_e( '<strong>Archives</strong>', '' );
	endif;
?> 
<br><br>
<?php get_template_part( 'content' ); ?>
<?php endwhile; else: ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<?php 
get_footer(); 
?>