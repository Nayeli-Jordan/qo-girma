<div id="testimoniales" class="margin-top-large">
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

            <div class="margin-bottom-75 relative">
                <em class="icon-quote icon-quote-initial"></em>
                <div class="padding-right-50 padding-left-50">
                    <div class="margin-bottom-small">
                        <?php the_content(); ?> 
                    </div>
                    <h3 class="text-right color-blue">- <?php the_title(); ?></h3>
                </div>
                <em class="icon-quote icon-quote-final"></em> 
            </div>

        <?php $i++; endwhile;
    } 
    wp_reset_postdata(); ?>    
</div>
