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
			'calendar', 
			'categories', 
			'paragraph', 
			'post-comments-form',
			'post-terms', 
			'pullquote', 
			'quote',
			'search',
			'separator',
			'table'
		) );

		foreach( $core_block_styles as $block_name ) {
			wp_enqueue_block_style(
				'core/' . $block_name,
				array(
					'handle' => 'norrsken-' . $block_name . '-style',
					'src'    => get_theme_file_uri( 'assets/css/blocks/' . $block_name . '.css' ),
					'ver'    => wp_get_theme( 'norrsken' )->get( 'Version' ),
					'path'   => get_theme_file_path( 'assets/css/' . $block_name . '.css' ),
				)
			);
		}

		/* REGISTER STYLES FOR SPECIFIC BLOCK STYLES */

		foreach( array(  'comments-title', 'post-comments-form' ) as $handle ) {
			wp_enqueue_block_style(
				'core/' . $handle,
				array(
					'handle'	=> 'norrsken-title-separator-right',
					'src'		=> get_theme_file_uri( 'assets/css/block-styles/norrsken-title-separator-right.css' ),
					'ver'		=> wp_get_theme( 'norrsken' )->get( 'Version' ),
					'path'		=> get_theme_file_path( 'assets/css/block-styles/norrsken-title-separator-right.css' ),
				)
			);
		}

		foreach( array(  'post-navigation-link', 'query-pagination' ) as $handle ) {
			wp_enqueue_block_style(
				'core/' . $handle,
				array(
					'handle'	=> 'norrsken-pagination-post-navigation-link',
					'src'		=> get_theme_file_uri( 'assets/css/block-styles/norrsken-pagination-post-navigation-link.css' ),
					'ver'		=> wp_get_theme( 'norrsken' )->get( 'Version' ),
					'path'		=> get_theme_file_path( 'assets/css/block-styles/norrsken-pagination-post-navigation-link.css' ),
				)
			);
		}

		wp_enqueue_block_style(
			'core/site-title',
			array(
				'handle'	=> 'norrsken-hide-on-home',
				'src'		=> get_theme_file_uri( 'assets/css/block-styles/norrsken-hide-on-home.css' ),
				'ver'		=> wp_get_theme( 'norrsken' )->get( 'Version' ),
				'path'		=> get_theme_file_path( 'assets/css/block-styles/norrsken-hide-on-home.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/post-terms',
			array(
				'handle'	=> 'norrsken-post-terms',
				'src'		=> get_theme_file_uri( 'assets/css/block-styles/norrsken-post-terms.css' ),
				'ver'		=> wp_get_theme( 'norrsken' )->get( 'Version' ),
				'path'		=> get_theme_file_path( 'assets/css/block-styles/norrsken-post-terms.css' ),
			)
		);

		/* REGISTER BLOCK STYLES */

		register_block_style(
			'core/comments-title',
			array(
				'is_default'	=> true,
				'name'			=> 'norrsken-title-separator-right',
				'label'			=> __( 'Separator to the right of the title', 'norrsken' ),
				'style_handle'	=> 'norrsken-title-separator-right'
			)
		);

		register_block_style(
			'core/post-comments-form',
			array(
				'is_default'	=> true,
				'name'			=> 'norrsken-title-separator-right',
				'label'			=> __( 'Separator to the right of the title', 'norrsken' ),
				'style_handle'	=> 'norrsken-title-separator-right'
			)
		);

		register_block_style(
			'core/post-navigation-link',
			array(
				'is_default'	=> true,
				'name'			=> 'norrsken-post-navigation-link',
				'label'			=> __( 'Norrsken', 'norrsken' ),
				'style_handle'	=> 'norrsken-pagination-post-navigation-link'
			)
		);

		register_block_style(
			'core/post-terms',
			array(
				'is_default'	=> true,
				'name'			=> 'norrsken-post-terms',
				'label'			=> __( 'Norrsken', 'steve-jang' ),
				'style_handle'	=> 'norrsken-post-terms'
			)
		);

		register_block_style(
			'core/query-pagination',
			array(
				'is_default'	=> true,
				'name'			=> 'norrsken-pagination',
				'label'			=> __( 'Norrsken', 'norrsken' ),
				'style_handle'	=> 'norrsken-pagination-post-navigation-link'
			)
		);

		register_block_style(
			'core/site-title',
			array(
				'is_default'	=> false,
				'name'			=> 'norrsken-hide-on-home',
				'label'			=> __( 'Hide on the homepage', 'norrsken' ),
				'style_handle'	=> 'norrsken-hide-on-home'
			)
		);
		
	}
endif;
add_action( 'init', 'norrsken_block_styles' );
