<?php /* Identico a page pero apto para traducciones */
	get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();?>
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
			<section id="body-page" class="[ container container-limit ] content-blog">
				<div class="row padding-top-bottom-xlarge">				
					<div class="col s12 fontfam-text margin-bottom-large">
						<?php the_content(); ?>
					</div>
					<div class="text-right">
						<a href="<?php echo SITEURL; ?>seccion/blog" class="btn">Volver a Blog</a>
					</div>
				</div>
			</section>
	<?php endwhile; endif; 
get_footer(); ?>