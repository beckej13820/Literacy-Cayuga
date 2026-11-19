<?php
/**
 * Title: About Us
 * Slug: literacy-volunteers/about-us
 * Categories: about, featured
 * Keywords: about, media, image, social, yellow
 * Viewport Width: 1400
 * Description: Yellow section (Style 3) with an image on the left and an eyebrow, heading, text, social links and two buttons on the right.
 *
 * @package literacy-volunteers
 */

?>
<!-- wp:group {"metadata":{"name":"About Us"},"align":"full","className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-3" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:media-text {"align":"wide","mediaType":"image","mediaWidth":45,"verticalAlignment":"center","metadata":{"name":"About Media and Text"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:45% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about-placeholder.png" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"metadata":{"name":"About Eyebrow"},"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">About us</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"metadata":{"name":"About Heading"},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Neighbors helping neighbors learn.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"About Text"}} -->
<p>For decades, our trained volunteers have helped adults in our community improve their reading, writing and English skills. Tutoring is free, confidential and built around each learner’s goals, whether that is reading to a child, earning a diploma or getting a better job.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"About Text 2"}} -->
<p>Every learner is matched with a tutor who meets with them each week, and every tutor receives training and ongoing support from our staff.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#232323","size":"has-normal-icon-size","metadata":{"name":"About Social Links"},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons {"metadata":{"name":"About Buttons"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/about/">Learn more</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/volunteer/">Get involved</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->
