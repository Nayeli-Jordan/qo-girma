<div id="gi_articulos" class="margin-top-large">    
    <div class="margin-bottom-xlarge">
        <h3 class="margin-bottom-small">IRMA - Artículos científicos</h3>    
        <?php 
            $args = array(
                'post_type'         => 'gi_articulo',
                'posts_per_page'    => -1,
                'orderby'           => 'date',
                'order'             => 'ASC',
                'tax_query'         => array( /* Filtrar por Área */
                    array(
                        'taxonomy'  => 'tax_tipo_articulo',
                        'field'     => 'slug',
                        'terms'     => 'irma-cientificos'
                    )
                )
            ); 
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                $i = 1;
                while ( $loop->have_posts() ) : $loop->the_post(); 
                    $custom_fields  = get_post_custom();
                    $post_id        = get_the_ID();
                    $url       = get_post_meta( $post_id, 'gi_articulo_url', true ); ?>

                    <a href="<?php echo $url; ?>" class="color-primary" target="_blank"><h4 class="margin-bottom-xsmall"><i class="icon-doc"></i> <?php the_title(); ?></h4></a>

                <?php $i++; endwhile;
            } 
            wp_reset_postdata(); ?>
    </div>
    <div class="margin-bottom-xlarge">
        <h3 class="margin-bottom-small">IRMA - Artículos de interés</h3>    
        <?php 
            $args = array(
                'post_type'         => 'gi_articulo',
                'posts_per_page'    => -1,
                'orderby'           => 'date',
                'order'             => 'ASC',
                'tax_query'         => array( /* Filtrar por Área */
                    array(
                        'taxonomy'  => 'tax_tipo_articulo',
                        'field'     => 'slug',
                        'terms'     => 'irma-interes'
                    )
                )
            ); 
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                $i = 1;
                while ( $loop->have_posts() ) : $loop->the_post();  
                    $custom_fields  = get_post_custom();
                    $post_id        = get_the_ID();
                    $url       = get_post_meta( $post_id, 'gi_articulo_url', true ); ?>

                    <a href="<?php echo $url; ?>" class="color-primary" target="_blank"><h4 class="margin-bottom-xsmall"><i class="icon-doc"></i> <?php the_title(); ?></h4></a>

                <?php $i++; endwhile;
            } 
            wp_reset_postdata(); ?>         
    </div>
    <div>
        <h3 class="margin-bottom-small">Artículos relacionados</h3>
        <?php 
            $args = array(
                'post_type'         => 'gi_articulo',
                'posts_per_page'    => -1,
                'orderby'           => 'date',
                'order'             => 'ASC',
                'tax_query'         => array( /* Filtrar por Área */
                    array(
                        'taxonomy'  => 'tax_tipo_articulo',
                        'field'     => 'slug',
                        'terms'     => 'relacionados'
                    )
                )
            ); 
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                $i = 1;
                while ( $loop->have_posts() ) : $loop->the_post();  
                    $custom_fields  = get_post_custom();
                    $post_id        = get_the_ID();
                    $url       = get_post_meta( $post_id, 'gi_articulo_url', true ); ?>

                    <a href="<?php echo $url; ?>" class="color-primary" target="_blank"><h4 class="margin-bottom-xsmall"><i class="icon-doc"></i> <?php the_title(); ?></h4></a>

                <?php $i++; endwhile;
            } 
            wp_reset_postdata(); ?>          
    </div>


  
</div>
