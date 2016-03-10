<div class="jilid" id="jilid-1">
	<h2 class="title">Jilid 1</h2>
	<div class="item row __spacepad">
		<?php
			$cat = get_field('category'); 
			$args = array (
				'post_type' => 'post',
			    'cat' => $cat,
			    'posts_per_page' => 4
			);

			$the_query = new WP_Query($args); ?>

			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php $videoUrl = get_field('video-url'); ?>
			<?php $jilid = get_field('jilid'); ?>
				<div class="item-list">
					<a href="<?php the_permalink(); ?>">
					<div class="item-list-content __spacepad"><?php the_post_thumbnail('video_thumb', array('class' => 'img-responsive __fullwidth')); ?></div>
					<div class="item-list-name __nospacemar"><h4 class><?php the_title(); ?></h4></div>
					</a>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</div>
<hr />


