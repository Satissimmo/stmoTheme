<?php
/**
 * Plugin component.
 *
 * @package StmoTheme\Components
 */

namespace StmoTheme\Components;

use StmoTheme\Helpers as st;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Plugin component class.
 *
 * @class Plugin
 */
final class Plugin extends Component {

	/**
	 * Class constructor.
	 *
	 * @param array $args Component arguments.
	 */
	public function __construct( $args = [] ) {
		if ( is_admin() ) {

			// Load TGMPA.
			add_action( 'after_setup_theme', [ $this, 'load_tgmpa' ] );

			// Register plugins.
			add_action( 'tgmpa_register', [ $this, 'register_plugins' ] );
		}

		parent::__construct( $args );
	}

	/**
	 * Loads TGMPA.
	 */
	public function load_tgmpa() {
		$filepath = stmotheme()->get_path() . '/vendor/tgmpa/tgm-plugin-activation/class-tgm-plugin-activation.php';

		if ( file_exists( $filepath ) ) {
			require_once $filepath;
		}
	}

	/**
	 * Registers plugins.
	 */
	public function register_plugins() {
		tgmpa( stmotheme()->get_config( 'plugins' ) );
	}
}
