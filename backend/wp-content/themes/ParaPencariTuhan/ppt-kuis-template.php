<?php
/**
 * Template Name: ppt-kuis
 *
 * @package ParaPencariTuhan
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="mainbanner">
			<?php responsiveBanner(); ?>
		</div>
		<div class="main-content" id="<?php echo strtolower(get_the_title()) ?>">
			<div class="container">

				<?php get_template_part('template-parts/kuis', get_the_slug() )?>

			</div>
		</div>
		<div class="ads __spacepad">
			<div class="container">
				<?php get_template_part('template-parts/content', 'banner-ads') ?>
			</div>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
