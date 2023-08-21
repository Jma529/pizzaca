<?php
/**
 * Pizzaca functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pizzaca
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pizzaca_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Pizzaca, use a find and replace
		* to change 'pizzaca' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'pizzaca', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Primary', 'pizzaca' ),
			'footer-menu' => esc_html__( 'Footer', 'pizzaca' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'pizzaca_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'pizzaca_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pizzaca_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pizzaca_content_width', 640 );
}
add_action( 'after_setup_theme', 'pizzaca_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pizzaca_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pizzaca' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pizzaca' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pizzaca_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pizzaca_scripts() {
	wp_enqueue_style( 'pizzaca-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'pizzaca-style', 'rtl', 'replace' );

	wp_enqueue_script( 'pizzaca-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'pizzaca-functions', get_template_directory_uri() . '/js/functions.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pizzaca_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Auto Complete all WooCommerce orders.
 */
add_action( 'woocommerce_thankyou', 'custom_woocommerce_auto_complete_order' );
function custom_woocommerce_auto_complete_order( $order_id ) { 
    if ( ! $order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );
    $order->update_status( 'completed' );
}

/** Change Read more to say unavailable **/

add_filter( 'woocommerce_product_add_to_cart_text', 'pizzaca_archive_custom_cart_button_text' );
  
function pizzaca_archive_custom_cart_button_text( $text ) {
   global $product;       
   if ( $product && ! $product->is_in_stock() ) {           
      return 'Unavailable';
   } 
   return $text;
}

/** Add page url to body class */

function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
	$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
	}
	add_filter( 'body_class', 'add_slug_body_class' );

	// Add an automatic discount based on day of week, time, and shipping option

add_action( 'woocommerce_cart_calculate_fees', 'limited_date_range_percentage_discount', 10, 1 );

function limited_date_range_percentage_discount( WC_Cart $cart ) {

    date_default_timezone_set('Australia/Perth'); // Define the Time zone from this allowed time zones strings (http://php.net/manual/en/timezones.php)
		$dayOfWeekNumber = date("w");
		$start_time = mktime( 11, 30, 00);  // 
		$end_time   = mktime( 18, 00, 00); // 
    $now_time         = strtotime("now"); // Now time
    $percentage       = 10; // Discount percentage

		$chosen_shipping_method_id = WC()->session->get( 'chosen_shipping_methods' )[0];
		$chosen_shipping_method    = explode(':', $chosen_shipping_method_id)[0];


    $subtotal       = $cart->get_subtotal();

		if ( ($dayOfWeekNumber == 2 || $dayOfWeekNumber == 3)  && $now_time >= $start_time && $now_time <= $end_time && $dicounts_count <= $max_orders_count && ( strpos( $chosen_shipping_method_id, 'local_pickup' ) !== false )) {
        $discount = $cart->get_subtotal() * $percentage / 100;
        $cart->add_fee( __( 'Happy Hour Discount' ) . ' (' . $percentage . '%)', -$discount );
    }
	
}

add_filter( 'gettext', 'bbloomer_translate_shippingto', 9999, 3 );
   
function bbloomer_translate_shippingto( $translated, $untranslated, $domain ) {
   if ( ! is_admin() && 'woocommerce' === $domain ) {
      switch ( $translated ) {
         case 'Shipping to %s.':
            $translated = '';
            break;
      }
   }   
   return $translated;
}

// Bypass cart and go straight to checkout

add_action( 'woocommerce_before_checkout_form', 'bbloomer_cart_on_checkout_page', 11 );
 
function bbloomer_cart_on_checkout_page() {
   echo do_shortcode( '[woocommerce_cart]' );
}

add_filter( 'woocommerce_get_cart_url', 'bbloomer_redirect_empty_cart_checkout_to_shop' );
 
function bbloomer_redirect_empty_cart_checkout_to_shop() {
   return wc_get_page_permalink( 'shop' );
}