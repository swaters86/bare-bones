<article>
	<header>
		<h2>
			<a href="<?php the_permalink() ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<div>
		<?php the_time( 'F jS, Y' ) ?> by <?php the_author_posts_link() ?>
		</div>
		</div>
		Posted in <?php the_category( ',' ); ?>
		</div>
		<div>
		Tagged with <?php the_tags(); ?>
		</div>
	</header>
	<?php if ( is_front_page() ) { ?>
		<div>
			<?php the_excerpt(); ?>
		</div>
	<?php }?>
	<?php if ( is_single() ) { ?>
		<div>
			<?php the_content(); ?> 
		</div>
	<?php }?>
</article>

