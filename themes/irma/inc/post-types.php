<?php

// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


add_action('init', function(){

	// Video
	$labels = array(
		'name'          => 'Videos',
		'singular_name' => 'Videos',
		'add_new'       => 'Nuevo Video',
		'add_new_item'  => 'Nuevo Video',
		'edit_item'     => 'Editar Video',
		'new_item'      => 'Nuevo Video',
		'all_items'     => 'Todo',
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
		'show_in_menu'       => true,
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

	// Galería
	$labels = array(
		'name'          => 'Galería',
		'singular_name' => 'Galería',
		'add_new'       => 'Nuevo Galería',
		'add_new_item'  => 'Nuevo Galería',
		'edit_item'     => 'Editar Galería',
		'new_item'      => 'Nuevo Galería',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Galería',
		'search_items'  => 'Buscar Galería',
		'not_found'     => 'No hay Galería.',
		'menu_name'     => 'Galería'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gi_gallery' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail' ),
		'menu_icon' 		 => 'dashicons-format-gallery'
	);
	register_post_type( 'gi_gallery', $args );	

});