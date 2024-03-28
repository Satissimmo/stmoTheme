<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( get_option( 'st_listing_enable_submission' ) ) :
	?>
	<button type="button" class="sp-menu__item sp-menu__item--listing-submit button button--secondary" data-component="link" data-url="<?php echo esc_url( stmop()->router->get_url( 'listing_submit_page' ) ); ?>"><i class="sp-icon fas fa-plus"></i><span><?php echo esc_html( stmop()->translator->get_string( 'add_listing' ) ); ?></span></button>
	<?php
endif;
