<div id="preguntasFrecuentes">
<?php 
    $args = array(
        'post_type'         => 'gi_faqs',
        'posts_per_page'    => -1,
        'orderby'           => 'date',
        'order'             => 'ASC'
    ); 
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        $i = 1;
        while ( $loop->have_posts() ) : $loop->the_post(); 
            $post_id        = get_the_ID(); ?>

            <div class="margin-bottom">
                <h2 id="pf_<?php echo $post_id; ?>"><span class="more">+</span><span class="minor">-</span> <?php echo $i; ?>. <?php the_title(); ?></h2>
                <div class="content-faq">
                    <?php the_content(); ?> 
                </div>     
            </div>

        <?php $i++; endwhile;
    } 
    wp_reset_postdata(); ?>    
</div>
