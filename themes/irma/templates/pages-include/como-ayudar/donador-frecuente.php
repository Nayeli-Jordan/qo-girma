<!-- <div id="formNecesitasAyuda" class="row row-complete">
	<div class="col s12 offset-sm6 sm6 offset-m8 m4">
		<label> Fecha*
		    [date* dona_fecha] </label>		
	</div>
	<div class="col s12"><p class="uppercase"><strong>Datos generales</strong></p></div>
	<div class="col s12 sm6">
		<label> Nombre(s)*
		    [text* dona_nombre] </label>		
	</div>
	<div class="col s12 sm6">
		<label> Apellidos*
		    [text* dona_apellidos] </label>		
	</div>
	<div class="col s12 sm6">
		<label> Calle y número*
		    [text* dona_calle] </label>		
	</div>
	<div class="col s12 sm6">
		<label> Colonia*
		    [text* dona_colonia] </label>		
	</div>
	<div class="col s12 sm6">
		<label> Delegación*
		    [text* dona_delegacion] </label>		
	</div>
	<div class="col s12 sm6">
		<label> Código Postal*
		    [number* dona_cp] </label>		
	</div>
	<div class="col s12 sm6">
		<label> País/Estado/Ciudad*
		    [text* dona_pais] </label>		
	</div>
	<div class="col s12 sm6">
		<label> Teléfono Casa*
		    [number* dona_tel] </label>		
	</div>
	<div class="col s12 sm6">
		<label> Celular*
		    [number* dona_cel] </label>		
	</div>
	<div class="col s12 sm6">
		<label> Correo electrónico*
		    [email* dona_email] </label>		
	</div>
	<div class="col s12 sm6">
		<label> Fecha de nacimiento*
		    [date* dona_nacimiento] </label>		
	</div>
	<div class="col s12"><p class="uppercase"><strong>Datos para recibo deducible de impuestos</strong></p></div>
	<div class="col s12 sm6">
		<label> Recibo a favor de*
		    [text* donador_nombre] </label>		
	</div>
	<div class="col s12 sm6">
		<label> Colonia*
		    [text* donador_colonia] </label>		
	</div>
	<div class="col s12 sm6">
		<label> Delegación*
		    [text* donador_delegacion] </label>		
	</div>
	<div class="col s12 sm6">
		<label> Código Postal*
		    [number* donador_cp] </label>		
	</div>
	<div class="col s12 sm6">
		<label> País/Estado/Ciudad*
		    [text* donador_pais] </label>		
	</div>
	<div class="col s12 sm6">
		<label> RFC*
		    [text* donador_rfc] </label>		
	</div>
	<div class="col s12"><p class="uppercase"><strong>Datos para recibo deducible de impuestos</strong></p></div>

	<div class="col s12">
		<label> ¿Cómo se entero del servicio?*
		     [select* dona_servicio include_blank "Folleto" "TV" "Portal de internet" "Facebook" "Twitter" "Recomendación" "Radio" "Sistema de transporte metro" "Otro"]</label>
	</div>
	<div class="col s12 text-right">
		[submit "Enviar"]
	</div>
</div>
 -->
<div class="row row-complete margin-top-xlarge">
	<form id="donador-form" action=""  method="post" class="validation" data-parsley-donacion>
		<div class="col s12 margin-top-bottom-small"><p class="uppercase color-pink"><strong>Datos generales</strong></p></div>
		<div class="col s12 sm6 m4 margin-bottom-small"> <!-- to do - agregar fecha -->
			<label for="gi_apellidoPaterno">Apellido paterno<span class="color-red">*</span>:</label>
			<input type="text" id="gi_apellidoPaterno" name="gi_apellidoPaterno" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_apellidoMaterno">Apellido materno<span class="color-red">*</span>:</label>
			<input type="text" id="gi_apellidoMaterno" name="gi_apellidoMaterno" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm12 m4 margin-bottom-small">
			<label for="gi_nombre">Nombre(s)<span class="color-red">*</span>:</label>
			<input type="text" id="gi_nombre" name="gi_nombre" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm12 m4 margin-bottom-small">
			<label for="gi_calle">Calle y número<span class="color-red">*</span>:</label>
			<input type="text" id="gi_calle" name="gi_calle" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_colonia">Colonia<span class="color-red">*</span>:</label>
			<input type="text" id="gi_colonia" name="gi_colonia" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_delegacion">Delegación<span class="color-red">*</span>:</label>
			<input type="text" id="gi_delegacion" name="gi_delegacion" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_cp">Código Postal<span class="color-red">*</span>:</label>
			<input type="number" id="gi_cp" name="gi_cp" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_pais">País/Estado/Ciudad<span class="color-red">*</span>:</label>
			<input type="text" id="gi_pais" name="gi_pais" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_tel">Teléfono Casa<span class="color-red">*</span>:</label>
			<input type="text" id="gi_tel" name="gi_tel" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_cel">Celular<span class="color-red">*</span>:</label>
			<input type="text" id="gi_cel" name="gi_cel" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_email">Correo Electrónico<span class="color-red">*</span>:</label>
			<input type="email" id="gi_email" name="gi_email" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_nacimiento">Fecha de Nacimiento<span class="color-red">*</span>:</label>
			<input type="date" id="gi_nacimiento" name="gi_nacimiento" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 margin-top-bottom-small"><p class="uppercase color-pink"><strong>Datos para recibo deducible de impuestos</strong></p></div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboNombre">Recibo a favor de<span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboNombre" name="gi_reciboNombre" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboColonia">Colonia<span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboColonia" name="gi_reciboColonia" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboDelegacion">Delegación<span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboDelegacion" name="gi_reciboDelegacion" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboCp">Código Postal<span class="color-red">*</span>:</label>
			<input type="number" id="gi_reciboCp" name="gi_reciboCp" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboPais">País/Estado<span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboPais" name="gi_reciboPais" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboRfc">RFC<span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboRfc" name="gi_reciboRfc" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 margin-top-bottom-small"><p class="uppercase color-pink"><strong>Datos del promotor</strong></p></div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_promotorNombre">Nombre<span class="color-red">*</span>:</label>
			<input type="text" id="gi_promotorNombre" name="gi_promotorNombre" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_promotorEmail">Correo Electrónico<span class="color-red">*</span>:</label>
			<input type="email" id="gi_promotorEmail" name="gi_promotorEmail" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_promotorTel">Teléfono<span class="color-red">*</span>:</label>
			<input type="text" id="gi_promotorTel" name="gi_promotorTel" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 margin-bottom">
			<p class="padding-top-bottom-xsmall padding-left-right-xsmall border-primary"><small>Solicito y autorizo al Banco Inbursa o aquella institución afiliada a Visa o MasterCard para que, con base en el contrato de apertura de crédito o el contrato de depósito cuenta corriente según corresponda, que tengo celebrado y respeto del cual se expidió la Tarjeta/Cuenta arriba citada, o en su caso el número de Tarjeta que por reposición de la anterior, por robo o extravío de la misma me haya asignado el Banco se sirvan por mi cuenta al INSTITUTO PARA LA REHABILITACIÓN DE LA MUJER Y LA FAMILIA A.C. los cargos por los conceptos, periodicidad y montos que se detallan liberando al Banco Inbursa, o cualquier institución afiliada a Visa o MasterCard de toda reclamación que se genere por parte del Tarjetahabiente. El Tarjetahabiente podrá revocar la Carta de Autorización mediante un comunicado por escrito con quince días naturales de anticipación dirigido al INSTITUTO PARA LA REHABILITACIÓN DE LA MUJER Y LA FAMILIA A.C., el cual anotará la fecha de su recepción con la firma y el nombre de quien recibe por el INSTITUTO PARA LA REHABILITACIÓN DE LA MUJER Y LA FAMILIA A.C. En este caso el INSTITUTO PARA LA REHABILITACIÓN DE LA MUJER Y LA   FAMILIA A.C.  deberá informar al Tarjeta/Cuentahabiente la fecha en que dejará de surtir efecto la presente carta de autorización. El donativo será cargado con periodicidad y monto especificados  a partir de la fecha mencionada y por tiempo indefinido por concepto de donativo siempre y cuando tenga saldo disponible.</small></p>			
		</div>
		<div class="col s12 text-right">
			<input type="submit" name="submitDonativo" class="btn inline-block_imp" value="Enviar" />
		</div>
	</form>	
</div>
 

							<?php /*if(isset($_POST['submitDonativo'])){

		    $to 				= "maescervantes@altoempleo.com.mx, pruebas@altoempleo.com.mx";
		    
		    $subject 			= "donacion Alto Empleo";

		    $donacionNombre 	= $_POST['donacionNombre'];
		    $donacionCorreo 	= $_POST['donacionCorreo'];
		    $donacionTelefono 	= $_POST['donacionTelefono'];
		    $donacionComentario = $_POST['donacionComentario'];		

			$message 			= '<html style="font-family: Arial, sans-serif; font-size: 14px;"><body>';
			$message 		   .= '<div style="text-align: center; background-color: #00B4EF; margin-bottom: 20px;"><img style="display: inline-block; margin: auto;" src="http://www.altoempleo.com.mx/wp-content/themes/alto-empleo/images/email/logo-light.png" alt="Logo Alto Empleo"></div>';
			$message 		   .= '<h1 style="display: block; margin-bottom: 20px; text-align: center;  font-size: 20px; font-weight: 700; color: #00B4EF; text-transform: uppercase;">donacion Alto Empleo</h1>';
			$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #00B4EF;">De: </span>' . $donacionNombre . '</p>';
			$message 			.= '<p style="color: #000;"><span style="text-transform: uppercase; font-weight: 600; color: #00B4EF;">Correo: </span>' . $donacionCorreo . '</p>';
			$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #00B4EF;">Tel&eacute;fono: </span>' . $donacionTelefono . '</p>';
			$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #00B4EF;">Comentario: </span>' . $donacionComentario . '</p>';
			$message 			.= '<div style="text-align: center; margin-bottom: 10px; margin-top: 20px;"><p><small>Este email fue enviado desde el formulario de donacion de Alto Empleo.</small></p></div>';
			$message 	        .= '<div style="text-align: center; margin-bottom: 20px;"><a style="color: #000; text-align: center; display: block;" href="' . SITEURL . '"><img style="display: inline-block; margin: auto;" src="http://www.altoempleo.com.mx/wp-content/themes/alto-empleo/images/email/logoae.png"></a></div>';
			$message 	        .= '</body></html>';

		    wp_mail($to, $subject, $message);*/


		    /* donacion como post */
			/*$title 		= 'donacion de ' . $donacionNombre;
			$content 	= 'De: ' . $donacionNombre . '<br>Correo: ' . $donacionCorreo . '<br>Teléfono: ' . $donacionTelefono . '<br>Comentario: ' . $donacionComentario;

			$post = array(
				'post_title'	=> wp_strip_all_tags($title),
				'post_content'	=> $content,
				'post_status'	=> 'publish',
				'post_type' 	=> 'ae_donacion'
			);

			$my_post_id = wp_insert_post($post); //send our post, save the resulting ID

		}*/
		?>