<?php $lang = isset( $_GET['lang'] ) ? $_GET['lang'] : 'es'; /* Iniciar WPML */ ?>
<p><strong><?php if( 'es' == $lang ) : ?>Dona un tweet:<?php else: ?>Donate tweet:<?php endif; ?></strong></p>
<?php
$share_args = array(
	'post_type' 		=> 'gi_share',
	'posts_per_page' 	=> 1,
    'orderby' 			=> 'rand',
	'tax_query' 		=> array(
		array(
			'taxonomy' 	=> 'tax_shareRed',
			'field'	   	=> 'slug',
			'terms'	 	=> 'twitter',
			'operator'	=> 'IN',
		)
	)
);
$share_query = new WP_Query( $share_args );
if ( $share_query->have_posts() ) : 
	$i = 1;
	while ( $share_query->have_posts() ) : $share_query->the_post();
		the_content(); ?>
		<p class="text-center margin-top-xsmall"><a href="http://twitter.com/home?status=<?php echo urlencode(the_content());?>" class="btn btn-twitter"><em class="icon-twitter"></em> Share</a></p><br>
	<?php $i ++; endwhile; wp_reset_postdata();
endif; ?>
<p><strong><?php if( 'es' == $lang ) : ?>Comparte un mensaje en Facebook:<?php else: ?>Share a message on Facebook:<?php endif; ?></strong></p>
<?php
$share_args = array(
	'post_type' 		=> 'gi_share',
	'posts_per_page' 	=> 1,
    'orderby' 			=> 'rand',
	'tax_query' 		=> array(
		array(
			'taxonomy' 	=> 'tax_shareRed',
			'field'	   	=> 'slug',
			'terms'	 	=> 'facebook',
			'operator'	=> 'IN',
		)
	)
);
$share_query = new WP_Query( $share_args );
if ( $share_query->have_posts() ) : 
	$i = 1;
	while ( $share_query->have_posts() ) : $share_query->the_post();
		the_content(); ?>
		<div class="fb-share-button block_imp text-center" data-href="<?php echo SITEURL; ?>" data-layout="button" data-size="large">Share</div>		
	<?php $i ++; endwhile; wp_reset_postdata();
endif; ?>