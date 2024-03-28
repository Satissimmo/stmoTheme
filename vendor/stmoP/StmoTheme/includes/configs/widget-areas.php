<?php
/**
 * Widget areas configuration.
 *
 * @package StmoTheme\Configs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'blog_sidebar'          => [
		'name'          => esc_html__( 'Blog', 'stmo_listing' ) . ' ' . sprintf( '(%s)', esc_html_x( 'sidebar', 'area', 'stmo_listing' ) ),
		'before_widget' => '<div id="%1$s" class="widget widget--sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>',
	],

	'listings_view_sidebar' => [
		'name'          => stmotheme()->stmoP->get_string( 'listings' ) . ' ' . sprintf( '(%s)', esc_html_x( 'sidebar', 'area', 'stmo_listing' ) ),
		'before_widget' => '<div id="%1$s" class="widget widget--sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>',
		'plugin'        => 'stmoP',
	],

	'listing_view_sidebar'  => [
		'name'          => stmotheme()->stmoP->get_string( 'listing' ) . ' ' . sprintf( '(%s)', esc_html_x( 'sidebar', 'area', 'stmo_listing' ) ),
		'before_widget' => '<div id="%1$s" class="widget widget--sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>',
		'plugin'        => 'stmoP',
	],

	'vendors_view_sidebar'  => [
		'name'          => stmotheme()->stmoP->get_string( 'vendors' ) . ' ' . sprintf( '(%s)', esc_html_x( 'sidebar', 'area', 'stmo_listing' ) ),
		'before_widget' => '<div id="%1$s" class="widget widget--sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>',
		'plugin'        => 'stmoP',
	],

	'vendor_view_sidebar'   => [
		'name'          => stmotheme()->stmoP->get_string( 'vendor' ) . ' ' . sprintf( '(%s)', esc_html_x( 'sidebar', 'area', 'stmo_listing' ) ),
		'before_widget' => '<div id="%1$s" class="widget widget--sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>',
		'plugin'        => 'stmoP',
	],

	'requests_view_sidebar' => [
		'name'          => stmotheme()->stmoP->get_string( 'requests' ) . ' ' . sprintf( '(%s)', esc_html_x( 'sidebar', 'area', 'stmo_listing' ) ),
		'before_widget' => '<div id="%1$s" class="widget widget--sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>',
		'plugin'        => 'stmoP-requests',
	],

	'request_view_sidebar'  => [
		'name'          => stmotheme()->stmoP->get_string( 'request' ) . ' ' . sprintf( '(%s)', esc_html_x( 'sidebar', 'area', 'stmo_listing' ) ),
		'before_widget' => '<div id="%1$s" class="widget widget--sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>',
		'plugin'        => 'stmoP-requests',
	],

	'booking_view_sidebar'  => [
		'name'          => stmotheme()->stmoP->get_string( 'booking' ) . ' ' . sprintf( '(%s)', esc_html_x( 'sidebar', 'area', 'stmo_listing' ) ),
		'before_widget' => '<div id="%1$s" class="widget widget--sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>',
		'plugin'        => 'stmoP-bookings',
	],

	'user_account_sidebar'  => [
		'name'          => esc_html__( 'Account', 'stmo_listing' ) . ' ' . sprintf( '(%s)', esc_html_x( 'sidebar', 'area', 'stmo_listing' ) ),
		'before_widget' => '<div id="%1$s" class="widget widget--sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>',
		'plugin'        => 'stmoP',
	],

	'shop'                  => [
		'name'          => esc_html__( 'Shop', 'stmo_listing' ) . ' ' . sprintf( '(%s)', esc_html_x( 'sidebar', 'area', 'stmo_listing' ) ),
		'before_widget' => '<div id="%1$s" class="widget widget--sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>',
		'plugin'        => 'woocommerce',
	],

	'site_footer'           => [
		'name'          => esc_html__( 'Site', 'stmo_listing' ) . ' ' . sprintf( '(%s)', esc_html_x( 'footer', 'area', 'stmo_listing' ) ),
		'before_widget' => '<div class="col-sm col-xs-12"><div id="%1$s" class="widget widget--footer %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h5 class="widget__title">',
		'after_title'   => '</h5>',
	],
];
