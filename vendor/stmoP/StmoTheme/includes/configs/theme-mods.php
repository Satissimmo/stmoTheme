<?php
/**
 * Theme mods configuration.
 *
 * @package StmoTheme\Configs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'title_tagline'     => [
		'fields' => [
			'copyright_notice' => [
				'label' => esc_html__( 'Copyright Notice', 'stmo_listing' ),
				'type'  => 'textarea',
			],
		],
	],

	'static_front_page' => [
		'fields' => [
			'page_loader' => [
				'label'   => esc_html__( 'Enable page loading screen', 'stmo_listing' ),
				'type'    => 'checkbox',
				'default' => true,
			],
		],
	],

	'colors'            => [
		'title'  => esc_html__( 'Colors', 'stmo_listing' ),

		'fields' => [
			'primary_color'   => [
				'label' => esc_html__( 'Primary Color', 'stmo_listing' ),
				'type'  => 'color',
			],

			'secondary_color' => [
				'label' => esc_html__( 'Secondary Color', 'stmo_listing' ),
				'type'  => 'color',
			],
		],
	],

	'fonts'             => [
		'title'  => esc_html__( 'Fonts', 'stmo_listing' ),

		'fields' => [
			'heading_font'        => [
				'label' => esc_html__( 'Heading Font', 'stmo_listing' ),
				'type'  => 'font',
			],

			'heading_font_weight' => [
				'type' => 'hidden',
			],

			'body_font'           => [
				'label' => esc_html__( 'Body Font', 'stmo_listing' ),
				'type'  => 'font',
			],

			'body_font_weight'    => [
				'type' => 'hidden',
			],
		],
	],
];
