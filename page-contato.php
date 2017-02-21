<?php get_header(); ?>


<section class="content">
	<div class="container">
		<div class="row">
			<div class="text-center col-md-12">
				<h2>Contato</h2>
				<div class="col-md-6">
					<p>Ei... Se você tem uma dúvida ou sugestão entre em contato conosco. O que você tem a nos dizer será sempre bem-vindo!</p>
					<figure>
						<img class="img-responsive thumbnail" style="margin: 0 auto;" src="http://placehold.it/400x400">
					</figure>
				</div>
				<div class="col-md-6">
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
	</div>
</section>

<?php get_footer(); ?>