<!DOCTYPE html>
<!-- Importante agregar el prefijo para cuando dice que og no se está usando -->
<html id="site-irma" prefix="og: http://ogp.me/ns#" lang="es">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>
		<!-- Sets initial viewport load and disables zooming -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- SEO -->
		<meta name="keywords" content="">
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
		<meta property="og:image" content="<?php echo THEMEPATH; ?>images/share.png">
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
		<meta name="twitter:image" content="<?php echo THEMEPATH; ?>images/share.png" />
		<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:image:width" content="210" />
		<meta property="og:image:height" content="110" />
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
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="js-header">
			<a href="<?php echo SITEURL ?>">
				<img class="responsive-img" src="<?php echo THEMEPATH; ?>images/identidad/logo.png">
			</a>
			<i class="icon-menu open-nav"></i>
			<nav id="top-menu">
				<i class="icon-close close-nav"></i>
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

								$menu_list .='<li itemprop="actionOption"><a href="' . $url . '">' . $title . '</a></li>';

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

										$menu_list .='<li itemprop="actionOption" class="sub-item ' . $class .'"><a href="' . $url . '">' . $title . '</a></li>';
									}
								} /*End if sub menú */

							}
						}
						echo $menu_list;
					?>				
				</ul>
			</nav>
			<?php if (!is_home() && !is_page('necesitas-ayuda')) : ?>
				<nav id="sub-menu">
					<ul>
						<?php
							if (is_page( array('historia', 'mision', 'vision', 'filosofia', 'directorio') )) {
								$submenu_name = 'quienes-somos';
							} elseif (is_page( array('irma-te-escucha', 'irma-conoce', 'irma-comunica', 'irma-transforma') )) {
								$submenu_name = 'que-hacemos';
							} elseif (is_page( array('voluntariado', 'donativos') )) {
								$submenu_name = 'como-ayudar';
							}

							if (( $locations = get_nav_menu_locations()) && isset( $locations[ $submenu_name ])) {
								$submenu = wp_get_nav_menu_object( $locations[ $submenu_name ]);
								$submenu_items = wp_get_nav_menu_items( $submenu->term_id );
								$submenu_list = '';
								foreach ( (array) $submenu_items as $key => $submenu_item) {

									$url 				= $submenu_item->url;
									$title 				= $submenu_item->title;
									$class 				= esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $submenu_item->classes ), $submenu_item) ) );
									$description		= $submenu_item->description;

									$currentPage 		= '';
									if ($description != '') {
										if (is_page($description)) {
											$currentPage	='active';
										}										
									}

									$submenu_list .='<li itemprop="actionOption" class="' . $class . ' "><a href="' . $url . '" class="' . $currentPage . '">' . $title . '</a></li>';
								}
							}
							echo $submenu_list;
						?>	
					</ul>
				</nav>
			<?php endif; ?>
		</header>
		<div class="[ main-body ]">