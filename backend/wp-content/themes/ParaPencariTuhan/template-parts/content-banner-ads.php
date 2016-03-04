<?php if (!wp_is_mobile()) { ?>
	<div class="banner_ads long __left">
		<?php
			$post_id = 92;
			$query = get_post($post_id); 
		?>
		<?php echo get_the_post_thumbnail( $query->ID, 'bannerads_square_big' ); ?>
	</div>
	<div class="banner_ads bottom __right">
		<?php
			$post_id = 95;
			$query = get_post($post_id); 
		?>
		<?php echo get_the_post_thumbnail( $query->ID, 'bannerads_square' ); ?>
	</div>
<?php } else { ?>
	<div class="ads-mobile">
	<?php
		$args = array (
			'post_type' => 'post',
		    'cat' => 7,
		    'posts_per_page' => 3,
		    'orderby' => 'ASC'
		);
		$the_query = new WP_Query($args); ?>

		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			  <div class="item-list">
				<div class="item-list-desc"><?php the_post_thumbnail('bannerads_square', array('class' => 'img-responsive __fullwidth')); ?></div>
			</div>
			<?php endwhile; ?>
			
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
	</div>
<?php } ?>
