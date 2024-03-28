<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="sp-listing-category__image">
	<a href="<?php echo esc_url( $listing_category_url ); ?>">
		<?php if ( $listing_category->get_image__url( 'st_portrait_small' ) ) : ?>
			<img src="<?php echo esc_url( $listing_category->get_image__url( 'st_portrait_small' ) ); ?>" alt="<?php echo esc_attr( $listing_category->get_name() ); ?>" loading="lazy">
		<?php else : ?>
			<img src="<?php echo esc_url( stmotheme()->get_url() . '/assets/images/placeholders/image-portrait.svg' ); ?>" alt="<?php echo esc_attr( $listing_category->get_name() ); ?>" loading="lazy">
		<?php endif; ?>
	</a>
</div>
