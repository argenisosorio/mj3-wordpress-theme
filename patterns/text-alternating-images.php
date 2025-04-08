<?php
/**
 * Title: Text with alternating images
 * Slug: twentytwentyfour/text-alternating-images
 * Categories: text, about
 * Viewport width: 1400
 * Description: A text section, then a two column section with text in one and image in another.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div
	class="wp-block-group alignfull"
	style="
		margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);
		padding-right:var(--wp--preset--spacing--50);
		padding-bottom:var(--wp--preset--spacing--50);
		padding-left:var(--wp--preset--spacing--50);
		border: ridge 1px none;
	"
>
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<h2 style="color: #425828;">
				<b>
					Contact Us
				</b>
			</h2>
		</div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-asterisk","fontSize":"medium","fontFamily":"body"} -->
				<h3
					class="
						wp-block-heading has-text-align-center
						has-body-font-family has-large-font-size
					"
					style="font-style:normal;font-weight:600"
				>
					M&J Boat and RV Repairs
				</h3>
				<!-- /wp:heading -->
				<ul style="line-height:1.75; list-style-type: none; margin-top: 30px">
					<!-- wp:list-item -->
					<li>
						<i class="fas fa-location"></i>	
						5309 Glen Rose hwy Granbury TX 76048
					</li>
					<!-- /wp:list-item -->
					<br>
					<!-- wp:list-item -->
					<li>
						<i class="fas fa-phone"></i>
						214-601-0574
					</li>
					<!-- /wp:list-item -->
					<br>
					<!-- wp:list-item -->
					<li>
						<i class="fas fa-phone"></i>
						682-381-7571
					</li>
					<!-- /wp:list-item -->
					<br>
					<!-- wp:list-item -->
					<li>
						<i class="fas fa-envelope"></i>
						mjoftexas@gmail.com
					</li>
					<!-- /wp:list-item -->
				</ul>
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-asterisk","fontSize":"medium","fontFamily":"body"} -->
				<h3
					class="
						wp-block-heading has-text-align-center
						has-body-font-family has-large-font-size
					"
					style="font-style:normal;font-weight:600"
				>
					M&J Tree Services
				</h3>
				<!-- /wp:heading -->
				<ul style="line-height:1.75; list-style-type: none; margin-top: 30px">
					<!-- wp:list-item -->
					<li>
						<i class="fas fa-location"></i>	
						5309 Glen Rose hwy Granbury TX 76048
					</li>
					<!-- /wp:list-item -->
					<br>
					<!-- wp:list-item -->
					<li>
						<i class="fas fa-phone"></i>
						214-601-0574
					</li>
					<!-- /wp:list-item -->
					<br>
					<!-- wp:list-item -->
					<li>
						<i class="fas fa-phone"></i>
						682-381-7571
					</li>
					<!-- /wp:list-item -->
					<br>
					<!-- wp:list-item -->
					<li>
						<i class="fas fa-envelope"></i>
						mjoftexas@gmail.com
					</li>
					<!-- /wp:list-item -->
				</ul>
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
