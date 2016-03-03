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
				<div class="item">
				<?php
					$args = array (
						'post_type' => 'post',
					    'cat' => 3,
					    'posts_per_page' => 3,
					    'orderby' => 'ASC'
					);
					$the_query = new WP_Query($args); ?>

					<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						  <?php get_template_part( 'template-parts/partial', 'testimonial' ); ?>
						<?php endwhile; ?>
						
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		<div class="main-content">
			<div class="container">
				<div class="col-xs-12 <?php isItHome('col-sm-9', 'col-xs-12') ?>">
					<h3>Video</h3>
					<div class="item row">
			 		<?php
						$args = array (
							'post_type' => 'post',
						    'cat' => 6,
						    'posts_per_page' => 2
						);
						$the_query = new WP_Query($args); ?>

						<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							  <?php get_template_part( 'template-parts/partial', 'video' ); ?>
							<?php endwhile;?>
							
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
					</div>
					<div class="more __right">
						<a href="<?php echo site_url().'/video' ?>">
							<button type="button" class="btn btn-ppt">More</button>
						</a>
					</div>
				</div>
				<?php if (is_front_page()) { ?>
					<aside class="col-xs-12 col-sm-3">
						<?php get_template_part('template-parts/partial', 'side-content') ?>
					</aside>
				<?php } ?>
				

			</div>
		</div>

	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
