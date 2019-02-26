<?php $lang = isset( $_GET['lang'] ) ? $_GET['lang'] : 'es'; /* Iniciar WPML */ ?>
<div id="modal-ayuda" class="modal">
	<div class="exit-modal"></div>
	<div class="modal-content">
		<div class="modal-header">
			<h3>¡<?php if( 'es' == $lang ) : ?>Gracias por contactarnos<?php else: ?>Thank you for contacting us<?php endif; ?>!</h3>
		</div>
		<div class="modal-body text-center">			
			<p class="margin-bottom-small">
			<?php if( 'es' == $lang ) : ?>
				Tu mensaje se ha enviado, muy pronto nos pondremos en contacto contigo para atender tus comentarios.
			<?php else: ?>
				Your message has been sent, we will contact you shortly to answer your comments.
			<?php endif; ?>
			</p>
			<a href="<?php echo SITEURL; ?>seccion/preguntas-frecuentes<?php if( 'en' == $lang ) : ?>/?lang=en<?php endif; ?>" class="btn" title="Enlace a preguntas frecuentes">Cerrar</a>
		</div>
	</div>
</div>