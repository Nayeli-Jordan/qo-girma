<!DOCTYPE html>
<html id="site-irma" prefix="og: http://ogp.me/ns#" lang="es">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>
		<!-- Sets initial viewport load and disables zooming -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- SEO -->
		<meta name="keywords" content="aborto, pérdida gestacional, ayuda, #NoEstásSola, atención psicológica, bebé, mujeres, rehabilitación, depresión">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Meta robots -->
		<meta name="robots" content="index, follow" />
		<meta name="googlebot" content="index, follow" />

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-16x16.png" sizes="16x16" />

		<!-- Facebook, Twitter metas -->
		<meta property="og:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo site_url(); ?>" />
		<meta property="og:image" content="<?php echo THEMEPATH; ?>images/dovela.jpg">
		<meta property="og:description" content="¿Sufres porque tu embarazo no continuó? #NoEstásSola @InstitutoIRMAac te ofrece terapia psicológica, confidencial y libre de juicio." />
		<meta name="twitter:description" content="#SabíasQue @IRMAac brinda atención psicológica, confidencial y libre de juicio a quien ha perdido un bebé antes de nacer #NoEstásSola" />
		<meta name="twitter:image" content="<?php echo THEMEPATH; ?>images/dovela.jpg" />
		<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:image:width" content="600" />
		<meta property="og:image:height" content="400" />
		<meta property="fb:app_id" content="" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@" />

		<!-- Google+ -->
		<link rel="publisher" href="https://plus.google.com/+">

		<!-- Compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">

		<!-- Google font(s) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:800|Roboto:400,500" rel="stylesheet">

		<!--Style-->
		<link type="text/css" rel="stylesheet" href="<?php echo THEMEPATH; ?>stylesheets/styles.css" media="screen,projection,print" />

		<!-- Canonical URL -->
		<link rel="canonical" href="<?php echo site_url(); ?>" />

		<!-- Sitemap Google Verify -->
		<meta name="google-site-verification" content="" />

		<!-- Noscript -->
		<noscript>Tu navegador no soporta JavaScript!</noscript>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105788032-6"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-105788032-6');
          gtag('config', 'AW-946177792');
        </script>
        <script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-946177792/z5vPCKfQlHUQgI6WwwM', 'event_callback': callback }); return false; } </script> 

		<?php wp_head(); ?>
	</head>
	<?php if (is_home()) {
		$pageName = 'page-home';
	} else {
		$pageName = '';
	} ?>
	<?php $lang = isset( $_GET['lang'] ) ? $_GET['lang'] : 'es'; /* Iniciar WPML */ ?>
	<body class="<?php echo $pageName; ?>">

		<!-- Load Facebook SDK for JavaScript -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<header class="js-header">
			<div id="content-header">			
				<a href="<?php echo SITEURL ?><?php if( 'en' == $lang ) : ?>?lang=en<?php endif; ?>" title="Link a Inicio sitio Grupo Irma">
					<img class="responsive-img" src="<?php echo THEMEPATH; ?>images/identidad/logo.png" alt="Logo de Grupo Irma, comprender para fortalecer">
				</a>
				<?php //do_action('wpml_add_language_selector'); ?>
				<em class="icon-menu open-nav"></em>
				<?php /* Detect Active */ 
					$submenu_name = '';
					if (is_single( array('historia', 'mision', 'vision', 'filosofia', 'directorio', 'informes-anuales', 'blog') ) || is_404() || is_singular('gi_blog')) {
						$submenu_name = 'quienes-somos';
					} elseif (is_single( array('irma-te-escucha', 'irma-conoce', 'irma-comunica', 'irma-transforma', 'historias-de-vida', 'un-lenguaje-comun', 'estilo-de-acompanamiento', 'fortalecer-la-identidad-materna-y-paterna', 'importancia-de-atender-la-salud-mental') ) || is_singular('gi_articulo')) {
						$submenu_name = 'que-hacemos';
					} elseif (is_single( array('voluntariado', 'donativos', 'donador-frecuente', 'razones-para-donar') )) {
						$submenu_name = 'como-ayudar';
					} elseif (is_single( array('preguntas-frecuentes', 'formulario', 'necesito-terapia') )) {
						$submenu_name = 'necesitas-ayuda';
					}
				?>
				<nav id="top-menu">
					<em class="icon-cancel close-nav"></em>
					<ul class="container" itemscope>
						<?php
							$menu_name 		= 'top_menu';					

							if (( $locations = get_nav_menu_locations()) && isset( $locations[ $menu_name ])) {
								$menu = wp_get_nav_menu_object( $locations[ $menu_name ]);
								$menu_items = wp_get_nav_menu_items( $menu->term_id );
								$menu_list = '';
								$subItem_name 	= ''; /* Sub menu vacio inicial */
								foreach ( (array) $menu_items as $key => $menu_item) {

									$url 				= $menu_item->url;
									$title 				= $menu_item->title;
									$xfn 				= $menu_item->xfn;

									$currentSection 	= '';
									if (!is_home() && $xfn != '') {
										if ($xfn === $submenu_name) {
											$currentSection	='active';
										}										
									}

									$menu_list .='<li itemprop="actionOption" class="pather-item"><a href="' . $url . '" class="' . $currentSection . '">' . $title . '</a></li>';

									/*Obtener sub elementos nav mobile */
									$subItem_name 		= $xfn;
									if (( $locations = get_nav_menu_locations()) && isset( $locations[ $subItem_name ])) {
										$subItem = wp_get_nav_menu_object( $locations[ $subItem_name ]);
										$subItem_items = wp_get_nav_menu_items( $subItem->term_id );
										$subItem_list = '';
										foreach ( (array) $subItem_items as $key => $subItem_item) {

											$url 				= $subItem_item->url;
											$title 				= $subItem_item->title;
											$class 				= esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $subItem_item->classes ), $subItem_item) ) );
											$description		= $subItem_item->description;

											$currentPageItem 		= '';
											if ($description != '') {
												if (is_single($description)) {
													$currentPageItem	='active';
												}										
											}

											$menu_list .='<li itemprop="actionOption" class="sub-item ' . $class .'"><a href="' . $url . '"  class="' . $currentPageItem . '">' . $title . '</a></li>';
										}
									} /*End if sub menú */

								}
							}
							echo $menu_list;
						?>				
					</ul>
				</nav>
				<?php if (!is_home()) : ?>
					<nav id="sub-menu">
						<ul>
						<?php
							$submenu_list = '';
							if (( $locations = get_nav_menu_locations()) && isset( $locations[ $submenu_name ])) {
								$submenu = wp_get_nav_menu_object( $locations[ $submenu_name ]);
								$submenu_items = wp_get_nav_menu_items( $submenu->term_id );
								
								foreach ( (array) $submenu_items as $key => $submenu_item) {

									$url 				= $submenu_item->url;
									$title 				= $submenu_item->title;
									$class 				= esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $submenu_item->classes ), $submenu_item) ) );
									$description		= $submenu_item->description;

									$currentPage 		= '';
									if ($description != '') {
										if (is_single($description)) {
											$currentPage	='active';
										}								
									}

									$submenu_list .='<li itemprop="actionOption" class="' . $class . ' "><a href="' . $url . '" class="' . $currentPage . '"><p>' . $title . '</p></a></li>';
								}
							}
							echo $submenu_list;
						?>	
						</ul>
						<div id="icons-redes">
							<a href="https://www.facebook.com/InstitutoIRMAac" target="_blank" class="btn-facebook" title="Link a facebook Grupo Irma"><em class="icon-facebook"></em></a>
							<a href="https://twitter.com/irmaac?lang=es" target="_blank" class="btn-twitter" title="Link a twitter Grupo Irma"><em class="icon-twitter"></em></a>
							<a href="https://www.instagram.com/instituto.irma/" target="_blank" class="btn-instagram" title="Link a instagram Grupo Irma"><em class="icon-instagram"></em></a>
							<a href="https://www.youtube.com/channel/UCky5f3UVRQkN2StorBb3ecw" target="_blank" class="btn-youtube" title="Link a youtube Grupo Irma"><em class="icon-youtube-play"></em></a>
						</div>						
					</nav>
				<?php endif; ?>				
			</div>
		</header>
		<div class="[ main-body ]">