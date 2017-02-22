<?php get_header(); ?>
<div>
	<div class="container-fluid">
		<div class="row">
			<div class="banner col-md-12"></div>
		</div>
	</div>
</div>
<aside class="cta">
	<div class="container-fluid">
		<div class="row">
			<div class="text-center col-md-12">
				<h2 class="text-center">Cadastre-se em nossa lista VIP e saiba mais!</h2>
				<a href="#newsletter"><button class="btn">Quero ser VIP</button></a>
			</div>
		</div>
	</div>
</aside>
<section class="colecao" id="colecao">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">O que é a coleção?</h2>
				<div class="col-md-6">
					<img class="img-responsive thumbnail" style="margin: 0 auto;" src="http://pequenoprincipe.miraimidia.com.br/wp-content/uploads/2015/08/FOLDER_imagem01_800.jpg" alt="Coleção Planeta Pequeno Príncipe" title="Coleção Planeta Pequeno Príncipe">
				</div>
				<div class="col-md-6">
					<p>
						Etiam posuere quam ac quam. Maecenas aliquet accumsan leo. Nullam dapibus fermentum ipsum. Etiam quis quam. Integer lacinia. Nulla est. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Integer vulputate sem a nibh rutrum consequat. Maecenas lorem. Pellentesque pretium lectus id turpis. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Fusce wisi. Phasellus faucibus molestie nisl. Fusce eget urna. Curabitur vitae diam non enim vestibulum interdum. Nulla quis diam. Ut tempus purus at lorem. In sem justo, commodo ut, suscipit at, pharetra vitae, orci.
						Etiam posuere quam ac quam. Maecenas aliquet accumsan leo. Nullam dapibus fermentum ipsum. Etiam quis quam. Integer lacinia. Nulla est.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="livros" id="livros">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">Nossos Livros</h2>
				<div class="owl-carousel owl-theme">
					<article>
						<div class="item">
							<h3 class="text-center">O Pequeno Príncipe no Planeta Terra</h3>
							<a href="#" id="livro01" class="thumbnail"><img src="<?= get_template_directory_uri(); ?>/assets/images/livros/livro_planeta_pequeno_principe_no_planeta_terra.png" alt="O Pequeno Príncipe no Planeta Terra" title="Capa do livro O Pequeno Príncipe no Planeta Terra"></a>
						</div>
					</article>
					<article>
						<div class="item">
							<h3 class="text-center">O Pequeno Príncipe no Planeta das Maravilhas</h3>
							<a href="#" id="livro02" class="thumbnail"><img src="<?= get_template_directory_uri(); ?>/assets/images/livros/livro_planeta_pequeno_principe_no_planeta_das_maravilhas.png" alt="O Pequeno Príncipe no Planeta das Maravilhas" title="Capa do livro O Pequeno Príncipe no Planeta das Maravilhas"></a>
						</div>
					</article>
					<article>
						<div class="item">
							<h3 class="text-center">O Pequeno Príncipe no Planeta Vermelho</h3>
							<a href="#" id="livro03" class="thumbnail"><img src="<?= get_template_directory_uri(); ?>/assets/images/livros/livro_planeta_pequeno_principe_no_planeta_vermelho.png" alt="O Pequeno Príncipe no Planeta Vermelho" title="Capa do livro O Pequeno Príncipe no Planeta Vermelho"></a>
						</div>
					</article>
					<article>
						<div class="item">
							<h3 class="text-center">O Pequeno Príncipe no Planeta das Poesias</h3>
							<a href="#" id="livro04" class="thumbnail"><img src="<?= get_template_directory_uri(); ?>/assets/images/livros/livro_planeta_pequeno_principe_no_planeta_das_poesias.png" alt="O Pequeno Príncipe no Planeta das Poesias" title="Capa do livro O Pequeno Príncipe no Planeta das Poesias"></a>
						</div>
					</article>
					<article>
						<div class="item">
							<h3 class="text-center">O Pequeno Príncipe no Planeta @.com</h3>
							<a href="#" id="livro05" class="thumbnail"><img src="<?= get_template_directory_uri(); ?>/assets/images/livros/livro_planeta_pequeno_principe_no_planeta_arroba_ponto_com.png" alt="O Pequeno Príncipe no Planeta @.com" title="Capa do livro O Pequeno Príncipe no Planeta @.com"></a>
						</div>
					</article>
					<article>
						<div class="item">
							<h3 class="text-center">O Pequeno Príncipe no seu Planeta</h3>
							<a href="#" id="livro06" class="thumbnail"><img src="<?= get_template_directory_uri(); ?>/assets/images/livros/livro_planeta_pequeno_principe_no_seu_planeta.png" alt="Capa do livro Planeta Pequeno Príncipe no seu Planeta" title="Capa do livro Planeta Pequeno Príncipe no seu Planeta"></a>
						</div>
					</article>
				</div>
				<!-- Modal-->
				<div class="modal fade" id="myModal" role="dialog" style="margin-top:80px;">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<div class="row">
									<div class="col-md-6">
										<img class="img-responsive thumbnail" src="<?= get_template_directory_uri(); ?>/assets/images/livros/livro_planeta_pequeno_principe_no_planeta_terra.png" alt="O Pequeno Príncipe no Planeta das Poesias" title="Capa do livro O Pequeno Príncipe no Planeta das Poesias">
									</div>
									<div class="col-md-6">
										<h3><strong>O Pequeno Príncipe no Planeta Terra</strong></h3>
										<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>	
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fechar</button>
								<a href="#"<button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-ok"></span> Comprar</button></a>
							</div>
						</div>

					</div>
				</div> 
				<!-- Fim Modal-->
			</div>
		</div>
	</div>
</section>
<section class="autor" id="autor">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">O Autor</h2>
				<div class="col-md-6">
					<h3>Carlos Gomes</h3>
					<p>
						Carlos Gomes nasceu no Rio de Janeiro, em 1974. Ex-jogador profissional de futebol, atuou, por duas temporadas, pelo Ferroviário do Cabo de Santo Agostinho (PE). Foi barman e fez teatro infantil, representando um palhaço. Trabalhou, durante cinco anos, em jornais impressos, de início, como vendedor de assinaturas e, posteriormente, destacado diretor comercial. Fundador da Certa Promoções, desenvolveu e dirigiu importante e exclusivo projeto de marketing turístico para a famosa praia de Porto de Galinhas o qual alavancou aquele turismo e franqueou o serviço para outros balneários. Especializou-se em marketing, passando a promover cursos jurídicos presenciais e on-line. Coordenou vários eventos nacionais que reuniram renomados juristas.
					</p>

					<p>
						Além disso, é voluntário em ações socioeducativas destinadas a menores e a pessoas da terceira idade. Autor de O Eremita, em breve publicará O Curandeiro, Palavra Calada — o mundo da liberdade, Engenho Capricho, Arlinda e Seus Doze Dias de Maio, Meu Querido Baobá, O Último Encontro, O Carteiro.
					</p>
				</div>
				<div class="col-md-6">
					<figure>
						<img class="img-responsive thumbnail" style="margin: 0 auto;" src="<?= get_template_directory_uri(); ?>/assets/images/planeta_pequeno_principe_autor_carlos_gomes.jpg" alt="Autor da Coleção Planeta Pequeno Príncipe" title="Autor da Coleção Planeta Pequeno Príncipe">
					</figure>
				</div>
			</article>
		</div>
	</div>
</div>
</section>
<section class="ilustradores" id="ilustradores">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">Ilustradoras</h2>
				<div class="col-md-6">
					<figure>
						<img width="400px" class="img-responsive thumbnail" alt="Jacquie Lima Ilustradora Planeta Pequeno Principe" title="Ilustradora da coleção Planeta Pequeno Príncipe" style="margin: 0 auto;" src="<?= get_template_directory_uri(); ?>/assets/images/jacquie_lima_ilustradora_planeta_pequeno_principe.jpg">
					</figure>
				</div>
				<div class="col-md-6">
					<h3>Jacquie Lima</h3>
					<p>Nasci em João Pessoa, capital da Paraíba, e atualmente moro em Recife. Formada em Artes Visuais pela UFPB, descobri ainda criança meu amor pelo desenho e desde muito nova já desenhava por encomenda para amigos da escola e vizinhança.</p>

					<p>Sempre fui apaixonada por literatura e histórias em quadrinhos, que são minha grande influência na concepção dos meus trabalhos.</p>

					<p>Trabalhei na produção de desenhos animados e como professora de desenho, mas atualmente me dedico ao que realmente sou apaixonada: ilustrar livros infantis.</p>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="space"></div>
<div class="container">
	<div class="row">
		<div class="two col-md-12">
			<div class="col-md-6">
				<h3>Giselle Rosa</h3>
				<p>Desde pequena, desenhar foi algo tão natural para mim quanto brincar. Cresci entre gibis e desenhos animados que, certamente, instigaram minha criatividade e percepção de mundo.</p>

				<p>Sou formada em Publicidade e Propaganda, atuando nas áreas de Criação e Direção de Arte, mas, em meio aos diversos projetos que apareceram enquanto publicitária, realizei-me como ilustradora; principalmente de temas infantis.</p>

				<p>Hoje, faço da imaginação minha grande parceira na realização de soluções divertidas e gratificantes para outras pessoas.</p>
			</p>
		</div>
		<div class="photo-ilustrador text-center col-md-6">
			<figure>
				<img width="400px" class="img-responsive thumbnail" alt="Gisele Rosa Ilustradora Planeta Pequeno Principe" title="Ilustradora da coleção Planeta Pequeno Príncipe" style="margin: 0 auto;" src="<?= get_template_directory_uri(); ?>/assets/images/giselle_rosa_ilustradora_planeta_pequeno_principe.png">
			</figure>
		</div>
	</div>
</div>
</section>
<section class="galeria" id="fotos">
	<div class="container">
		<div class="row">
			<div class="text-center col-md-12">
				<h2 class="text-center">Galeria de Imagens</h2>
				<div class="col-md-6">
					<figure>
						<img class="img-responsive thumbnail" style="margin: 0 auto;" src="http://placehold.it/400x400">
					</figure>
				</div>
				<div class="col-md-6">
					<p>Etiam posuere quam ac quam. Maecenas aliquet accumsan leo. Nullam dapibus fermentum ipsum. Etiam quis quam. Integer lacinia. Nulla est. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Integer vulputate sem a nibh rutrum consequat. Maecenas lorem. Pellentesque pretium lectus id turpis. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Fusce wisi. Phasellus faucibus molestie nisl. Fusce eget urna. Curabitur vitae diam non enim vestibulum interdum. Nulla quis diam. Ut tempus purus at lorem. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Etiam posuere quam ac quam. Maecenas aliquet accumsan leo. Nullam dapibus fermentum ipsum. Etiam quis quam. Integer lacinia. Nulla est.</p>
					<button class="btn btn-success"><a href="<?= bloginfo('url'); ?>/galeria">Ver mais</a></button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="comprar" id="comprar">
	<div class="container-fluid">
		<div class="row">
			<div class="text-center col-md-12">
				<h2>Adquira Já sua coleção</h2>
				<img class="img-responsive" style="margin: 0 auto;" src="<?= get_template_directory_uri(); ?>/assets/images/planeta_pequeno_principe_colecao.png">
				<button class="btn btn-success btn-lg">COMPRAR</button>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>