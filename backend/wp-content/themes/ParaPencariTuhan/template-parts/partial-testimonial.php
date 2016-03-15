<?php
	$args = array (
		'post_type' => 'post',
	    'cat' => 3,
	    'posts_per_page' => 3,
	    'orderby' => 'ASC'
	);
	$the_query = new WP_Query($args); ?>

	<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

		$author = get_field('quote_author');
	?>
		  <div class="item-list">
			<div class="item-list-desc">
				<?php echo get_the_content() . ' - '. $author; ?>
			</div>
			
		</div>
		<?php endwhile; ?>
		
<?php endif; ?>
<?php wp_reset_postdata(); ?>