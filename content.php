<article  <?php post_class(); ?> >

	<?php if ( is_single() ) { ?>

		<?php if ( has_post_thumbnail() ) { ?>

			<?php the_post_thumbnail(); ?>

		<?php }?> 

	<?php }?>

	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

		<h2>
			<?php the_title(); ?>
		</h2>

	</a>

	<?php if ( is_front_page() || is_search() ) { ?>

		<?php the_excerpt(); ?> 

	<?php }?>

	<?php if ( is_single() ) { ?>

		<ul class="meta">

			<li>
				<label><i class="fa fa-calendar fa-1"></i>Posted On:</label>
				<span>
					<?php the_time( 'F jS, Y' ) ?>
				</span>
			</li>

			<li>
				<label><i class="fa fa-pencil fa-1"></i>Author:</label>
				<span>
					<?php the_author_posts_link() ?>
				</span>
			</li>

			<li>
				<label><i class="fa fa-folder-open fa-1"></i>Categories:</label>
				<span>
					<?php the_category(' '); ?>
				</span>
			</li>

			<li> 
				<label><i class="fa fa-tags fa-1"></i>Tags:</label>
				<span>
					<?php the_tags(''); ?>
				</span>
			</li>

		</ul> <!-- .meta --> 

		<?php the_content(); ?>

	<?php }?>
	
</article> <!-- .post-<?php the_id(); ?> -->
