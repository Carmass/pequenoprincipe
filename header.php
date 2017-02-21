<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('title'); ?></title>
	<link rel="icon" href="<?= get_template_directory_uri(); ?>/assets/images/planeta_pequeno_principe_favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/lib/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/lib/owl.carousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/lib/owl.carousel/dist/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/lib/fancybox/source/jquery.fancybox.css?v=2.1.6">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
	<script src="<?= get_template_directory_uri(); ?>/lib/jquery/dist/jquery.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/lib/owl.carousel/dist/owl.carousel.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/assets/js/script.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/lib/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/lib/fancybox/source/jquery.fancybox.pack.js?v=2.1.6"></script>
	<?php wp_head(); ?>
</head>
<body>
	<main>
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="menu-mobile">
						<div class="text-center col-md-12">
							<img class="img-responsive" style="margin: 0 auto;margin-top:20px;" src="<?= get_template_directory_uri(); ?>/assets/images/planeta_pequeno_principe_logo-admin.png" width="80px">
						</div>
						<div class="col-md-12">
							<?php 
							$args = array(
								'theme_location' => 'header-menu',
								);

							wp_nav_menu( $args );
							?>
						</div>
						<span class="mobile-close">
							<i class="fa fa-times fa-2x" aria-hidden="true"></i>
						</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-3">
							<a href="<?php bloginfo('url'); ?>">
								<div class="pull-left logo">
									<h1>Coleção Planeta Pequeno Príncipe</h1>
								</div>
							</a>
						</div>
						<div class="icone-mobile pull-right visible-xs visible-sm col-md-9">
							<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
						</div>
						<div class="menu-inline hidden-sm hidden-xs col-md-6">
							<nav class="text-center">
								<?php 
								$args = array(
									'theme_location' => 'header-menu',
									);

								wp_nav_menu( $args );
								?>
							</nav>
						</div>
						<div class="hidden-sm hidden-xs col-md-3 pull-right">
							<div class="redes pull-right">
								<a href="https://www.facebook.com/planetapequenoprincipeoficial/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
								<a href="https://www.instagram.com/planetapequenoprincipe/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
								<a href="https://plus.google.com/106573830792522480833" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a>
								<a href="https://www.youtube.com/channel/UCY8wt2qZYXtjMKGJabvBV9w" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>