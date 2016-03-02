<?php $videoUrl = get_field('video-url'); ?>
<div class="video-item">
	<div class="item-list">
		<div class="item-list-name">
			<div class="container">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
		<div class="item-list-video">
			<div class="container">
				<?php echo $videoUrl ?>
			</div>
		</div>
		<div class="item-list-content">
			<div class="container">
				<h2>Sinopsis</h2>
				<div class="__spacepad"><?php the_content(); ?></div>
			</div>
		</div>
	</div>
</div>