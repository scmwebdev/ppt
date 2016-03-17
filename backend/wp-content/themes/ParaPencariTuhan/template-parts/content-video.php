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

				<?php
					$thecontent = get_the_content();
					if(!empty($thecontent)) { ?>
						<h2>Sinopsis</h2>
				    	<?php the_content(); ?>

				<?php } ?> 
			</div>
		</div>
	</div>
</div>
<script src="//cdn0-a.production.vidio.static6.com/assets/javascripts/vidio-embed.js"></script>