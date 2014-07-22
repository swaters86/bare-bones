<!-- start content-none.php --> 

<h2>
	<?php _e( 'Nothing Found', 'bare-bones' ); ?>
</h2>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

<p>
	<?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bare-bones' ), admin_url( 'post-new.php' ) ); ?>
</p>

<?php elseif ( is_search() ) : ?>

<p>
	<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bare-bones' ); ?>
</p>

<?php else : ?>

<p>
	<?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bare-bones' ); ?>
</p>

<?php endif; ?>

<!-- end content-none.php -->

