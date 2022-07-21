<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pizzaca
 */
/* Template Name: Footer */ 

 // Variables 
 $hours = get_field('store_hours');
 $facebook = get_field('facebook_link');
 $insta = get_field('insta_link');

?>

	<footer id="colophon" class="site-footer">
		<div class="wrapper full-width">
			<div class="flex footer-flex tablet-stack">
				<div class="footer-right col-25">
				<h2 class="accent">Food, Glorious Food</h2>
					<div class="footer-logo">
					<a href="<?php echo get_home_url(); ?>">
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/media/images/logo-text-dark.svg" alt="<?php bloginfo( 'name' ); ?>" />
					</a>
				</div>
				</div>
				<div class="footer-nav flex col-75">
					<div class="nav-item">
						<h3 class="h2">Info</h3>
						<div>
							<p class="margin-bottom">We are now a fully licensed venue</p>
							<p>Open Tues-Sun 4pm-Late</p>
							<p class="margin-bottom">Tuesday only: byo for pizza night, $8 corkage per bottle</p>
							<p><span class="bold">Caffe: </span>Open Tues-Sun 7:30am-3:00pm<br> Weekends open until 4:00pm </p>
						</div>
					</div>
					<div class="nav-item">
						<h3 class="h2">Contact</h3>
						<div class="menu-items">
							<a href="tel:+61893411288 ">Call us</a>
							<a href="https://www.pizzaca.com/contact-us">Message us</a>
						</div>
					</div>
					<div class="nav-item">
					<h3 class="h2">Quick links</h3>
							<div class="menu-items">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'footer-menu',
									)
								);
							?>
						<a href="https://bookings.nowbookit.com/?accountid=49a6c8b7-9e67-40de-826b-b3e48b11e015&venueid=6636&theme=dark&colors=hex,ffffff" target="_none">Make a booking</a>
					</div>
					</div>
					<div class="nav-item">
					<div class="register-form">
					<h3 class="h2">Connect</h3>
					<p>Sign up for our newsletter</p>
					<?php get_template_part('template-parts/mailchimp-form'); ?>
				</div>
					<div class="social-icons">
			<a href="https://www.instagram.com/pizzaca_pizzeria_bar/?hl=en" class="social-icon" target="_none">
			<svg width="25" height="25" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
<path d="M20.625 0H9.375C4.19813 0 0 4.19813 0 9.375V20.625C0 25.8019 4.19813 30 9.375 30H20.625C25.8019 30 30 25.8019 30 20.625V9.375C30 4.19813 25.8019 0 20.625 0ZM27.1875 20.625C27.1875 24.2437 24.2437 27.1875 20.625 27.1875H9.375C5.75625 27.1875 2.8125 24.2437 2.8125 20.625V9.375C2.8125 5.75625 5.75625 2.8125 9.375 2.8125H20.625C24.2437 2.8125 27.1875 5.75625 27.1875 9.375V20.625Z" fill="currentColor"/>
<path d="M15 7.5C10.8581 7.5 7.5 10.8581 7.5 15C7.5 19.1419 10.8581 22.5 15 22.5C19.1419 22.5 22.5 19.1419 22.5 15C22.5 10.8581 19.1419 7.5 15 7.5ZM15 19.6875C12.4162 19.6875 10.3125 17.5838 10.3125 15C10.3125 12.4144 12.4162 10.3125 15 10.3125C17.5838 10.3125 19.6875 12.4144 19.6875 15C19.6875 17.5838 17.5838 19.6875 15 19.6875Z" fill="currentColor"/>
<path d="M23.0625 7.93686C23.6144 7.93686 24.0619 7.48942 24.0619 6.93748C24.0619 6.38555 23.6144 5.93811 23.0625 5.93811C22.5106 5.93811 22.0631 6.38555 22.0631 6.93748C22.0631 7.48942 22.5106 7.93686 23.0625 7.93686Z" fill="currentColor"/>
				</svg>
			</a>
			<a href="https://www.facebook.com/Pizzaca-Cafe-529866480384947/" class="social-icon" target="_none">
			<svg width="25" height="25" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.875 10.3125V6.5625C16.875 5.5275 17.715 4.6875 18.75 4.6875H20.625V0H16.875C13.7681 0 11.25 2.51813 11.25 5.625V10.3125H7.5V15H11.25V30H16.875V15H20.625L22.5 10.3125H16.875Z" fill="currentColor"/>
</svg>
			</a>
		</div>

					</div>
				</div>
			</div>
			<div class="site-info">
				<!-- <p>Made by JMac Designs</p>
				<span class="sep"> | </span> -->
				<p>©2022 Pizzaca</p>
			</div><!-- .site-info -->
		</div> <!--Wrapper -->
	</footer><!-- #colophon -->
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
