<?php /* Identico a page pero apto para traducciones */
	get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();?>
			<section id="title-complete" class="header-page">
				<div class="[ container container-limit ]">
					<div class="row">
						<div class="col s12">
							<h2>
								<?php if ( has_post_thumbnail() ){ ?>
									<img src="<?php the_post_thumbnail_url('full'); ?>" alt="Imagen destacada de <?php the_title(); ?>">
								<?php } ?>							
								<?php the_title(); ?>
							</h2>
						</div>
					</div>
					<div class="icon-title"></div>
				</div>
			</section>
			<section id="body-page" class="[ container container-limit ] <?php if (is_single('historia')) { echo 'content-historia'; } ?>">
				<div class="row padding-top-bottom-xlarge">				
					<div class="col s12 fontfam-text">
						<?php if (!is_single('informes-anuales')) {
							the_content();
						} 
						if (is_single('preguntas-frecuentes')) {
							include (TEMPLATEPATH . '/templates/pages-include/necesitas-ayuda/preguntas-frecuentes.php');
						} else if (is_single('formulario')) {						
							include (TEMPLATEPATH . '/templates/pages-include/necesitas-ayuda/modal-ayuda.php');
							include (TEMPLATEPATH . '/templates/pages-include/necesitas-ayuda/formulario-necesitas-ayuda.php');
						} else if (is_single('irma-comunica')) {
							include (TEMPLATEPATH . '/templates/pages-include/que-hacemos/irma-comunica-articulos.php');
						} else if (is_single('historias-de-vida')) {
							include (TEMPLATEPATH . '/templates/pages-include/que-hacemos/irma-transforma-historias-de-vida.php');
						} else if (is_single('donador-frecuente')) {
							include (TEMPLATEPATH . '/templates/pages-include/como-ayudar/modal-donador.php');
							include (TEMPLATEPATH . '/templates/pages-include/como-ayudar/donador-frecuente.php');
						} else if (is_single('donativos')) {
							include (TEMPLATEPATH . '/templates/pages-include/como-ayudar/share-irma.php');
						} else if (is_single('informes-anuales')) {
							include (TEMPLATEPATH . '/templates/pages-include/quienes-somos/informes-anuales.php');
						} else if (is_single('historia')) {
							include (TEMPLATEPATH . '/templates/pages-include/quienes-somos/historia.php');
						} ?>
					</div>	
				</div>
			</section>
	<?php endwhile; endif; 
get_footer(); ?>