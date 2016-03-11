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
		<div class="main-content">
			<div class="container">
			<div class="col-xs-12">
						<div class="filter" data-filter="all">Show All</div>
						<div class="filter" data-filter=".category-1">Category 1</div>
						<div class="filter" data-filter=".category-2">Category 2</div>

						<div id="Container">
							<div class="mix category-1" data-myorder="2"></div>
							<div class="mix category-2" data-myorder="4"></div>
							<div class="mix category-1" data-myorder="1"></div>
							<div class="mix category-2" data-myorder="8"></div>
						</div>
					</div>
				<div class="item row">
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
				?>
				
				<div class="item-list">
					<div class="item-list-pic">
						<?php the_post_thumbnail('video_thumb', array('class' => 'img-responsive')); ?>
					</div>
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
