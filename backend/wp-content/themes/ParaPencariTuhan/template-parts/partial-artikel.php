<?php
$args = array (
	'post_type' => 'post',
    'cat' => 8,
    'posts_per_page' => 4
);
$the_query = new WP_Query($args); ?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<div class="item-list col-xs-12 col-sm-6">
	
		<div class="item-list-name __spacepad"><?php the_title(); ?></div>
		<div class="item-list-desc"><?php the_excerpt(); ?></div>
		<div class="more __right">
			<a href="<?php the_permalink(); ?>">
				<button type="button" class="btn btn-ppt">More</button>
			</a>
		</div>
</div>

<?php endwhile; ?>

<?php endif; ?>
<?php wp_reset_postdata(); ?>