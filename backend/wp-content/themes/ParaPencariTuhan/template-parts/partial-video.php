<?php
$args = array (
	'post_type' => 'post',
    'cat' => 6,
    'posts_per_page' => 4
);
$the_query = new WP_Query($args); ?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<div class="item-list col-xs-12 col-sm-6">
	<a href="<?php the_permalink(); ?>">
		<div class="item-list-desc"><?php the_post_thumbnail('video_thumb', array('class' => 'img-responsive')); ?></div>
		<div class="item-list-name __spacepad"><?php the_title(); ?></div>
	</a>
</div>

<?php endwhile; ?>

<?php endif; ?>
<?php wp_reset_postdata(); ?>