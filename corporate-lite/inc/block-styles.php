<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Corporate Lite 1.0
	 *
	 * @return void
	 */
	function corporate_lite_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'corporate-lite-columns-overlap',
				'label' => esc_html__( 'Overlap', 'corporate-lite' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'corporate-lite-border',
				'label' => esc_html__( 'Borders', 'corporate-lite' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'corporate-lite-border',
				'label' => esc_html__( 'Borders', 'corporate-lite' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'corporate-lite-border',
				'label' => esc_html__( 'Borders', 'corporate-lite' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'corporate-lite-image-frame',
				'label' => esc_html__( 'Frame', 'corporate-lite' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'corporate-lite-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'corporate-lite' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'corporate-lite-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'corporate-lite' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'corporate-lite-border',
				'label' => esc_html__( 'Borders', 'corporate-lite' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'corporate-lite-separator-thick',
				'label' => esc_html__( 'Thick', 'corporate-lite' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'corporate-lite-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'corporate-lite' ),
			)
		);
	}
	add_action( 'init', 'corporate_lite_register_block_styles' );
}
