<h3 class="_visHidden">Banner Ads</h3>

<?php
	$args = array (
		'post_type' => 'post',
	    'cat' => 7,
	    'posts_per_page' => 1
	);
	$the_query = new WP_Query($args); ?>

	<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		  <div class="banner_ads square">
		  	<?php the_content(); ?>
		  </div>
		<?php endwhile;?>
		
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<a class="twitter-timeline" href="https://twitter.com/hashtag/TheDanceIcon2" data-widget-id="705335261517885440">#TheDanceIcon2 Tweets</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>