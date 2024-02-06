<?php
/**
 * Title: 404
 * Slug: norrsken/hidden-404
 * Inserter: no
 */
?>

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"heading-3"} -->
<h1 class="wp-block-heading has-text-align-center has-heading-3-font-size" id="page-not-found"><?php echo esc_attr_x( 'Error 404', '404 page title', 'norrsken' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity" />
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_attr_x( 'The page could not be found. Return to the front page or try the search form below.', '404 page text', 'norrsken' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"280px"}} -->
<div class="wp-block-group">
	<!-- wp:pattern {"slug":"norrsken/hidden-search"} /-->
</div>
<!-- /wp:group -->