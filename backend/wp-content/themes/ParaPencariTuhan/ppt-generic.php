<?php
/**
 * Template Name: ppt-generic
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
			<?php
				$args = array (
					'post_type' => 'post',
				    'category_name' => 'testimonial',
				    'posts_per_page' => 1
				);
				$the_query = new WP_Query($args); ?>

				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					  <?php get_template_part( 'template-parts/partial', 'testimonial' ); ?>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				<?php endif; ?>
			</div>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
