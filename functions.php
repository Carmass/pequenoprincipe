<?php 

/* Remover jQuery antigo */

/* Suporte a thumbnails em posts */
add_theme_support('post-thumbnails');

/* Registrar Menu */
function registrar_menu() {
	register_nav_menu('header-menu','main-menu');
}

add_action('init', 'registrar_menu');

$args = array(
	'name'          => __( 'Sidebar name', 'theme_text_domain' ),
	'id'            => 'unique-sidebar-id',
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );
register_sidebar($args);

/* Modificar imagem do wp-admin */

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function custom_login_css() {
echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/login.css"/>';
}
add_action('login_head', 'custom_login_css');

// Post Type - Galeria

function registrar_galeria() {
	$descricao = 'Galeria da Coleção do Pequeno Príncipe';
	$singular = 'Galeria';
	$plural = 'Galerias';

	$labels = array(
		'name' => $plural,
		'singular_name' => $singular,
		'view_item' => 'Ver ' . $singular,
		'edit_item' => 'Editar ' . $singular,
		'new_item' => 'Nova ' . $singular,
		'add_new' => 'Adicionar Nova',
		'add_new_item' => 'Adicionar Nova'
	);

	$supports = array(
		'title',
		'thumbnail'
	);

	$args = array(
		'labels' => $labels,
		'description' => $descricao,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-format-image',
		'supports' => $supports
	);


	register_post_type( 'galeria', $args);	
}

add_action('init', 'registrar_galeria');

?>