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
		<?php 
			if ( is_front_page() ) { 
				// set up or arguments for our custom query
				$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
				$query_args = array(
					'post_type' => 'post',
					'category_name' => 'testimonial'
					'posts_per_page' => 5,
					'paged' => $paged
				);
				// create a new instance of WP_Query
				$the_query = new WP_Query( $query_args );
			?>
			<div class="testimonial">
				<div class="container">
					<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
			  			<?php get_template_part( 'template-parts/partial', 'testimonial' ); ?>
					<?php endwhile; ?>
				</div>
			</div>
			<?php } ?>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
