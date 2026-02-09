<?php
/**
 * Title: front-page
 * Slug: poe-portfolio-child/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","align":"full","className":"site-header"} /-->

<!-- wp:group {"tagName":"main"} -->
<main class="wp-block-group"><!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"inherit":false,"contentSize":""}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"1.5em"}}}} -->
<h1 class="wp-block-heading has-text-align-left has-link-color" id="poe-portfolio-child-is-a-minimal-dark-and-free-block-theme-for-anyone-who-needs-a-portfolio-more" style="margin-top:1.5em"><?php /* Translators: 1. is a 'br' HTML element, 2. is the start of a 'a' HTML element, 3. is the end of a 'a' HTML element, 4. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'This can be used to introduce yourself in a short blurb.%1$s		 %2$sLearn More →%3$s%4$s	', 'poe-portfolio-child' ), '<br>', '<a href="' . esc_url( '/about' ) . '">', '</a>', '<br>' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/background.jpg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:pullquote {"textAlign":"left","textColor":"primary","fontSize":"heading-3"} -->
<figure class="wp-block-pullquote has-text-align-left has-primary-color has-text-color has-heading-3-font-size"><blockquote><p><?php esc_html_e('“Testimonial quote here”', 'poe-portfolio-child');?></p></blockquote></figure>
<!-- /wp:pullquote -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1em"}}}} -->
<div class="wp-block-group" style="padding-top:1em"><!-- wp:paragraph {"textColor":"foreground","fontSize":"heading-6"} -->
<p class="has-foreground-color has-text-color has-heading-6-font-size"><?php esc_html_e('Person\'s Name', 'poe-portfolio-child');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}}},"backgroundColor":"quaternary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-quaternary-background-color has-background" style="padding-top:64px;padding-bottom:64px"><!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"64px"}}}} -->
<h4 class="wp-block-heading" id="our-process" style="margin-bottom:64px"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Our Process%1$s(You can remove if you want.)', 'poe-portfolio-child' ), '<br>' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"tertiary"} -->
<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"8%"} -->
<div class="wp-block-column" style="flex-basis:8%"><!-- wp:heading {"level":4,"textColor":"primary"} -->
<h4 class="wp-block-heading has-primary-color has-text-color" id="1"><?php esc_html_e('1.', 'poe-portfolio-child');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading" id="explore"><?php esc_html_e('Explore', 'poe-portfolio-child');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"tertiary"} -->
<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"8%"} -->
<div class="wp-block-column" style="flex-basis:8%"><!-- wp:heading {"level":4,"textColor":"primary"} -->
<h4 class="wp-block-heading has-primary-color has-text-color" id="2"><?php esc_html_e('2.', 'poe-portfolio-child');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading" id="execute"><?php esc_html_e('Execute', 'poe-portfolio-child');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"tertiary"} -->
<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"8%"} -->
<div class="wp-block-column" style="flex-basis:8%"><!-- wp:heading {"level":4,"textColor":"primary"} -->
<h4 class="wp-block-heading has-primary-color has-text-color" id="3"><?php esc_html_e('3.', 'poe-portfolio-child');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading" id="evaluate"><?php esc_html_e('Evaluate', 'poe-portfolio-child');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"tertiary"} -->
<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"32px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:32px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading" id="features"><?php esc_html_e('What I Can Do', 'poe-portfolio-child');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
<p><?php esc_html_e('Learn what you can expect from me.', 'poe-portfolio-child');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"backgroundColor":"quaternary"} -->
<div class="wp-block-column has-quaternary-background-color has-background"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"linkDestination":"none"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/feature-1.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"quaternary"} -->
<div class="wp-block-group has-quaternary-background-color has-background" style="margin-top:0px;margin-bottom:0px"><!-- wp:heading {"level":6,"textColor":"primary"} -->
<h6 class="wp-block-heading has-primary-color has-text-color" id="clean-design"><?php esc_html_e('Trait #1', 'poe-portfolio-child');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('What do you want to convey to others what you can do?', 'poe-portfolio-child');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"backgroundColor":"quaternary"} -->
<div class="wp-block-column has-quaternary-background-color has-background"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"linkDestination":"none"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/feature-2.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"quaternary"} -->
<div class="wp-block-group has-quaternary-background-color has-background" style="margin-top:0px;margin-bottom:0px"><!-- wp:heading {"level":6,"textColor":"primary"} -->
<h6 class="wp-block-heading has-primary-color has-text-color" id="full-site-editing"><?php esc_html_e('Trait #2', 'poe-portfolio-child');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('What do you want to convey to others what you can do?', 'poe-portfolio-child');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"backgroundColor":"quaternary"} -->
<div class="wp-block-column has-quaternary-background-color has-background"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"linkDestination":"none"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/feature-3.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"quaternary"} -->
<div class="wp-block-group has-quaternary-background-color has-background" style="margin-top:0px;margin-bottom:0px"><!-- wp:heading {"level":6,"textColor":"primary"} -->
<h6 class="wp-block-heading has-primary-color has-text-color" id="global-styles"><?php esc_html_e('Trait #3', 'poe-portfolio-child');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('What do you want to convey to others what you can do?', 'poe-portfolio-child');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:separator {"className":"is-style-wide","backgroundColor":"tertiary"} -->
<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"32px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:32px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading" id="our-clients"><?php esc_html_e('Projects', 'poe-portfolio-child');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Replace the placeholders with images/your own data%1$s(Can simply just be heading text if you want)', 'poe-portfolio-child' ), '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:gallery {"columns":3,"imageCrop":false,"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-3"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/background.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/background.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/background.jpg" alt=""/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:64px;padding-bottom:64px"><!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading" id="about"><?php esc_html_e('About', 'poe-portfolio-child');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1em"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"heading-4"} -->
<p class="has-heading-4-font-size"><?php esc_html_e('Use this area to add a longer introduction to yourself.', 'poe-portfolio-child');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"heading-4"} -->
<p class="has-heading-4-font-size"><?php esc_html_e('Use this area to continue your longer introduction.', 'poe-portfolio-child');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"blockGap":"1.5em"}},"fontSize":"heading-4","layout":{"type":"flex"}} -->
<div class="wp-block-group has-link-color has-heading-4-font-size"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sMore →%2$s', 'poe-portfolio-child' ), '<a href>', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sContact →%2$s', 'poe-portfolio-child' ), '<a href>', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full","className":"site-footer"} /-->