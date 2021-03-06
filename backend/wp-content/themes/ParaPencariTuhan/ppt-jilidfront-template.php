<?php
/**
 * Template Name: ppt-jilid-front
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
				<h1>Jilid List</h1>
				<?php 
					$args = array (
						'child_of' => 28
					);
					$pages = get_pages($args);
					foreach ( $pages as $page ) {
						$title = apply_filters('get_the_title', $page->post_title); 
						$content = apply_filters('get_the_content', $page->post_content);
						$excerpt = apply_filters('the_execerpt', $page->post_excerpt);
						$pageId = apply_filters('get_the_ID', $page->ID);
				?>
				<div class="jilid-segment clearfix __spacepad">
					<?php  if ( has_post_thumbnail() ) { ?>
						<div class="jilid-segment-img col-sm-4">
							<?php 
								echo get_the_post_thumbnail($page->ID, 'video_thumb', array('class' => 'img-responsive'));
							?>
						</div>
					<?php } ?>
					<div class="jilid-segment-title col-sm-8">
						<h2 class="__nomargin"><?php echo $title; ?></h2>
					</div>
					<div class="jilid-segment-desc col-sm-8 __spacepad">
						<?php echo $excerpt.' ...'; ?>
					</div>
					<div class="jilid-segment-btn __right">
						<a href="<?php echo get_page_link($pageId); ?>">
							<button type="button" class="btn btn-ppt">Go to <?php echo $title; ?></button>
						</a>
					</div>
				</div>
				<hr>
				<?php } ?>
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
