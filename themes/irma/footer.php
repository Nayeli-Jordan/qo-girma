			<?php $lang = isset( $_GET['lang'] ) ? $_GET['lang'] : 'es'; /* Iniciar WPML */ ?>
			<footer>
				<div class="row">
					<div class="col s12 l6 footer-necesitas-ayuda">
						<!-- TO DO - Conversión irá?
						onclick="return gtag_report_conversion('https://irma.org.mx/contacto_ayuda.html');" -->
						<a href="<?php echo SITEURL; ?>formulario-necesitas-ayuda<?php if( 'en' == $lang ) : ?>/?lang=en<?php endif; ?>" class="block" title="Link a Inicio sitio Grupo Irma">
							<img class="responsive-img" src="<?php echo THEMEPATH; ?>images/identidad/logo-light.png" alt="Logo blanco de Grupo Irma, comprender para fortalecer">
							<?php if( 'es' == $lang ) : ?>
								<h2>¿Necesitas ayuda?</h2>
							<?php else : ?>
								<h2>Need help?</h2>
							<?php endif; ?>							
						</a>
					</div>
					<div class="col s12 l6 footer-logos">
						<p class="color-blue-text">
							<?php if( 'es' == $lang ) : ?>
								Responsables Sanitarios
							<?php else : ?>
								Sanitary Responsibles
							<?php endif; ?> Universidad Iberoamericana <br>
							<?php if( 'es' == $lang ) : ?>
								Cédula Prof.
							<?php else : ?>
								Professional license
							<?php endif; ?> 75704407 
							<?php if( 'es' == $lang ) : ?>
								Permiso
							<?php else : ?>
								Permission
							<?php endif; ?> SSA 15330020A3063</p>
						<div>
							<a href="https://www.filantrofilia.org/" target="_blank" class="inline-block" title="Link a sitio de filantrofilia"><img class="responsive-img" src="<?php echo THEMEPATH; ?>images/footer/filantrofilia.jpg" alt="Logo de filantrofilia"></a>
							<img class="responsive-img" src="<?php echo THEMEPATH; ?>images/footer/cemefi.jpg" alt="Logo de cemefi">
							<a href="http://www.portalesmedicos.com/web_interes_sanitario/index.htm" target="_blank" class="inline-block" title="Link a certificación wis"><img class="responsive-img" src="<?php echo THEMEPATH; ?>images/footer/wis.jpg" alt="Logo de certificación wis"></a>
						</div>
						<p><a href="<?php echo THEMEPATH; ?>docs/aviso-de-privacidad.pdf" target="_blank" class="color-blue-text text-underline-hover" title="Link a aviso de privacidad"><?php if( 'es' == $lang ) : ?>Aviso de privacidad<?php else : ?>Notice of Privacy<?php endif; ?></a><span class="color-blue-text"> | </span><a href="<?php echo SITEURL; ?>seccion/informes-anuales<?php if( 'en' == $lang ) : ?>/?lang=en<?php endif; ?>" class="color-blue-text text-underline-hover" title="Link a informes anuales"><?php if( 'es' == $lang ) : ?>Informes anuales<?php else : ?>Annual reports<?php endif; ?>
						</a></p>
						<div id="icons-redes-footer" class="hide-on-large-and-up">
							<a href="https://www.facebook.com/InstitutoIRMAac" target="_blank" class="btn-facebook" title="Link a facebook Grupo Irma"><em class="icon-facebook"></em></a>
							<a href="https://twitter.com/irmaac?lang=es" target="_blank" class="btn-twitter" title="Link a twitter Grupo Irma"><em class="icon-twitter"></em></a>
							<a href="https://www.instagram.com/instituto.irma/" target="_blank" class="btn-instagram" title="Link a instagram Grupo Irma"><em class="icon-instagram"></em></a>
							<a href="https://www.youtube.com/channel/UCky5f3UVRQkN2StorBb3ecw" target="_blank" class="btn-youtube" title="Link a youtube Grupo Irma"><em class="icon-youtube-play"></em></a>
						</div>							
					</div>
				</div>
			</footer>
		</div> <!-- end main-body -->
		<?php wp_footer(); ?>
	</body>
</html>