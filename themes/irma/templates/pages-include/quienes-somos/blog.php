<div id="page-blog" class="row row-complete">
	<?php 
    $args = array(
        'post_type'         => 'gi_blog',
        'posts_per_page'    => -1,
        'orderby'           => 'date',
        'order'             => 'ASC'
    ); 
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        $i = 1;
        while ( $loop->have_posts() ) : $loop->the_post(); 
            $post_id        = get_the_ID(); 

            // get the post object
            $post = get_post( get_the_ID() );
            // we need just the content
            $content = $post->post_content;
            // we need a expression to match things
            $regex = '/src="([^"]*)"/';
            // we want all matches
            preg_match_all( $regex, $content, $matches );
            // reversing the matches array
            $matches = array_reverse($matches);
            $matches = array_values($matches)[0]; ?>

            <div class="col s12 m6 l4">
            	<div class="bg-image" style="background-image: url(<?php echo $matches[0]; ?>);"></div>
            	<div class="content-post">
					<h3 class="margin-bottom-xxsmall"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php echo the_excerpt(); ?>
					<div class="margin-top-xxsmall text-right">
						<small><a href="<?php the_permalink(); ?>">Ver más</a></small>   
					</div>	
            	</div>
			</div>

        <?php $i++; endwhile;
    } 
    wp_reset_postdata(); ?>
</div>