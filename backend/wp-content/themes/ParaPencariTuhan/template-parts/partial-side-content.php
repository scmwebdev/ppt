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