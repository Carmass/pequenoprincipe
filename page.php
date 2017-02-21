<?php get_header(); ?>


<section class="content">
	<div class="container">
		<div class="row">
			<div class="text-center col-md-12">
				<?php 

				if (have_posts()) {
					while (have_posts()) {
						the_post();
						the_content();
					}
				}

				?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>