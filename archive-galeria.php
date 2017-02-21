<?php get_header(); ?>


<section class="content">
	<div class="container">
		<div class="row">
			<div class="text-center col-md-12" style="margin-top:30px;">
			<h2>Galeria de Fotos</h2>
				<?php
				$args = array( 'post_type' => 'galeria', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				
				<div class="col-md-3 col-sm-6 col-md-4">
					<div class="thumbnail">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<div class="caption">
							<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
							<!-- <p><a href="<?php the_permalink(); ?>" class="btn btn-success" role="button">Visualizar</a></p> -->
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>