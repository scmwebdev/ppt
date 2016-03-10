<?php
/**
 * Template Name: ppt-jilid-ver2
 *
 * @package ParaPencariTuhan
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="mainbanner">
			<?php responsiveBanner(); ?>	
		</div>
		<div class="main-content">
			<div class="container">
			<div class="col-sm-4">
				menu
			</div>
				<div class="col-sm-8">
					<?php get_template_part('template-parts/content', 'jilid') ?>
				</div>
			</div>
		</div>
		<div class="ads">
			<div class="container">
				<?php get_template_part('template-parts/content', 'banner-ads') ?>
			</div>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
