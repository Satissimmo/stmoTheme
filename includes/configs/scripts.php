<?php
/**
 * Scripts configuration.
 *
 * @package StmoTheme\Configs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'parent_frontend' => [
		'handle'  => 'stmotheme-parent-frontend',
		'version' => stmotheme()->get_version( 'parent' ),
		'src'     => stmotheme()->get_url( 'parent' ) . '/assets/js/frontend.min.js',
		'deps'    => [ 'stmotheme-core-frontend' ],
	],
];
