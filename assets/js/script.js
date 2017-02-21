$( document ).ready(function() {

	gambi();

	$('.owl-carousel').owlCarousel({
		loop:false,
		margin:10,
		nav:true,
		dots:false,
		navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			400:{
				items:2
			},
			600:{
				items:3
			},
			1000:{
				items:6
			}
		}
	});

	// Icone do Scroll

	// $(window).scroll(function(){
	// 	var scroll = $(window).scrollTop();
	// 	if (scroll <= 0) {
	// 		$('.scrolltop').hide();
	// 	}
	// 	else {
	// 		$('.scrolltop').show();
	// 	}
	// });

	$(".owl-carousel a").click(function(e){
		var home = "http://localhost/pequenoprincipe/";
		var link = "wp-content/themes/pequenoprincipe/assets/images/livros/";
		e.preventDefault();
		if ($(this).attr('id') == 'livro01') {
			$('.modal-body h3').html("<h3><strong>O pequeno principe no Planeta Terra</strong></h3>");
			$('.modal-body .row img').attr("src", home + link + "livro_planeta_pequeno_principe_no_planeta_terra.png");
			$('.modal-body .row img').attr("alt","O Pequeno Príncipe no Planeta Terra");
			$('.modal-body .row img').attr("title","Capa do livro O Pequeno Príncipe no Planeta Terra");
			$('.modal-body div p').html("O Pequeno Príncipe no Planeta Terra, foca no tema da sustentabilidade do nosso planeta como meio para garantir a sobrevivência das próximas gerações.");
		}
		if ($(this).attr('id') == 'livro02') {
			$('.modal-body h3').html("<h3><strong>O pequeno principe no Planeta das Maravilhas</strong></h3>");
			$('.modal-body .row img').attr("src", home + link + "livro_planeta_pequeno_principe_no_planeta_das_maravilhas.png");
			$('.modal-body .row img').attr("alt","O Pequeno Príncipe no Planeta das Maravilhas");
			$('.modal-body .row img').attr("title","Capa do livro O Pequeno Príncipe no Planeta das Maravilhas");
			$('.modal-body div p').html("O Pequeno Príncipe no Planeta das Maravilhas, foca no tema da amizade, tão necessária nos dias atuais, especialmente quando tem-se questionado as relações.");
		}
		if ($(this).attr('id') == 'livro03') {
			$('.modal-body h3').html("<h3><strong>O pequeno principe no Planeta Vermelho</strong></h3>");
			$('.modal-body .row img').attr("src", home + link + "livro_planeta_pequeno_principe_no_planeta_vermelho.png");
			$('.modal-body .row img').attr("alt","O Pequeno Príncipe no Planeta Vermelho");
			$('.modal-body .row img').attr("title","Capa do livro O Pequeno Príncipe no Planeta Vermelho");
			$('.modal-body div p').html("O Pequeno Príncipe no Planeta Vermelho, foca nas descobertas, no desenvolvimento tecnológico e também faz uma reflexão sobre quem são as pessoas que têm acesso a isso, por esse motivo, levanta o questionamento sobre o comportamento que devemos ter em momentos difíceis.");
		}
		if ($(this).attr('id') == 'livro04') {
			$('.modal-body h3').html("<h3><strong>O pequeno principe no Planeta das Poesias</strong></h3>");
			$('.modal-body .row img').attr("src", home + link + "livro_planeta_pequeno_principe_no_planeta_das_poesias.png");
			$('.modal-body .row img').attr("alt","O Pequeno Príncipe no Planeta das Poesias");
			$('.modal-body .row img').attr("title","Capa do livro O Pequeno Príncipe no Planeta das Poesias");
			$('.modal-body div p').html("O Pequeno Príncipe no Planeta das Poesias, foca na poesia que deveríamos perceber diante da beleza e da estética que a vida ou o cotidiano nos apresenta, por isso se trata de uma narrativa que fala da essência da vida, daquilo que devemos realmente dar valor.");
		}
		if ($(this).attr('id') == 'livro05') {
			$('.modal-body h3').html("<h3><strong>O pequeno principe no Planeta @.com</strong></h3>");
			$('.modal-body .row img').attr("src", home + link + "livro_planeta_pequeno_principe_no_planeta_arroba_ponto_com.png");
			$('.modal-body .row img').attr("alt","O Pequeno Príncipe no Planeta @.com");
			$('.modal-body .row img').attr("title","Capa do livro O Pequeno Príncipe no Planeta @.com");
			$('.modal-body div p').html("O Pequeno Príncipe no Planeta @.com, foca na ética, na segurança, nas relações que estabelecemos no dia a dia quando interagimos pela rede mundial de computadores.");
		}
		if ($(this).attr('id') == 'livro06') {
			$('.modal-body h3').html("<h3><strong>O pequeno principe no seu Planeta</strong></h3>");
			$('.modal-body .row img').attr("src", home + link + "livro_planeta_pequeno_principe_no_seu_planeta.png");
			$('.modal-body .row img').attr("alt","O Pequeno Príncipe no seu Planeta");
			$('.modal-body .row img').attr("title","Capa do livro O Pequeno Príncipe no seu Planeta");
			$('.modal-body div p').html("O Pequeno Príncipe no Seu Planeta, foca no imaginário e na criatividade para criar um planeta como desejamos, um planeta que seja, de fato, a casa comum, a casa de todos.");
		}
		$('#myModal').modal();
	});

	// Funções

	function gambi() {
		var width = $(window).width();
		if (width <= 993) {
			$('.two .photo-ilustrador').remove().insertBefore($('.two div:last'));
		}
		else {
			$('.two .photo-ilustrador').remove().insertAfter($('.two div:last'));
		}
	}

	$(window).resize(gambi);

	$('.icone-mobile').click(function() {
		$('.menu-mobile').toggle(300).animate({left:'5px'}).animate({left:'0'});
	});

	$('.menu-mobile ul li').click(function(){
		$('.menu-mobile').hide();
	});


	$('.mobile-close').click(function() {
		$('.menu-mobile').toggle(300);
	});

	$('a[href=#colecao]').click(function (e) {
		e.preventDefault();
		obj = $('#colecao').offset();
		$('body').animate({
			scrollTop: obj.top-20
		},
		1200);
	});
	$('a[href=#autor]').click(function (e) {
		e.preventDefault();
		obj = $('#autor').offset();
		$('body').animate({
			scrollTop: obj.top-20
		},
		1200);
	});
	$('a[href=#livros]').click(function (e) {
		e.preventDefault();
		obj = $('#livros').offset();
		$('body').animate({
			scrollTop: obj.top-20
		},
		1200);
	});
	$('a[href=#ilustradores]').click(function (e) {
		e.preventDefault();
		obj = $('#ilustradores').offset();
		$('body').animate({
			scrollTop: obj.top-20
		},
		1200);
	});
	$('a[href=#fotos]').click(function (e) {
		e.preventDefault();
		obj = $('#fotos').offset();
		$('body').animate({
			scrollTop: obj.top-20
		},
		1200);
	});
	$('a[href=#comprar]').click(function (e) {
		e.preventDefault();
		obj = $('#comprar').offset();
		$('body').animate({
			scrollTop: obj.top-20
		},
		1200);
	});

	$('.scrolltop').click(function(){
		$('body').animate({
			scrollTop:0
		},
		1200);
	});

	// Fancybox

	$(".fancybox").fancybox();

});