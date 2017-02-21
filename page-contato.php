<?php get_header(); ?>


<section class="content">
	<div class="container">
		<div class="row">
			<div class="text-center col-md-12">
				<h2>Contato</h2>
				<div class="col-md-6">
					<p>Ei... Se você tem uma dúvida ou sugestão entre em contato conosco. O que você tem a nos dizer será sempre bem-vindo!</p>
					<figure>
						<img class="img-responsive thumbnail" src="http://www.clickgratis.com.br/fotos-imagens/foto/aHR0cDovL2FydGV4cG9uZXd5b3JrLmNvbS93cC1jb250ZW50L3VwbG9hZHMvMjAxNi8wMS9GT1RPLVNPTE9fRmVhdHVyZS5qcGc=.jpg">
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