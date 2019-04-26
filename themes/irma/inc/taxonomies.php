<?php


// TAXONOMIES ////////////////////////////////////////////////////////////////////////
add_action( 'init', 'custom_taxonomies_callback', 0 );
function custom_taxonomies_callback(){

	// Tax artículos
	if( ! taxonomy_exists('tax_tipo_articulo')){

		$labels = array(
			'name'              => 'Tipo de Articulo',
			'singular_name'     => 'Tipo de Articulo',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Tipo',
			'update_item'       => 'Actualizar Tipo',
			'add_new_item'      => 'Nueva Tipo',
			'menu_name'         => 'Tipo de Articulo'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'tax_tipo_articulo' ),
		);

		register_taxonomy( 'tax_tipo_articulo', 'gi_articulo', $args );
	}	

	wp_insert_term( 'Irma Científicos', 'tax_tipo_articulo' );
	wp_insert_term( 'Irma Interés', 'tax_tipo_articulo' );
	wp_insert_term( 'Relacionados', 'tax_tipo_articulo' );

	// Tax Share
	if( ! taxonomy_exists('tax_shareRed')){

		$labels = array(
			'name'              => 'Red',
			'singular_name'     => 'Red',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Red',
			'update_item'       => 'Actualizar Red',
			'add_new_item'      => 'Nueva Red',
			'menu_name'         => 'Red'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'tax_shareRed' ),
		);

		register_taxonomy( 'tax_shareRed', 'gi_share', $args );
	}	

	wp_insert_term( 'Facebook', 'tax_shareRed' );
	wp_insert_term( 'Twitter', 'tax_shareRed' );	

}