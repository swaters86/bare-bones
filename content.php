<strong>Post Title:</strong> <?php the_title(); ?> <br>
<strong>Post Link:</strong> <?php the_permalink() ?> <br>
<strong>Post Time:</strong> <?php the_time( 'F jS, Y' ) ?> by <?php the_author_posts_link() ?> <br>
<strong>Post Categories:</strong> <?php the_category( ',' ); ?> <br>
<strong>Post Tags:</strong> <?php the_tags(); ?> <br>

<?php if ( is_front_page() ) { ?>
<strong>Post Excerpt:</strong> <?php the_excerpt(); ?> 
<?php }?>

<?php if ( is_single() ) { ?>
<strong>Post Content:</strong> <?php the_content(); ?>  
<?php }?>


