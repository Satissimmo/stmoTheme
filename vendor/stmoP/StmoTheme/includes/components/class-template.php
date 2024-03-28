<?php
/**
 * Template component.
 *
 * @package StmoTheme\Components
 */

namespace StmoTheme\Components;

use StmoTheme\Helpers as st;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Template component class.
 *
 * @class Template
 */
final class Template extends Component {

	/**
	 * Class constructor.
	 *
	 * @param array $args Component arguments.
	 */
	public function __construct( $args = [] ) {

		// Add theme supports.
		add_action( 'after_setup_theme', [ $this, 'add_theme_supports' ] );

		// Register menu locations.
		add_action( 'after_setup_theme', [ $this, 'register_menu_locations' ] );

		// Register widget areas.
		add_action( 'widgets_init', [ $this, 'register_widget_areas' ] );

		// Disable widget editor.
		add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
		add_filter( 'use_widgets_block_editor', '__return_false' );

		// Render theme header.
		add_action( 'wp_body_open', [ $this, 'render_theme_header' ] );

		parent::__construct( $args );
	}

	/**
	 * Adds theme supports.
	 */
	public function add_theme_supports() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );

		foreach ( stmotheme()->get_config( 'theme_supports' ) as $name => $args ) {
			if ( is_array( $args ) ) {
				add_theme_support( $name, $args );
			} else {
				add_theme_support( $args );
			}
		}
	}

	/**
	 * Registers menu locations.
	 */
	public function register_menu_locations() {
		foreach ( stmotheme()->get_config( 'menu_locations' ) as $name => $args ) {
			register_nav_menu( $name, st\get_array_value( $args, 'description' ) );
		}
	}

	/**
	 * Registers widget areas.
	 */
	public function register_widget_areas() {
		foreach ( stmotheme()->get_config( 'widget_areas' ) as $name => $args ) {
			$active = true;

			// Check plugin.
			$plugin = st\get_array_value( $args, 'plugin' );

			if ( $plugin ) {
				if ( strpos( $plugin, 'stmop' ) === 0 ) {
					if ( 'stmop' === $plugin ) {
						$active = st\is_plugin_active( $plugin );
					} else {
						$active = st\is_plugin_active( 'stmop' ) && stmop()->get_version( preg_replace( '/^stmop-/', '', $plugin ) );
					}

					// Add prefix.
					$name = 'st_' . $name;
				} else {
					$active = st\is_plugin_active( $plugin );
				}
			}

			if ( $active ) {
				register_sidebar( array_merge( $args, [ 'id' => $name ] ) );
			}
		}
	}

	/**
	 * Renders template part.
	 *
	 * @param string $path File path.
	 * @param array  $context Template context.
	 * @return string
	 */
	public function render_part( $path, $context = [] ) {
		$output = '';

		// Get file path.
		$filepath = locate_template( $path . '.php' );

		if ( empty( $filepath ) ) {
			$dirpath = stmotheme()->get_path() . '/' . $path . '.php';

			if ( file_exists( $dirpath ) ) {
				$filepath = $dirpath;
			}
		}

		if ( $filepath ) {

			// Extract context.
			unset( $context['filepath'] );
			unset( $context['output'] );

			extract( $context );

			// Render part.
			ob_start();

			include $filepath;
			$output = ob_get_contents();

			ob_end_clean();
		}

		return $output;
	}

	/**
	 * Renders template.
	 *
	 * @param string $path Template path.
	 * @param array  $context Template context.
	 * @return string
	 * @deprecated Since version 1.1.0
	 */
	public function render_template( $path, $context = [] ) {
		return $this->render_part( $path, $context );
	}

	/**
	 * Renders header.
	 *
	 * @return string
	 * @deprecated Since version 1.2.0
	 */
	public function render_header() {
		return apply_filters( 'stmotheme/v1/areas/site_hero', '' );
	}

	/**
	 * Renders theme header.
	 */
	public function render_theme_header() {
		$output = '';

		// Render page loader.
		if ( get_theme_mod( 'page_loader', true ) ) {
			$output .= $this->render_part( 'templates/page/page-loader', [ 'color' => get_theme_mod( 'primary_color' ) ] );
		}

		// Render skip link.
		$output .= '<a href="#content" class="skip-link screen-reader-text">' . esc_html__( 'Skip to content', 'stmo_listing' ) . '</a>';

		echo $output;
	}
}
