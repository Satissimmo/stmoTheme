<?php
/**
 * Plugin Name: StmoTheme
 * Description: A framework for StmoP themes.
 * Version: 1.1.0
 * Author: StmoP
 * Author URI: https://stmop.io/
 * Text Domain: stmo_listing
 * Domain Path: /languages/
 *
 * @package StmoTheme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'stmotheme' ) ) {

	// Define the core file.
	if ( ! defined( 'ST_FILE' ) ) {
		define( 'ST_FILE', __FILE__ );
	}

	// Include the core class.
	require_once __DIR__ . '/includes/class-core.php';

	/**
	 * Returns the core instance.
	 *
	 * @return StmoTheme\Core
	 */
	function stmotheme() {
		return StmoTheme\Core::instance();
	}

	// Initialize StmoTheme.
	stmotheme();
}
