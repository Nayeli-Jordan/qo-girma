<div id="modal-donador" class="modal">
	<div class="exit-modal"></div>
	<div class="modal-content">
		<div class="modal-header">
			<h3>¡<?php if( 'es' == $lang ) : ?>Gracias<?php else: ?>Thank you<?php endif; ?>!</h3>
		</div>
		<div class="modal-body text-center">			
			<p class="margin-bottom-small">
			<?php if( 'es' == $lang ) : ?>
				La información para tu pre-registro como donador frecuente ha sido enviada. Pronto nos pondremos en contacto contigo para continuar con el proceso.
			<?php else: ?>
				The information for your pre-registration as a frequent donor has been sent. Soon we will contact you to continue the process.
			<?php endif; ?>
			</p>
			<a href="<?php echo SITEURL; ?>donativos<?php if( 'en' == $lang ) : ?>/?lang=en<?php endif; ?>" class="btn" title="Enlace para volver a donativos">Cerrar</a>
		</div>
	</div>
</div>