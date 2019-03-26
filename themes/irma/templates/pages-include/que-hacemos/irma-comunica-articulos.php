<?php $lang = isset( $_GET['lang'] ) ? $_GET['lang'] : 'es'; /* Iniciar WPML */ ?>
<div id="gi_articulos" class="margin-top-large">    
    <div class="margin-bottom-xlarge">
        <h3 class="margin-bottom-small strong"> 
        <?php if( 'es' == $lang ) : ?>
            Publicaciones <span class="font-irma">IRMA</span>
        <?php else : ?>
            <span class="font-irma">IRMA</span> publications
        <?php endif; ?></h3>    
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

                    <a href="<?php echo $url; ?>" class="color-primary" target="_blank"><h4 class="margin-bottom-xsmall" title="Enlace a artículo: <?php the_title(); ?>"><em class="icon-doc-text"></em> <?php the_title(); ?></h4></a>

                <?php $i++; endwhile;
            } 
            wp_reset_postdata(); ?>
            <h4 class="margin-bottom-xsmall"><em class="icon-doc-text"></em>Guía para el Diagnóstico y Atención de los Efectos Posaborto (Disponible físicamente sólo en nuestras oficinas)</h4>
            <img src="<?php echo THEMEPATH; ?>images/guia_irma.jpg" class="responsive-img">
    </div>
    <div class="margin-bottom-xlarge">
        <h3 class="margin-bottom-small strong"><span class="font-irma">IRMA</span> - 
        <?php if( 'es' == $lang ) : ?>
            Artículos de interés
        <?php else : ?>
            Articles of interest
        <?php endif; ?></h3>    
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
                    global $post;
                    $custom_fields  = get_post_custom();
                    $post_id        = get_the_ID();
                    $url            = get_post_meta( $post_id, 'gi_articulo_url', true );
                    $content        = $post->post_content; ?>

                    <?php if ($content != ''): ?>
                        <a href="<?php the_permalink(); ?>" class="color-primary">
                    <?php else: ?>
                        <a href="<?php echo $url; ?>" class="color-primary" target="_blank">
                    <?php endif ?>
                        <h4 class="margin-bottom-xsmall" title="Enlace a artículo: <?php the_title(); ?>"><em class="icon-doc-text"></em> <?php the_title(); ?></h4></a>

                <?php $i++; endwhile;
            } 
            wp_reset_postdata(); ?>         
    </div>
    <div>
        <h3 class="margin-bottom-small strong"> 
        <?php if( 'es' == $lang ) : ?>
            Artículos relacionados
        <?php else : ?>
            Related Posts
        <?php endif; ?></h3>
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

                    <a href="<?php echo $url; ?>" class="color-primary" target="_blank"><h4 class="margin-bottom-xsmall" title="Enlace a artículo: <?php the_title(); ?>"><em class="icon-doc-text"></em> <?php the_title(); ?></h4></a>

                <?php $i++; endwhile;
            } 
            wp_reset_postdata(); ?>          
    </div>


  
</div>
