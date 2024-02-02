<?php
/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function norrsken_setup() {
	add_editor_style( array( 'style.css' ) );
}
add_action( 'after_setup_theme', 'norrsken_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function norrsken_styles() {
	wp_enqueue_style( 'norrsken-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'norrsken' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'norrsken_styles' );


/*	-----------------------------------------------------------------------------------------------
	REGISTER BLOCK STYLES
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'norrsken_block_styles' ) ) :
	function norrsken_block_styles() {

		/* REGISTER STYLES FOR BLOCKS */

		$core_block_styles = apply_filters( 'norrsken_wp_enqueue_block_style_blocks', array( 
			'categories', 
			'comments', 
			'gallery', 
			'navigation', 
			'post-comments-form', 
			'post-navigation-link', 
			'pullquote', 
			'search' 
		) );

		foreach( $core_block_styles as $block_name ) {
			wp_enqueue_block_style(
				'core/' . $block_name,
				array(
					'handle' => 'norrsken-' . $block_name . '-style',
					'src'    => get_theme_file_uri( 'assets/css/' . $block_name . '.css' ),
					'ver'    => wp_get_theme( 'norrsken' )->get( 'Version' ),
					'path'   => get_theme_file_path( 'assets/css/' . $block_name . '.css' ),
				)
			);
		}

		/* REGISTER BLOCK STYLES */

		register_block_style(
			'core/query-pagination',
			array(
				'name'         => 'norrsken-pagination',
				'label'        => __( 'Norrsken Pagination', 'norrsken' ),
				'inline_style' => "
				:root .is-style-norrsken-pagination > *,
				.is-style-norrsken-pagination [class*=\"is-arrow-\"]:only-child {
					margin: 0;
				}

				.wp-block-query-pagination,
				.is-style-norrsken-pagination .wp-block-query-pagination-numbers {
					display: flex;
					flex-wrap: wrap;
					gap: .66em;
				}

				.is-style-norrsken-pagination > a,
				.is-style-norrsken-pagination .wp-block-query-pagination-numbers > * { 
					align-items: center;
					border: 1px solid var( --wp--preset--color--30 );
					border-radius: 50%;
					display: flex;
					height: 2em;
					justify-content: center;
					margin: 0;
					width: 2em;
				}

				.is-style-norrsken-pagination a:hover,
				.is-style-norrsken-pagination .wp-block-query-pagination-numbers .current {
					background: var( --wp--preset--color--30 );
				}",
			)
		);
		
	}
endif;
add_action( 'init', 'norrsken_block_styles' );
