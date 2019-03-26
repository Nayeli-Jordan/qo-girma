<?php $lang = isset( $_GET['lang'] ) ? $_GET['lang'] : 'es'; /* Iniciar WPML */ ?>
<div id="gi_articulos" class="margin-top-large">    
    <div class="row row-complete"> 
        <div class="col s12 m5 l4">
        <?php 
            $args = array(
                'post_type'         => 'gi_informe_anual',
                'posts_per_page'    => -1,
                'orderby'           => 'date',
                'order'             => 'DESC'
            ); 
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                $i = 1;
                while ( $loop->have_posts() ) : $loop->the_post(); 
                    $custom_fields  = get_post_custom();
                    $post_id        = get_the_ID();
                    $url       = get_post_meta( $post_id, 'gi_informe_anual_url', true ); ?>

                    <a href="<?php echo $url; ?>" class="margin-bottom-small block margin-right-small btn" target="_blank" title="Enlace a Informe anual <?php the_title(); ?>"><?php if( 'es' == $lang ) : ?>Informe<?php else: ?>Report<?php endif; ?> <?php the_title(); ?></a>

                <?php $i++; endwhile;
            } 
            wp_reset_postdata(); ?>
        </div>
        <div class="col s12 m7 l8">
            <?php the_content(); ?>
        </div>
    </div>  
</div>
