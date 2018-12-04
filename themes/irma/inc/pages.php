<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////

add_action('init', function(){

	// ¿Quíenes somos? - Historia
	if( ! get_page_by_path('historia') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Historia',
			'post_name'   => 'historia',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ¿Quíenes somos? - Misión
	if( ! get_page_by_path('mision') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Misión',
			'post_name'   => 'mision',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ¿Quíenes somos? - Visión
	if( ! get_page_by_path('vision') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Visión',
			'post_name'   => 'vision',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ¿Quíenes somos? - Filosofía
	if( ! get_page_by_path('filosofia') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Filosofía',
			'post_name'   => 'filosofia',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ¿Quíenes somos? - Directorio
	if( ! get_page_by_path('directorio') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Directorio',
			'post_name'   => 'directorio',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ¿Qué hacemos? - Irma te escucha
	if( ! get_page_by_path('irma-te-escucha') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Irma te escucha',
			'post_name'   => 'irma-te-escucha',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ¿Qué hacemos? - Irma conoce
	if( ! get_page_by_path('irma-conoce') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Irma conoce',
			'post_name'   => 'irma-conoce',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ¿Qué hacemos? - Irma comunica
	if( ! get_page_by_path('irma-comunica') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Irma comunica',
			'post_name'   => 'irma-comunica',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ¿Qué hacemos? - Irma transforma
	if( ! get_page_by_path('irma-transforma') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Irma transforma',
			'post_name'   => 'irma-transforma',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ¿Cómo ayudar? - Voluntariado
	if( ! get_page_by_path('voluntariado') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Voluntariado',
			'post_name'   => 'voluntariado',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ¿Cómo ayudar? - Donativos
	if( ! get_page_by_path('donativos') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Donativos',
			'post_name'   => 'donativos',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ¿Necesitas ayuda? - Preguntas frecuentes
	if( ! get_page_by_path('preguntas-frecuentes') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Preguntas frecuentes',
			'post_name'   => 'preguntas-frecuentes',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ¿Necesitas ayuda? - Formulario
	if( ! get_page_by_path('formulario-necesitas-ayuda') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Formulario',
			'post_name'   => 'formulario-necesitas-ayuda',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ¿Necesitas ayuda? - Test acudir a terapia
	if( ! get_page_by_path('test-acudir-a-terapia') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Test acudir a terapia',
			'post_name'   => 'test-acudir-a-terapia',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

});