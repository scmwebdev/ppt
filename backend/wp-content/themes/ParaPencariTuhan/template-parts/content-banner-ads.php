<?php if (!wp_is_mobile()) { ?>
	<div class="banner_ads long __left">
		<?php
			$post_id = 92;
			$query = get_post($post_id); 
			$adsUrl = get_field('url', $post_id);
		?>
		<a target="_blank" class="__block" href="<?php echo $adsUrl; ?>">
		<?php 
			echo get_the_post_thumbnail( $query->ID, 'bannerads_square_big' ); 
		?>
		</a>

	</div>
	<div class="banner_ads bottom __right">
		<?php
			$post_id = 95;
			$query = get_post($post_id);
			$adsUrl = get_field('url', $post_id);
		?>
		<a target="_blank" class="__block" href="<?php echo $adsUrl; ?>">
		<?php echo get_the_post_thumbnail( $query->ID, 'bannerads_square' ); ?>
		</a>
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

		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
			$adsUrl = get_field('url');
			
		?>
			  <div class="item-list">
			  	<a href="<?php echo $adsUrl; ?>">
				<div class="item-list-desc"><?php the_post_thumbnail('bannerads_square', array('class' => 'img-responsive __fullwidth')); ?>
				</div>
				</a>
			</div>
			<?php endwhile; ?>
			
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
	</div>
<?php } ?>
