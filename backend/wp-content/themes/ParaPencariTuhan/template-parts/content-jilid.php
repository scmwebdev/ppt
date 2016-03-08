<div class="jilid" id="jilid-1">
	<h2 class="title">Jilid 1</h2>
	<div class="item row __spacepad">
<?php
	$args = array (
		'post_type' => 'post',
	    'category__and' => '9, 6',
	    'posts_per_page' => 4
	);

	$the_query = new WP_Query($args); ?>

	<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<?php $videoUrl = get_field('video-url'); ?>
	<?php $jilid = get_field('jilid'); ?>
		<div class="item-list">
			<div class="item-list-content __spacepad"><?php the_post_thumbnail(array('class' => 'img-responsive __fullwidth')); ?></div>
			<div class="item-list-name __spacepad"><?php the_title(); ?></div>
			<div class="more __right">
				<a href="<?php the_permalink(); ?>">
					<button type="button" class="btn btn-ppt">More</button>
				</a>
			</div>
		</div>
	<?php endwhile; ?>

<?php endif; ?>
<?php wp_reset_query(); ?>
	</div>
</div>



