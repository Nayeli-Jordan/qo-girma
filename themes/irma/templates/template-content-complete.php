<?php 
/*
Template Name: Contenido completo
Template Post Type: page
*/
get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();?>
		<section id="header-page-complete" class="header-page">
			<div class="[ container container-limit ]">
				<div class="row">
					<div class="col s12 m5">
						<h2 class="margin-bottom-xsmall_sm-and-down"><?php the_title(); ?></h2>
					</div>
					<div class="col s12 m7 fontfam-text">
						<?php the_content(); ?>
					</div>	
				</div>
			</div>			
		</section>
	<?php endwhile; endif; 
get_footer(); ?>