<?php 
	get_header();
	global $post;

	$lang = isset( $_GET['lang'] ) ? $_GET['lang'] : 'es'; /* Iniciar WPML */
	
	while ( have_posts() ) : the_post(); 
		$custom_fields  = get_post_custom();
        $post_id        = get_the_ID();
        $url            = get_post_meta( $post_id, 'gi_articulo_url', true );
?>
	<section id="title-complete" class="header-page">
		<div class="[ container container-limit ]">
			<div class="row">
				<div class="col s12">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
			<div class="icon-title"></div>
		</div>
	</section>
	<section id="body-page" class="[ container container-limit ] single">
		<div class="row padding-top-bottom-xlarge">				
			<div class="col s12">
				<?php the_content(); ?>
				<div class="margin-top-small"><small>
				<?php if ($url != '' && $url != '0'): ?>
					<a href="<?php echo $url; ?>" target="_blank" class="color-primary" title="Enlace para descargar artículo"><em class="icon-doc-text"></em><?php if( 'es' == $lang ) : ?>Descargar archivo del artículo<?php else: ?>Download article file<?php endif; ?></a><br>
				<?php endif ?>
				<a href="<?php echo SITEURL; ?>seccion/irma-comunica<?php if( 'en' == $lang ) : ?>?lang=en<?php endif; ?>" class="color-primary" title="Enlace a todos los artículos"><?php if( 'es' == $lang ) : ?>Volver<?php else: ?>Return<?php endif; ?></a>
				</small></div>
			</div>	
		</div>
	</section>
<?php 
	endwhile; // end of the loop.
	get_footer(); 
?>
