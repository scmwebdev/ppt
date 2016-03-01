<?php
/**
 * Template Name: ppt-generic
 *
 * @package ParaPencariTuhan
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php //the_post_thumbnail('mainBanner', array( 'class' => 'img-responsive __fullwidth')); ?>
		<?php responsiveBanner(); ?>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
