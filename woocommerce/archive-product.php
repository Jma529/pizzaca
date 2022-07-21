<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();

$table_1 = '[product_table category="221, 267" product_table columns="name: Starters and Salads, short-description: Descripton, price, add-to-cart"]';
$table_2 = '[product_table category="219" product_table columns="name: Pizza Type, short-description: Description, price, quick-view: Choose add-ons"]';
$table_3 = '[product_table category="268" product_table columns="name: Pastas, short-description: Descripton, price, add-to-cart" ]';
$table_4 = '[product_table category="270" product_table columns="name: Mains, short-description: Descripton, price, add-to-cart" ]';
$table_5 = '[product_table category="272" product_table columns="name: Mains, short-description: Descripton, price, add-to-cart" ]';


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action( 'woocommerce_before_main_content' );

?>
<main id="primary" class="site-main">
  <section class="top">
    <div class="wrapper">
    <h1 class="title">	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?></h1>
<!-- wp:paragraph {"align":"left"} -->
<p>Deliveries and take-away hours: Tues-Sun, 4:30pm-9pm<br><strong>Deliveries: Please allow 45 minutes<br>Local pick-up: You will receive a text within 15 minutes with your pick-up time.</strong><br>Minimum order: $25<br>Delivery fee: $5</p>
<p>Tuesdays: Pizzas only available online!!</p>

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link" href="http://localhost:8888/pizzaca/cart/">View cart</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<h2>Starters &amp; Salads</h2>
<p> <?php echo do_shortcode($table_1); ?> </p>
<h2>Wood Fired Pizzas</h2>
<p> <?php echo do_shortcode($table_2); ?> </p>
<h2>Pastas</h2>
<p> <?php echo do_shortcode($table_3); ?> </p>
<h2>Mains</h2>
<p> <?php echo do_shortcode($table_4); ?> </p>
<h2>Kids</h2>
<p> <?php echo do_shortcode($table_5); ?> </p>

</div>
</section>
</main>
<?php
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );

get_footer();
?>