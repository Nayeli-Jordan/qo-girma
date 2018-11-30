<?php get_header(); ?>
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
				$videoLink 		= get_post_meta( $post_id, 'gi_video_videoLink', true );?>

				<video id="video-<?php echo $post_id; ?>" src="<?php echo $videoLink; ?>" class="width-100p" muted autoplay></video>
	     		<div id="portada-<?php echo $post_id; ?>" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)" class="bg-image bg-absolute hide"></div>
	     		<div id="videoControles">
		     		<i id="videoStop" class="icon-stop"></i>
		     		<i id="videoPlay" class="icon-play"></i>
		     		<i id="videoVolumen" class="icon-volume"></i>
		     		<i id="videoMute" class="icon-volume-off"></i>	     			
	     		</div>

			<?php endwhile;
		} 
		wp_reset_postdata(); ?>
	</section>
	<section id="intro-que-hacemos" class="bg-degrade-purple_to_pink">
		<div class="[ container ]">
			<div class="row padding-top-bottom-slarge text-center color-light uppercase">
				<div class="col s12 sm6 m3 margin-bottom-small_sm-and-down">
					<img src="<?php echo THEMEPATH ?>images/irma/escucha.png" class="responsive-img margin-bottom-xsmall">
					<p>Irma te<br> escucha</p>
				</div>
				<div class="col s12 sm6 m3 margin-bottom-small_sm-and-down">
					<img src="<?php echo THEMEPATH ?>images/irma/conoce.png" class="responsive-img margin-bottom-xsmall">
					<p>Irma te<br> conoce</p>
				</div>
				<div class="col s12 sm6 m3 margin-bottom-small_sm-and-down clear-on-sm-and-down">
					<img src="<?php echo THEMEPATH ?>images/irma/comunica.png" class="responsive-img margin-bottom-xsmall">
					<p>Irma te<br> comunica</p>
				</div>
				<div class="col s12 sm6 m3">
					<img src="<?php echo THEMEPATH ?>images/irma/transforma.png" class="responsive-img margin-bottom-xsmall">
					<p>Irma te<br> transforma</p>
				</div>
			</div>			
		</div>
	</section>
	<section>
		
	</section>
	<section id="gallery" class="row">
	<?php 
		$args = array(
            'post_type' 		=> 'gi_gallery',
            'posts_per_page' 	=> 6,
            'orderby' 			=> 'date',
            'order' 			=> 'DESC'
        ); 
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="col s12 sm6 m4 bg-image" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)"></div>

			<?php endwhile;
		} 
		wp_reset_postdata(); ?>	
	</section>
<?php get_footer(); ?>