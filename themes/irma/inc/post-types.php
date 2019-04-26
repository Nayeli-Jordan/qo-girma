<?php

// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


add_action('init', function(){
	// post
	$labels = array(
		'name'          => 'Page Grupo Irma',
		'singular_name' => 'Page Grupo Irma',
		'add_new'       => 'Nuevo page Grupo Irma',
		'add_new_item'  => 'Nuevo page Grupo Irma',
		'edit_item'     => 'Editar page Grupo Irma',
		'new_item'      => 'Nuevo page Grupo Irma',
		'all_items'     => 'Page Grupo Irma',
		'view_item'     => 'Ver page Grupo Irma',
		'search_items'  => 'Buscar page Grupo Irma',
		'not_found'     => 'No hay page Grupo Irma.',
		'menu_name'     => 'Page Grupo Irma'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'seccion' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor' ),
		'menu_icon' 		 => 'dashicons-media-document'
	);
	register_post_type( 'seccion', $args );

	// Video
	$labels = array(
		'name'          => 'Videos',
		'singular_name' => 'Videos',
		'add_new'       => 'Nuevo Video',
		'add_new_item'  => 'Nuevo Video',
		'edit_item'     => 'Editar Video',
		'new_item'      => 'Nuevo Video',
		'all_items'     => 'Videos',
		'view_item'     => 'Ver Video',
		'search_items'  => 'Buscar Video',
		'not_found'     => 'No hay Video.',
		'menu_name'     => 'Videos'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=seccion',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gi_video' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail' ),
		'menu_icon' 		 => 'dashicons-format-video'
	);
	register_post_type( 'gi_video', $args );

	// Preguntas frecuentes
	$labels = array(
		'name'          => 'Preguntas frecuentes',
		'singular_name' => 'Preguntas frecuentes',
		'add_new'       => 'Nuevo Preguntas frecuentes',
		'add_new_item'  => 'Nuevo Preguntas frecuentes',
		'edit_item'     => 'Editar Preguntas frecuentes',
		'new_item'      => 'Nuevo Preguntas frecuentes',
		'all_items'     => 'Preguntas Frecuentes',
		'view_item'     => 'Ver Preguntas frecuentes',
		'search_items'  => 'Buscar Preguntas frecuentes',
		'not_found'     => 'No hay Preguntas frecuentes.',
		'menu_name'     => 'Preguntas frecuentes'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=seccion',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gi_faqs' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor' ),
		'menu_icon' 		 => 'dashicons-testimonial'
	);
	register_post_type( 'gi_faqs', $args );	

	// Artículos
	$labels = array(
		'name'          => 'Artículos',
		'singular_name' => 'Artículos',
		'add_new'       => 'Nuevo Artículos',
		'add_new_item'  => 'Nuevo Artículos',
		'edit_item'     => 'Editar Artículos',
		'new_item'      => 'Nuevo Artículos',
		'all_items'     => 'Artículos',
		'view_item'     => 'Ver Artículos',
		'search_items'  => 'Buscar Artículos',
		'not_found'     => 'No hay Artículos.',
		'menu_name'     => 'Artículos'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=seccion',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gi_articulo' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail', 'editor' ),
		'menu_icon' 		 => 'dashicons-media-text'
	);
	register_post_type( 'gi_articulo', $args );	

	// Irma transforma - Historias de vida
	$labels = array(
		'name'          => 'Testimonial',
		'singular_name' => 'Testimonial',
		'add_new'       => 'Nuevo Testimonial',
		'add_new_item'  => 'Nuevo Testimonial',
		'edit_item'     => 'Editar Testimonial',
		'new_item'      => 'Nuevo Testimonial',
		'all_items'     => 'Testimoniales',
		'view_item'     => 'Ver Testimonial',
		'search_items'  => 'Buscar Testimonial',
		'not_found'     => 'No hay Testimonial.',
		'menu_name'     => 'Testimonial'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=seccion',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gi_testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor' ),
		'menu_icon' 		 => 'dashicons-slides'
	);
	register_post_type( 'gi_testimonial', $args );	

	// ¿Quiénes somos? - Informes anuales
	$labels = array(
		'name'          => 'Informe anual',
		'singular_name' => 'Informe anual',
		'add_new'       => 'Nuevo Informe anual',
		'add_new_item'  => 'Nuevo Informe anual',
		'edit_item'     => 'Editar Informe anual',
		'new_item'      => 'Nuevo Informe anual',
		'all_items'     => 'Informes anuales',
		'view_item'     => 'Ver Informe anual',
		'search_items'  => 'Buscar Informe anual',
		'not_found'     => 'No hay Informe anual.',
		'menu_name'     => 'Informe anual'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=seccion',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gi_informe_anual' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail' ),
		'menu_icon' 		 => 'dashicons-analytics'
	);
	register_post_type( 'gi_informe_anual', $args );

	// ¿Cómo ayudar? - Donador frecuente
	$labels = array(
		'name'          => 'Donador frecuente',
		'singular_name' => 'Donador frecuente',
		'add_new'       => 'Nuevo Donador frecuente',
		'add_new_item'  => 'Nuevo Donador frecuente',
		'edit_item'     => 'Editar Donador frecuente',
		'new_item'      => 'Nuevo Donador frecuente',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Donador frecuente',
		'search_items'  => 'Buscar Donador frecuente',
		'not_found'     => 'No hay Donador frecuente.',
		'menu_name'     => 'Donador frecuente'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gi_donador_frecuente' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title' ),
		'menu_icon' 		 => 'dashicons-money'
	);
	register_post_type( 'gi_donador_frecuente', $args );

	// ¿Necesitas ayuda? - Necesitas ayuda
	$labels = array(
		'name'          => 'Necesitas ayuda',
		'singular_name' => 'Necesitas ayuda',
		'add_new'       => 'Nuevo Necesitas ayuda',
		'add_new_item'  => 'Nuevo Necesitas ayuda',
		'edit_item'     => 'Editar Necesitas ayuda',
		'new_item'      => 'Nuevo Necesitas ayuda',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Necesitas ayuda',
		'search_items'  => 'Buscar Necesitas ayuda',
		'not_found'     => 'No hay Necesitas ayuda.',
		'menu_name'     => 'Necesitas ayuda'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gi_necesitas_ayuda' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title' ),
		'menu_icon' 		 => 'dashicons-phone'
	);
	register_post_type( 'gi_necesitas_ayuda', $args );	

	// Share
	$labels = array(
		'name'          => 'Share',
		'singular_name' => 'Share',
		'add_new'       => 'Nuevo Share',
		'add_new_item'  => 'Nuevo Share',
		'edit_item'     => 'Editar Share',
		'new_item'      => 'Nuevo Share',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Share',
		'search_items'  => 'Buscar Share',
		'not_found'     => 'No hay Share.',
		'menu_name'     => 'Share'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gi_share' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor' ),
		'menu_icon' 		 => 'dashicons-phone'
	);
	register_post_type( 'gi_share', $args );	

});