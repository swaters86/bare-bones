<!doctype html>
<!-- start header.php -->
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
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<!-- Using normalize so all browsers will render the elements the same --> 
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css"> 
<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
<!--[if lt IE 9]>
<script src="dist/html5shiv.js"></script>
<![endif]-->
</head>
<body>

	<div class="page">

		<header class="site-header">

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

				<h1>
					<?php bloginfo( 'name' ); ?> 
				</h1>

			</a>

			<p>
				<?php bloginfo( 'description' ); ?> 
			</p>

			<?php wp_nav_menu(); ?>

		</header> <!-- .site-header -->

<!-- end header.php -->