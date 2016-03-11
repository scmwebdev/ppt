<?php
$args = array (
	'post_type' => 'post',
    'cat' => '9,10,11,12,13,14,15,16,17',
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

<div class="col-xs-12">
	<div class="filter" data-filter="all">Show All</div>
	<div class="filter" data-filter=".category-1">Category 1</div>
	<div class="filter" data-filter=".category-2">Category 2</div>

<div id="Container">
	<div class="mix category-1" data-myorder="2"></div>
	<div class="mix category-2" data-myorder="4"></div>
	<div class="mix category-1" data-myorder="1"></div>
	<div class="mix category-2" data-myorder="8"></div>
</div>
</div>
