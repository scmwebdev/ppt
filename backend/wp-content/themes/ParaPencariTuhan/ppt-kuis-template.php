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
		<!-- <div class="social-media __spacepad">
			<div class="container">
				<div class="__right social-media-item" id="social-media-twitter">
					<a href="https://twitter.com/SCTV_" class="twitter-follow-button" data-show-count="false">Follow @SCTV_</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
				<div class="fb-follow __right social-media-item" id="social-media-fb" data-href="https://www.facebook.com/Surya.Citra.TV/" data-layout="button" data-show-faces="true"></div>
			</div>
		</div> -->
		<div class="ads __spacepad">
			<div class="container">
				<?php get_template_part('template-parts/content', 'banner-ads') ?>
			</div>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
