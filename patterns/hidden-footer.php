<?php
/**
 * Title: Footer
 * Slug: norrsken/hidden-footer
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"
	style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:separator -->
	<hr class="wp-block-separator has-alpha-channel-opacity" />
	<!-- /wp:separator -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":".6em"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
		<div class="wp-block-group"><!-- wp:paragraph -->
			<p>© <?php echo date( 'Y' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","className":"theme-author-credit"} -->
		<p class="has-text-align-center theme-author-credit has-contrast-2-color has-text-color has-link-color"><?php
			/* Translators: Theme author link. */
			$theme_author_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'norrsken' ) ) . '" rel="nofollow">Anders Norén</a>';
			echo sprintf(
				/* Translators: Theme by Anders Norén */
				esc_html__( 'Theme by %1$s', 'norrsken' ),
				$theme_author_link
			);
			?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->