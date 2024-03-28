<?php
/**
 * Abstract component.
 *
 * @package StmoTheme\Components
 */

namespace StmoTheme\Components;

use StmoTheme\Helpers as st;
use StmoTheme\Traits;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Abstract component class.
 *
 * @class Component
 */
abstract class Component {
	use Traits\Mutator;

	/**
	 * Class constructor.
	 *
	 * @param array $args Component arguments.
	 */
	public function __construct( $args = [] ) {

		// Set properties.
		foreach ( $args as $name => $value ) {
			$this->set_property( $name, $value );
		}

		// Bootstrap properties.
		$this->boot();
	}

	/**
	 * Bootstraps component properties.
	 */
	protected function boot() {}

	/**
	 * Sets callbacks.
	 *
	 * @param array $callbacks Callback arguments.
	 */
	final protected function set_callbacks( $callbacks ) {
		foreach ( $callbacks as $callback ) {

			// Get hook type.
			$type = st\get_array_value( $callback, 'filter' ) ? 'filter' : 'action';

			// Register callback.
			call_user_func_array(
				'add_' . $type,
				[
					$callback['hook'],
					$callback['action'],
					st\get_array_value( $callback, 'priority', 10 ),
					st\get_array_value( $callback, 'args', 1 ),
				]
			);
		}
	}
}
