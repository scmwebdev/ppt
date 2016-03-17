<h2 class="_visHidden">Banner Ads</h2>
<?php 
	$post_id = 109;
	$query = get_post($post_id); 
	$adsUrl = get_field('url', $post_id);
?>
<?php if (!wp_is_mobile()) { ?>
	<div class="banner_ads square">
		<a target="_blank" class="__block" href="<?php echo $adsUrl; ?>">
			<?php echo get_the_post_thumbnail( $query->ID, 'bannerads_square' ); ?>
		</a>
	</div>
	<div class="twitter--embed __spacepad">
	<a class="twitter-timeline" href="https://twitter.com/hashtag/TheDanceIcon2" data-widget-id="705335261517885440">#TheDanceIcon2 Tweets</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
<?php } ?>


