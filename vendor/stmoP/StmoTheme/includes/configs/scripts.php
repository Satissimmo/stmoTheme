<?php
/**
 * Scripts configuration.
 *
 * @package StmoTheme\Configs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'focus_visible' => [
		'handle' => 'focus-visible',
		'src'    => stmotheme()->get_url() . '/assets/js/focus-visible.min.js',
	],

	'core_frontend' => [
		'handle' => 'stmotheme-core-frontend',
		'src'    => stmotheme()->get_url() . '/assets/js/frontend.min.js',
		'deps'   => [ 'jquery', 'hoverIntent', 'imagesloaded', 'comment-reply' ],
	],
];
