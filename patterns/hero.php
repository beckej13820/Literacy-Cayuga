<?php
/**
 * Title: Hero
 * Slug: literacy-volunteers/hero
 * Categories: banner, featured
 * Keywords: hero, banner, cover, intro
 * Viewport Width: 1400
 * Description: Full-width photo with a translucent dark green panel in the center holding a large heading, short intro text and two buttons.
 *
 * @package literacy-volunteers
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hero-placeholder.webp","dimRatio":0,"minHeight":640,"minHeightUnit":"px","metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50);min-height:640px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hero-placeholder.webp" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Hero Panel"},"className":"is-style-section-2","style":{"color":{"background":"color-mix(in srgb, var(--wp--preset--color--accent-2) 80%, transparent)"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-section-2 has-background" style="background-color:color-mix(in srgb, var(--wp--preset--color--accent-2) 80%, transparent);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"metadata":{"name":"Hero Heading"},"style":{"typography":{"textAlign":"center"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size">Reading changes everything.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"Hero Intro"},"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center">Free, one-on-one tutoring for adults who want to read, write and speak English with confidence, powered by trained local volunteers.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"metadata":{"name":"Hero Buttons"},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/about/">About Us</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/donate/">Donate Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
