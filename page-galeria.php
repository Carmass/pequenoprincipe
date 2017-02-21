<?php get_header(); ?>


<section class="content">
	<div class="container">
		<div class="row">
			<div class="text-center col-md-12" style="margin-top:30px">
				<div class='list-group gallery'>
					<?php
					$images = acf_photo_gallery('galeria_de_fotos', $post->ID);
					if( count($images) ):
						foreach($images as $image):
							$title = $image['title'];
						$caption = $image['content'];
						$full_image_url = $image['full_image_url'];
						// $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160);
						$thumbnail_image_url = acf_photo_gallery_resize_image($full_image_url, 320, 320);
						$url = $image['url'];
						$target = $image['target'];
						?>
						<div class="col-sm-6 col-xs-6 col-md-3 col-lg-3">
							<a class="fancybox thumbnail" rel="ligthbox" href="<?php echo $full_image_url; ?>">
								<img class="img-responsive" alt="<?php echo $title; ?>" src="<?php echo $thumbnail_image_url ?>" />
							</a>
						</div>
					<?php endforeach; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>