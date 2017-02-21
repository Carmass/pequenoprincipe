	<section class="newsletter" id="newsletter">
		<div class="container-fluid">
			<div class="row">
				<div class="text-center col-md-12">
					<h2 class="text-center">Assine nossa lista de e-mail e fique por dentro dos eventos e novidades ;)</h2>
					<form class="form-inline">
						<div class="form-group">
							<input type="text" class="form-control" id="text" placeholder="Nome">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" placeholder="E-mail">
						</div>
						<button class="btn btn-success" type="submit" class="btn btn-default">Enviar</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="text-center col-md-12">
					Planeta Pequeno Príncipe - Copyright &copy - <?= date('Y'); ?> - Desenvolvido pela<a href="http://www.miraimidia.com" target="_blank">Miraimidia</a>
				</div>
			</div>
		</div>
	</footer>
	<div class="scrolltop" style="display:none;"><i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i></div>
</main>
<?php wp_footer(); ?>
</body>
</html>