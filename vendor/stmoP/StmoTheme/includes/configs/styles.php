<?php
/**
 * Styles configuration.
 *
 * @package StmoTheme\Configs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'minireset'         => [
		'handle' => 'minireset',
		'src'    => stmotheme()->get_url() . '/assets/css/minireset.min.css',
	],

	'flexboxgrid'       => [
		'handle' => 'flexboxgrid',
		'src'    => stmotheme()->get_url() . '/assets/css/flexboxgrid.min.css',
	],

	'fontawesome'       => [
		'handle' => 'fontawesome',
		'src'    => stmotheme()->get_url() . '/assets/css/fontawesome/fontawesome.min.css',
	],

	'fontawesome_solid' => [
		'handle' => 'fontawesome-solid',
		'src'    => stmotheme()->get_url() . '/assets/css/fontawesome/solid.min.css',
	],

	'core_frontend'     => [
		'handle' => 'stmotheme-core-frontend',
		'src'    => stmotheme()->get_url() . '/assets/css/frontend.min.css',
		'scope'  => [ 'frontend', 'editor' ],
	],
];
