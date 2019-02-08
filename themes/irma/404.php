<?php 
	get_header(); 
	$lang = isset( $_GET['lang'] ) ? $_GET['lang'] : 'es'; /* Iniciar WPML */?>
	<section id="title-complete" class="header-page">
		<div class="[ container container-limit ]">
			<div class="row">
				<div class="col s12">
					<h2>Error</h2>
				</div>
			</div>
			<div class="icon-title"></div>
		</div>
	</section>
	<section id="body-page" class="[ container container-limit ]">
		<div class="row padding-top-bottom-xlarge">				
			<div class="col s12">
				<p class="fz-large">
				<?php if( 'es' == $lang ) : ?>
					¡Lo sentimos!
				<?php else: ?>
					We are sorry!
				<?php endif; ?></p><br>
				<p class="fz-medium">
				<?php if( 'es' == $lang ) : ?>
					La página que estás buscando no existe
				<?php else: ?>
					The page you are looking for does not exist
				<?php endif; ?></p><br>
				<a class="color-pink" href="<?php echo SITEURL; ?>"><?php if( 'es' == $lang ) : ?>
					Volver al inicio
				<?php else: ?>
					Back to top
				<?php endif; ?></a>
			</div>
		</div>
	</section>
<?php get_footer(); ?>