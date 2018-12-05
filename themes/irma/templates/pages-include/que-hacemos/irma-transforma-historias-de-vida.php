<div id="testimoniales">
<?php 
    $args = array(
        'post_type'         => 'gi_testimonial',
        'posts_per_page'    => -1,
        'orderby'           => 'date',
        'order'             => 'ASC'
    ); 
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        $i = 1;
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="margin-bottom-75">
                <div class="line-pink"><i class="icon-quote"></i></div>
                <div class="padding-right-50 padding-left-50">
                    <div class="margin-bottom-small">
                        <?php the_content(); ?> 
                    </div>
                    <h3 class="text-right color-blue">- <?php the_title(); ?></h3>
                </div>
                <div class="line-purple"><i class="icon-quote"></i></div>  
            </div>

        <?php $i++; endwhile;
    } 
    wp_reset_postdata(); ?>    
</div>
