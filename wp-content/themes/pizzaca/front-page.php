<?php
/**
 * The template for displaying the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pizzaca
 */
/* Template Name: Home */ 

//Variables 
$image = get_the_post_thumbnail_url( get_the_ID(), 'full' );

get_header(); 

?>

<main class="front-page bg-stone" style="background-image: url('<?php echo $image ?>');">
  <div class="wrapper">
    <div class="site-branding">
        <div class="site-logo">
          <a href="<?php echo get_home_url(); ?>">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/media/images/pizzaca-logo-round-dark.svg" alt="<?php bloginfo( 'name' ); ?>" />
          </a>
        </div>
      </div>
  </div>
</main>

<?php get_footer(); ?>