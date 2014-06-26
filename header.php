<!doctype html>
<html lang="en">
<head>
	<title>
		<?php if ( is_front_page() ) { ?>
			<?php bloginfo( 'name' ); ?>
			<?php echo( '-' ); ?>
			<?php bloginfo( 'description' ); ?>
		<?php } else {?>
			<?php bloginfo( 'name' ); ?>
			<?php echo( '-' ); ?>
			<?php wp_title(''); ?>
		<?php }?>
	</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
</head>
<body>
<header>
	<h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
		</a>
	</h1>
	<p>
		<?php bloginfo( 'description' ); ?>
	</p>
	<nav>
		<?php wp_nav_menu(); ?>
	</nav>
</header>
