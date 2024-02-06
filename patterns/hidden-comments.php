<?php
/**
 * Title: Comments
 * Slug: norrsken/hidden-comments
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:comments-title {"showPostTitle":false,"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","className":"is-style-norrsken-title-separator-right","fontSize":"medium"} /-->

	<!-- wp:comment-template -->
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-group"
		style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"1.25em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:avatar {"size":56} /-->

			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:comment-author-name /-->

				<!-- wp:comment-date /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:comment-content /-->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:comment-edit-link /-->

			<!-- wp:comment-reply-link /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- /wp:comment-template -->
</div>
<!-- /wp:group -->