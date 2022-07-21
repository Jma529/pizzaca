<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pizzaca
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pizzaca' ); ?></a>

	<header id="masthead" class="header">
		<div class="wrapper header-wrapper">
		<div class="site-branding">
			<div class="header-logo">
				<a href="<?php echo get_home_url(); ?>">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/media/images/pizzaca-logo-light.svg" alt="<?php bloginfo( 'name' ); ?>" />
				</a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Mobile Menu', 'pizzaca' ); ?></button>
			<div class="menu-items">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header-menu',
				)
			);
			?>
			</div>
			<div class="cart-icon">
		<a class="basketicon" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"> <i class="fa fa-shopping-cart"></i> <?php echo WC()->cart->get_cart_total(); ?></a>
		</div>
		</nav><!-- #site-navigation -->
		
		</div>
	</header><!-- #masthead -->
