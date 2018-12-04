<?php 
/*
Template Name: Título completo
Template Post Type: page
*/
get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();?>
		<section id="title-complete" class="header-page">
			<div class="[ container container-limit ]">
				<div class="row">
					<div class="col s12">
						<h2 class="margin-bottom-xsmall_sm-and-down">
							<?php if ( has_post_thumbnail() ){ ?>
								<img src="<?php the_post_thumbnail_url('full'); ?>">
							<?php } ?>							
							<?php the_title(); ?>
						</h2>
					</div>
				</div>
			</div>			
		</section>
		<section id="body-page" class="[ container container-limit ]">
			<div class="row padding-top-bottom-xlarge">				
				<div class="col s12 m10 fontfam-text">
					<?php the_content(); ?>
					<?php if (is_page('preguntas-frecuentes')) {
						include (TEMPLATEPATH . '/templates/pages-include/necesitas-ayuda/preguntas-frecuentes.php');
					} ?>
				</div>	
			</div>
		</section>
	<?php endwhile; endif; 
get_footer(); ?>