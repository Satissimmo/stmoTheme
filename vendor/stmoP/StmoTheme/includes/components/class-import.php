<?php
/**
 * Import component.
 *
 * @package StmoTheme\Components
 */

namespace StmoTheme\Components;

use StmoTheme\Helpers as st;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Import component class.
 *
 * @class Import
 */
final class Import extends Component {

	/**
	 * Class constructor.
	 *
	 * @param array $args Component arguments.
	 */
	public function __construct( $args = [] ) {
		if ( is_admin() ) {

			// Register theme demos.
			add_filter( 'pt-ocdi/import_files', [ $this, 'register_demos' ] );

			// Reset sidebar widgets.
			add_action( 'pt-ocdi/widget_importer_before_widgets_import', [ $this, 'reset_widgets' ] );
		}

		parent::__construct( $args );
	}

	/**
	 * Registers theme demos.
	 */
	public function register_demos() {
		return stmotheme()->get_config( 'theme_demos' );
	}

	/**
	 * Resets sidebar widgets.
	 */
	public function reset_widgets() {
		update_option( 'sidebars_widgets', [] );
	}
}
