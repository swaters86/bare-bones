<?php 
get_header(); 
?>

	<!-- start single.php --> 

	<div class="primary">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			?>

		<?php endwhile; else: ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?> 

	</div> <!-- .primary -->

	<!-- end single.php

<?php
get_sidebar();
get_footer(); 
?>