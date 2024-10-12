<?php
/**
 * Title: Loop No Results
 * Slug: norrsken/hidden-loop-no-results
 * Inserter: no
 */
?>

<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-text-align-center" style="margin-top:0;margin-bottom:0"><?php echo esc_attr_x( 'No results found.', 'Loop: No results found text', 'norrsken' ); ?></p>
<!-- /wp:paragraph -->