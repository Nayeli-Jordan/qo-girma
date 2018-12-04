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
				$videoLink 		= get_post_meta( $post_id, 'gi_video_videoLink', true ); ?>

				<video id="videoHome" src="<?php echo $videoLink; ?>" class="width-100p" muted autoplay></video>
	     		<div id="videoPortada" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)" class="bg-image bg-absolute">
	     			<h2 class="uppercase color-blue">¿Quiénes Somos?</h2>
	     			<div id="buttonPlay" class="content-center"><i class="icon-play"></i></div>     		
	     		</div>
	     		<div id="videoControles">	     			
		     		<i id="videoPause" class="icon-pause"></i>
		     		<i id="videoPlay" class="icon-play hide"></i>
		     		<i id="videoStop" class="icon-stop"></i>
		     		<i id="videoVolumen" class="icon-volume"></i>
		     		<i id="videoMute" class="icon-volume-off hide"></i>	     			
	     		</div>

			<?php endwhile;
		} 
		wp_reset_postdata(); ?>
	</section>
	<!-- <svg width="300" height="200">
		<polyline points="0,100 50,0 250,0 300,100 250,200 50,200 0,100" fill="red" stroke="purple" stroke-width="0">
		<stop offset="0" stop-color="red"/>
            <stop offset="1" stop-color="blue"/>
            </polyline>
	</svg> -->
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
	<section id="intro-actividad" class="bg-degrade-pink_to_yellow">
		<div class="row">
			<div class="col s12 m9 l8 xl7">
				<img src="<?php echo THEMEPATH ?>images/actividad1.png" class="responsive-img">
				<div class="link-actividad">
					<a href="" class="fontfam-text">Talleres<span></span></a>
					<a href="" class="fontfam-text">Alianzas estratégicas<span></span></a>
					<a href="" class="fontfam-text">Logros<span></span></a>					
				</div>
			</div>
			<div class="col s12 m3 l4 xl5">
			
			</div>			
		</div>
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

				<div class="col s6 m4 bg-image" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)"></div>

			<?php endwhile;
		} 
		wp_reset_postdata(); ?>	
	</section>
<?php get_footer(); ?>