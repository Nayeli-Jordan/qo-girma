<?php get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();?>
		<section class="header-page">
			<div class="[ container container-limit ]">
				<div class="row">
					<div class="col s12 m5">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="col s12 m7">
						<?php the_content(); ?>
					</div>		
				</div>
			</div>
		</section>
	<?php endwhile; endif; 
get_footer(); ?>