<?php
/**
 * Template Name: ppt-frontpage
 *
 * @package ParaPencariTuhan
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="mainbanner">
			<?php responsiveBanner(); ?>	
		</div>
		<div class="testimonial">
			<div class="container">
				<div class="item">
					<?php get_template_part( 'template-parts/partial', 'testimonial' ); ?>
				</div>
			</div>
		</div>
		<div class="main-content">
			<div class="container">
				<div class="col-xs-12 <?php isItHome('col-sm-9', 'col-xs-12') ?>">
					<div class="video">
						<h2 class="_parent title _visHidden">Video</h2>
						<div class="item row">
							<?php get_template_part( 'template-parts/partial', 'video' ); ?>
						</div>
					</div>
					<div class="artikel">
						<h2 class="_parent title _visHidden">artikel</h2>
						<div class="item row">
							<?php get_template_part( 'template-parts/partial', 'artikel' ); ?>
						</div>
					</div>
				</div>
				<?php if (is_front_page()) { ?>
					<aside class="col-xs-12 col-sm-3">
						<?php get_template_part('template-parts/partial', 'side-content') ?>
					</aside>
				<?php } ?>
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
