<?php
/**
 * Styles configuration.
 *
 * @package StmoTheme\Configs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'parent_frontend' => [
		'handle'  => 'stmotheme-parent-frontend',
		'src'     => stmotheme()->get_url( 'parent' ) . '/style.css',
		'version' => stmotheme()->get_version( 'parent' ),
		'scope'   => [ 'frontend', 'editor' ],
	],
];
