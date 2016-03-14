<?php
/**
 * Template Name: ppt-video
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
				<div class="col-xs-12 __nopadding" id="the_filter">
					<div class="filter col-xs-12 col-sm-4 __spacepad" data-filter="all">Show All</div>
					<div class="filter col-xs-12 col-sm-4 __spacepad" data-filter=".vid_testimonial">Testimonial</div>
					<div class="filter col-xs-12 col-sm-4 __spacepad" data-filter=".vid_regular">Lainnya</div>
				</div>
				<div class="item row __spacepad __spacemar col-xs-12">
				<?php
				
					//example of args
					$args = array(
						'post_type' => 'post',
						'cat' => 6,
					);
				
					//create a new quest with the 
					$query = new WP_Query($args); 
				
					//create the WP loop
					if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

					$filter = get_field('filter');
				?>
				
				<div class="item-list mix <?php echo $filter; ?>">
					<a href="<?php the_permalink(); ?>">
					<div class="item-list-pic">
						<?php the_post_thumbnail('video_thumb', array('class' => 'img-responsive')); ?>
					</div>
					</a>
				</div>
					
				
				
				<?php 
						endwhile; //end of while loop
					endif; //end of if statement
					wp_reset_postdata(); //reset the query so we can create a new one
				?> 
				</div>
			</div>
		</div>
<!-- 		<div class="ads __spacepad">
			<div class="container">
				<?php get_template_part('template-parts/content', 'banner-ads') ?>
			</div>
		</div> -->
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
