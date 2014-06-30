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
	<!-- Using normalize so all browsers will render the elements the same --> 
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css">
</head>
<body>

<h2>header.php</h2>

<strong>Home URL:</strong> <?php echo esc_url( home_url( '/' ) ); ?> <br>
<strong>Blog Name:</strong> <?php bloginfo( 'name' ); ?> <br>
<strong>Blog Description:</strong> <?php bloginfo( 'description' ); ?> <br> 

<h3>Wordpress Nav Menu:</h3> 

<?php wp_nav_menu(); ?> <br>
