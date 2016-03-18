<?php
/**
 * Template Name: ppt-jilid-content
 *
 * @package ParaPencariTuhan
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="mainbanner">
			<?php 
				responsiveBanner(); 
			?>	
		</div>
		<div class="main-content clearfix">
			<div class="container">
				<?php get_template_part('template-parts/content', 'jilid') ?>
			</div>
		</div>
		<div class="ads clearfix">
			<div class="container">
				<?php get_template_part('template-parts/content', 'banner-ads') ?>
			</div>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
