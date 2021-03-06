<div class="jilid" id="<?php the_title(); ?>">
	<h1>Para Pencari Tuhan - <?php the_title(); ?> </h1>
	<hr>
	<h2 class="title">Sinopsis</h2>
	<p class="desc"><?php the_content(); ?></p>
	<h2 class="title">Video List</h2>
	<div class="item row __spacepad">
		<?php
			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$cat = get_field('category'); 
			$args = array (
				'post_type' => 'post',
			    'cat' => $cat,
			    'posts_per_page' => 15,
			    'orderby' => 'title',
			    'order' => 'ASC',
			    'paged' => $paged
			);
			$the_query = new WP_Query($args); ?>

			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php $videoUrl = get_field('video-url'); ?>
			<?php $jilid = get_field('jilid'); ?>
				<div class="item-list col-xs-12 col-sm-4">
					<a href="<?php the_permalink(); ?>">
					<div class="item-list-content __spacepad"><?php the_post_thumbnail('video_thumb', array('class' => 'img-responsive __fullwidth')); ?></div>
					<div class="item-list-name __nospacemar"><h4 class><?php the_title(); ?></h4></div>
					</a>
				</div>
			<?php endwhile; ?>
				<?php
			      if (function_exists(custom_pagination)) {
			        custom_pagination($the_query->max_num_pages,"",$paged);
			      } else {
			      	echo 'function does not exist!';
			      }
			    ?>
				<?php else: ?>
			  <article>
			    <h1>Sorry...</h1>
			    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			  </article>

		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</div>
<hr />


