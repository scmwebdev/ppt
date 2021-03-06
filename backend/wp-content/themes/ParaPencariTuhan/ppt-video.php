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
				<div class="item __spacepad __spacemar col-xs-12">
				<?php
					  // set up or arguments for our custom query
					  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					  $parent_title = strtolower(get_the_title($post->post_parent));
					  $title = strtolower(get_the_title());
					  $query_args = array(
					    'post_type' => 'post',
					    'cat' => 6,
					    'posts_per_page' => 15,
					    'paged' => $paged
					  );
					  // create a new instance of WP_Query
					  $the_query = new WP_Query( $query_args );
					?>

					<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop 
					$filter = get_field('filter');
					?>
						  <div class="item-list mix col-xs-12 col-sm-4 <?php echo $filter; ?>">
						<a href="<?php the_permalink(); ?>">
						<div class="item-list-pic">
							<?php the_post_thumbnail('video_thumb', array('class' => 'img-responsive')); ?>
						</div>
						<div class="item-list-title __spacepad">
							<?php the_title(); ?>
						</div>
						</a>
					</div>
					<?php endwhile; ?>

					<?php
				      if (function_exists(custom_pagination)) {
				        custom_pagination($the_query->max_num_pages,"",$paged);
				      } else {
				      	echo 'function does not exist!';
				      }
				    ?>

					<?php else: ?>
					  <article>
					    <h1>Sorry...</h1>
					    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					  </article>
					<?php endif; ?>
				</div>
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
