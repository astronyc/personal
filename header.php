<?php 
  $page = get_queried_object();
?>
<!DOCTYPE html>
<!--[if lte IE 11]><html <?php language_attributes(); ?> class="no-js lte-ie11"> <![endif]-->
<!--[if gte IE 11]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cleartype" content="on">
	<?php wp_head(); ?>

	<?php
	// Connect to the Browsersync server
	$dev_hostname = "localhost:8000";
	if( (strpos($_SERVER['SERVER_NAME'], ".") === false) || ($_SERVER['SERVER_NAME'] === $dev_hostname) ) {
		echo "<script type=\"text/javascript\" id=\"__bs_script__\">document.write(\"<script async src='http://HOST:3000/browser-sync/browser-sync-client.js'><\/script>\".replace(\"HOST\", window.location.hostname));</script>";
	}
?>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,500" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
	 crossorigin="anonymous">




</head>

<body <?php body_class(); ?>>

	<nav class="navBar">
		<nav class="wrapper">
			<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<h1>drea ibarra</h1>
				</a></div><!-- Logo -->

			<div class="menu-toggle-wrap">
				<input type="checkbox" id="menu-toggle" />
				<label for="menu-toggle" class="label-toggle"></label>
				<ul>
					<?php wp_nav_menu(array(
							'theme_location' => 'primary',
							'container' => false,
							'items_wrap' => '%3$s', // removes the <ul> from the menu as we're using our own markup
							'fallback_cb' => mytheme_menu_fallback
						)); ?>
				</ul>
			</div>

		</nav>
	</nav>

	<div class="site-content">