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
						$title = $page->post_title;
						echo $title;
					}
				 ?>
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
