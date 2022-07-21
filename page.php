<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pizzaca
 */

get_header();

// Variables 
$image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
?>

	<main id="primary" class="site-main">
	<section class="top">
		<div class="wrapper">			
			<div class="content">
				<h1 class="title"><?php the_title();?></h1>
				<div class="vertical">
					<p><?php the_content();?> </p>
				</div>
			</div>	
		</div>	
	</section>
	
	</main><!-- #main -->

<?php
get_footer();
