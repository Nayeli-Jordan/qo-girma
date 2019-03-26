<?php $lang = isset( $_GET['lang'] ) ? $_GET['lang'] : 'es'; /* Iniciar WPML */ ?>
<?php if( 'es' == $lang ) : ?>
	<p><strong>Dona un tweet:</strong></p>
	<p>Conoce a @IRMAac institución de ayuda social que brinda atención psicológica especializada en pérdidas gestacionales. irma.org.mx</p>
	<p>#SabíasQue @IRMAac brinda atención psicológica, confidencial y libre de juicio a quien ha perdido un bebé antes de nacer #NoEstásSola</p>
	<p class="text-center margin-top-xsmall"><a href="http://twitter.com/home?status=<?php echo urlencode("Conoce a @IRMAac institución de ayuda social que brinda atención psicológica especializada en pérdidas gestacionales. " . SITEURL . " #SabíasQue @IRMAac brinda atención psicológica, confidencial y libre de juicio a quien ha perdido un bebé antes de nacer #NoEstásSola");?>" class="btn btn-twitter"><em class="icon-twitter"></em> Share</a></p><br>
	<p><strong>Comparte un mensaje en Facebook:</strong></p>
	<p>Conoce a @InstitutoIRMAac institución especializada en terapia psicológica ante pérdidas durante el embarazo.</p>
	<p>¿Sufres porque tu embarazo no continuó? #NoEstásSola @InstitutoIRMAac te ofrece terapia psicológica, confidencial y libre de juicio.</p><br>
	<div class="fb-share-button block_imp text-center" data-href="<?php echo SITEURL; ?>" data-layout="button" data-size="large">Share</div>
<?php else: ?>
	<p><strong>Donate tweet:</strong></p>
	<p>Meet @IRMAac social assistance institution that provides specialized psychological care in gestational losses irma.org.mx</p>
	<p>#SabíasQue (you know what) @IRMAac provides psychological, confidential and free of judgment to those who have lost a baby before birth #NoEstásSola (You are not alone)</p>
	<p class="text-center margin-top-xsmall"><a href="http://twitter.com/home?status=<?php echo urlencode("Meet @IRMAac social assistance institution that provides specialized psychological care in gestational losses. " . SITEURL . " #SabíasQue @IRMAac provides psychological, confidential and free of judgment to those who have lost a baby before birth #NoEstásSola");?>" class="btn btn-twitter"><em class="icon-twitter"></em> Share</a></p><br>
	<p><strong>Share a message on Facebook:</strong></p>
	<p>Meet @InstitutoIRMAac institution specializing in psychological therapy for losses during pregnancy.</p>
	<p>Do you suffer because your pregnancy did not continue? #NoEstásSola (You are not alone) @InstitutoIRMAac offers psychological therapy, confidential and free of judgment.</p><br>
	<div class="fb-share-button block_imp text-center" data-href="<?php echo SITEURL; ?>" data-layout="button" data-size="large">Share</div>
<?php endif; ?>

<img src="<?php echo THEMEPATH; ?>/images/dovela.jpg" class="responsive-img margin-top-large">