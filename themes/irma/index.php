<?php 
	get_header(); 
	$lang = isset( $_GET['lang'] ) ? $_GET['lang'] : 'es'; /* Iniciar WPML */ 
?>
	<section id="intro-video" class="relative">
	<?php 
		$args = array(
            'post_type' 		=> 'gi_video',
            'posts_per_page' 	=> 1,
            'orderby' 			=> 'rand'
        ); 
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post();
            	$custom_fields 	= get_post_custom();
				$post_id 		= get_the_ID();
				$videoLink 		= get_post_meta( $post_id, 'gi_video_videoLink', true ); ?>

				<video id="videoHome" src="<?php echo $videoLink; ?>" class="width-100p" muted autoplay></video>
	     		<div id="videoPortada" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)" class="bg-image bg-absolute">
	     			<h2 class="color-blue text-shadow">
	     			<?php if( 'es' == $lang ) : ?>
						¿Quiénes Somos?
					<?php else: ?>
						About us?
					<?php endif; ?>
					</h2>
	     			<div id="buttonPlay" class="content-center"><em class="icon-play"></em></div>     		
	     		</div>
	     		<div id="videoControles">	     			
		     		<em id="videoPause" class="icon-pause"></em>
		     		<em id="videoPlay" class="icon-play hide"></em>
		     		<em id="videoStop" class="icon-stop"></em>
		     		<em id="videoVolumen" class="icon-volume"><span class="pulse"></span></em>
		     		<em id="videoMute" class="icon-volume-off hide"></em>	     			
	     		</div>

			<?php endwhile;
		} 
		wp_reset_postdata(); ?>
	</section>
	<section id="intro-que-hacemos" class="bg-degrade-purple_to_uva-dark relative">
		<div class="title-degrade"><p class="bg-degrade-pink_to_yellow"><em class="icon-play icon-triangle-left color-pink"></em>
			<?php if( 'es' == $lang ) : ?>
				¿Qué hacemos?
			<?php else: ?>
				WHAT DO WE DO?
			<?php endif; ?>
			<em class="icon-play icon-triangle-right color-yellow"></em></p></div>
		<div class="[ container ]">
			<div class="row padding-top-50 padding-bottom-40 text-center">
				<div class="col s6 m3 margin-bottom-small_sm-and-down">
					<a href="<?php echo SITEURL; ?>irma-te-escucha<?php if( 'en' == $lang ) : ?>/?lang=en<?php endif; ?>" class="color-light block" title="Link a Irma te escucha">
						<img src="<?php echo THEMEPATH ?>images/irma/escucha.png" class="responsive-img margin-bottom-xsmall" alt="Icono de Irma te escucha">
						<?php if( 'es' == $lang ) : ?>
							<p>Irma te<br> escucha</p>
						<?php else: ?>
							<p>Irma listens<br> to you</p>
						<?php endif; ?>		
					</a>
				</div>
				<div class="col s6 m3 margin-bottom-small_sm-and-down">
					<a href="<?php echo SITEURL; ?>irma-conoce<?php if( 'en' == $lang ) : ?>/?lang=en<?php endif; ?>" class="color-light block" title="Link a Irma conoce">
						<img src="<?php echo THEMEPATH ?>images/irma/conoce.png" class="responsive-img margin-bottom-xsmall" alt="Icono de Irma conoce">
						<?php if( 'es' == $lang ) : ?>
							<p>Irma<br> conoce</p>
						<?php else: ?>
							<p>Irma<br> knows</p>
						<?php endif; ?>
					</a>
				</div>
				<div class="col s6 m3 margin-bottom-small_sm-and-down clear-on-sm-and-down">
					<a href="<?php echo SITEURL; ?>irma-comunica<?php if( 'en' == $lang ) : ?>/?lang=en<?php endif; ?>" class="color-light block" title="Link a Irma comunica">
						<img src="<?php echo THEMEPATH ?>images/irma/comunica.png" class="responsive-img margin-bottom-xsmall" alt="Icono de Irma comunica">
						<?php if( 'es' == $lang ) : ?>
							<p>Irma<br> comunica</p>
						<?php else: ?>
							<p>Irma<br> communicates</p>
						<?php endif; ?>		
					</a>
				</div>
				<div class="col s6 m3">
					<a href="<?php echo SITEURL; ?>irma-transforma<?php if( 'en' == $lang ) : ?>/?lang=en<?php endif; ?>" class="color-light block" title="Link a Irma transforma">
						<img src="<?php echo THEMEPATH ?>images/irma/transforma.png" class="responsive-img margin-bottom-xsmall" alt="Icono de Irma transforma">
						<?php if( 'es' == $lang ) : ?>
							<p>Irma<br> transforma</p>	
						<?php else: ?>
							<p>Irma<br> transforms</p>	
						<?php endif; ?>	
					</a>
				</div>
			</div>			
		</div>
	</section>
	<section id="intro-actividad">
		<div class="padding-top-bottom-large padding-left-right-small">
			<div class="content-actividad">
				<img src="<?php echo THEMEPATH ?>images/actividad_irma.png" class="responsive-img" alt="Cuadro de actividades de Grupo Irma">
				<a href="<?php echo SITEURL; ?>formulario-necesitas-ayuda<?php if( 'en' == $lang ) : ?>/?lang=en<?php endif; ?>" class="link-necesitas-ayuda" title="Enlace a Necesitas ayuda"><span>Necesitas ayuda</span></a>
				<a href="<?php echo SITEURL; ?>informes-anuales<?php if( 'en' == $lang ) : ?>/?lang=en<?php endif; ?>" class="link-logros" title="Enlace a logros Grupo Irma"><span>Logros</span></a>
				<a href="<?php echo SITEURL; ?>historias-de-vida<?php if( 'en' == $lang ) : ?>/?lang=en<?php endif; ?>" class="link-historias-vida" title="Enlace a Historias de vida"><span>Historias de vida</span></a>
				<a href="<?php echo SITEURL; ?>donativos<?php if( 'en' == $lang ) : ?>/?lang=en<?php endif; ?>" class="link-colabora" title="Enlace a colabora, donativos"><span>Colabora</span></a>
			</div>		
		</div>
	</section>
<?php get_footer(); ?>