<?php
/**
 * The template for displaying a two column page
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cheeditha-energy
 */
/* Template Name: Two Column */ 

// Contact page:
$store_address     = get_option( 'woocommerce_store_address' );
$store_address_2   = get_option( 'woocommerce_store_address_2' );
$store_city        = get_option( 'woocommerce_store_city' );
$store_postcode    = get_option( 'woocommerce_store_postcode' );


get_header(); ?>

<main id="primary" class="site-main">
		<section class="contact top">
		<div class="wrapper">
			<div class="content">
			<h1 class="title"><?php the_title();?></h1>
				<div class="flex mobile-stack">
					<div class="left forty">
						<h2 class="accent">Visit us</h2>
						<div class="location">
						<p class="bold no-margin">Pizzeria & Bar</p>
							<p><?php echo $store_address .",";?>
							<br><?php echo $store_city;?>
							<br><a class="link-dark" href="tel:+61893411288 ">9341 1288</a> 
							</p>
							<p class="bold no-margin">Caffe</p>
							<p>Address: 161 Gildercliffe, Scarborough
							<br>Phone:<a class="link-dark" href="tel:+61893411288 ">9341 1288</a> 
							</p>
						</div>
						<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3387.481784380598!2d115.77296691576214!3d-31.893504726683958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32af26acb6951f%3A0x8e177633894920de!2sPizzaca%20Caffe!5e0!3m2!1sen!2sau!4v1653286444056!5m2!1sen!2sau" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
					<div class="col sixty">
					<?php the_content();?>
					</div>
				</div>
			</div>
			</div>
		</section>
</main>


<?php get_footer(); ?>