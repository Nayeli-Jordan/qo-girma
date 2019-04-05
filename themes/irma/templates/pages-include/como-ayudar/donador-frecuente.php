<?php 
	$lang = isset( $_GET['lang'] ) ? $_GET['lang'] : 'es'; /* Iniciar WPML */  
	if( 'es' == $lang ) : 
		$requiredMessage = "El campo es obligatorio.";
	else:
		$requiredMessage = "The field is required.";
	endif;
?>
<div class="row row-complete">
	<div class="bg-flor"></div>
	<form id="donador-form" action=""  method="post" class="validation" data-parsley-donacion>
		<div class="col s12 margin-top-bottom-small"><p class="color-pink"><strong><?php if( 'es' == $lang ) : ?>Datos generales<?php else: ?>General info<?php endif; ?></strong></p></div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_apellidoPaterno"><?php if( 'es' == $lang ) : ?>Apellido paterno<?php else: ?>Last name<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_apellidoPaterno" name="gi_apellidoPaterno" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<?php if( 'es' == $lang ) : ?>
			<div class="col s12 sm6 m4 margin-bottom-small">
				<label for="gi_apellidoMaterno">Apellido materno<span class="color-red">*</span>:</label>
				<input type="text" id="gi_apellidoMaterno" name="gi_apellidoMaterno" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
			</div>
		<?php endif; ?>
		<div class="col s12 sm12 m4 margin-bottom-small <?php if( 'en' == $lang ) : ?>m8<?php endif; ?>">
			<label for="gi_nombre"><?php if( 'es' == $lang ) : ?>Nombre(s)<?php else: ?>Name(s)<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_nombre" name="gi_nombre" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm12 m4 margin-bottom-small">
			<label for="gi_calle"><?php if( 'es' == $lang ) : ?>Calle y número<?php else: ?>
Street and number<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_calle" name="gi_calle" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_colonia"><?php if( 'es' == $lang ) : ?>Colonia<?php else: ?>Colony<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_colonia" name="gi_colonia" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_delegacion"><?php if( 'es' == $lang ) : ?>Delegación<?php else: ?>Delegation<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_delegacion" name="gi_delegacion" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_cp"><?php if( 'es' == $lang ) : ?>Código Postal<?php else: ?>Postal Code<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="number" id="gi_cp" name="gi_cp" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_pais"><?php if( 'es' == $lang ) : ?>País/Estado/Ciudad<?php else: ?>Country/State/City<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_pais" name="gi_pais" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_tel"><?php if( 'es' == $lang ) : ?>Teléfono Casa<?php else: ?>Phone<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_tel" name="gi_tel" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_cel"><?php if( 'es' == $lang ) : ?>Celular<?php else: ?>Cell phone<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_cel" name="gi_cel" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_email"><?php if( 'es' == $lang ) : ?>Correo Electrónico<?php else: ?>Email<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="email" id="gi_email" name="gi_email" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_nacimiento"><?php if( 'es' == $lang ) : ?>Fecha de Nacimiento<?php else: ?>Birthdate<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="date" id="gi_nacimiento" name="gi_nacimiento" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 margin-top-bottom-small"><p class="color-pink"><strong><?php if( 'es' == $lang ) : ?>Datos para recibo deducible de impuestos<?php else: ?>Data for the tax-deductible receipt<?php endif; ?></strong></p></div>
		<div class="col s12 margin-bottom-small">
			<label for="gi_reciboNombre"><?php if( 'es' == $lang ) : ?>Recibo a favor de<?php else: ?>Receive a favor from<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboNombre" name="gi_reciboNombre" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboRfc">RFC<span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboRfc" name="gi_reciboRfc" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboCalle"><?php if( 'es' == $lang ) : ?>Calle y número<?php else: ?>Street and number<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboCalle" name="gi_reciboCalle" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboColonia"><?php if( 'es' == $lang ) : ?>Colonia<?php else: ?>Colony<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboColonia" name="gi_reciboColonia" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboDelegacion"><?php if( 'es' == $lang ) : ?>Delegación/Municipio<?php else: ?>Delegation/Municipality<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboDelegacion" name="gi_reciboDelegacion" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboCp"><?php if( 'es' == $lang ) : ?>Código Postal<?php else: ?>Postal code<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="number" id="gi_reciboCp" name="gi_reciboCp" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboPais"><?php if( 'es' == $lang ) : ?>País/Estado<?php else: ?>Country/State<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboPais" name="gi_reciboPais" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12">
			<p class="info-donation"><small>Solicito y autorizo al banco Inbursa o aquella institución afiliada a Visa o MasterCard para que, con base en el contrato de apertura de crédito o el contrato de depósito cuenta corriente según corresponda, que tengo celebrado y respeto del cual se expidió la Tarjeta/Cuenta arriba citada, o en su caso el número de Tarjeta que por reposición de la anterior, por robo o extravío de la misma me haya asignado el Banco se sirva por mi cuenta al INSTITUTO PARA LA REABILITACIÓN DE LA MUJER Y LA FAMILIA A.C. los cargos por los conceptos, periocidad y montos que se datallan liberando al Banco Inbursa, o cualquier institución afiliada a Visa o Masterd Card de toda reclamación que se genere por parte del Tarjetahabiente. El Tarjetahabiente podrá revocar la Carta de Autorización mediante un comunicado por escrito con quince días naturales de anticipación dirigido al INSTITUTO PARA LA REABILITACIÓN DE LA MUJER Y LA FAMILIA A.C., El cual anotará la fecha de su recepción con la firma y el nombre de quien recibe por el INSTITUTO PARA LA REABILITACIÓN DE LA MUJER Y LA FAMILIA A.C. En este caso el INSTITUTO PARA LA REABILITACIÓN DE LA MUJER Y LA FAMILIA A.C. deberá informar al Tarjeta/Cuentahabiente la fecha en que dejará de surtir efecto la presente carta de autorización.<br>El donativo será cargado con periocidad y monto especificados a partir de la fecha mencionada y por tiempo indefinido por concepto de donativo siempre y cuando tenga saldo disponible.</small></p>
		</div>
		<div class="col s12 margin-top-bottom-small"><p class="color-pink"><strong><?php if( 'es' == $lang ) : ?>Datos para donativo | Tarjeta de Crédito/Débito o cuenta de cheques<?php else: ?>Donation data | Credit/Debit Card or checking account<?php endif; ?></strong></p></div>
		<div class="col s12 m6 margin-bottom-small">
			<label for="gi_noTarjeta"><?php if( 'es' == $lang ) : ?>No. de tarjeta de crédito o débito<?php else: ?>No. of credit or debit card<?php endif; ?>:</label>
			<input type="text" id="gi_noTarjeta" name="gi_noTarjeta">
		</div>
		<div class="col s12 m6 margin-bottom-small">
			<label for="gi_clabe"><?php if( 'es' == $lang ) : ?>Cuenta CLABE<?php else: ?>Key account<?php endif; ?>:</label>
			<input type="text" id="gi_clabe" name="gi_clabe">
		</div>
		<div class="col s12 m4 margin-bottom-small clearfix">
			<label for="gi_tarjeta"><?php if( 'es' == $lang ) : ?>Tarjeta<?php else: ?>Card<?php endif; ?>:</label>
			<select id="gi_tarjeta" name="gi_tarjeta">
				<option value=""></option>
				<option value="Visa">Visa</option>
				<option value="MasterCard">MasterCard</option>
				<option value="AmericanExpress">AmericanExpress</option>
			</select>
		</div>
		<div class="col s12 margin-bottom-small hide-on-med-and-up"><label for="gi_vencimiento"><?php if( 'es' == $lang ) : ?>Fecha de vencimiento<?php else: ?>Expiration date<?php endif; ?>:</label></div>
		<div class="col s6 m4 margin-bottom-small">
			<label for="gi_vencimientoMes" class="hide-on-sm-and-down"><?php if( 'es' == $lang ) : ?>Fecha de vencimiento<?php else: ?>Expiration date<?php endif; ?>:</label>
			<select id="gi_vencimientoMes" name="gi_vencimientoMes">
				<option value=""></option>
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>
		</div>
		<div class="col s6 m4 margin-bottom-small"><br class="hide-on-sm-and-down">
			<select id="gi_vencimientoAno" name="gi_vencimientoAno">
				<option value=""></option>
				<?php 
				$count = 1;
				$today = date("Y");
                while ( $count <= 6) { ?>
                    <option value="<?php echo $today; ?>" ><?php echo $today; ?></option>
                <?php 
                	$count = $count + 1;
                	$today = $today + 1;
                } ?>
			</select>			
		</div>	
		<div class="col s12 sm6 m4 margin-bottom-small clearfix">
			<label for="gi_mensual"><?php if( 'es' == $lang ) : ?>Cantidad mensual<?php else: ?>Monthly amount<?php endif; ?>:</label>
			<select id="gi_mensual" name="gi_mensual">
				<option value=""></option>
				<option value="300">$300.00 mensuales</option>
				<option value="400">$400.00 mensuales</option>
				<option value="500">$500.00 mensuales</option>
				<option value="otro">Otro importe</option>
			</select>			
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_importe"><?php if( 'es' == $lang ) : ?>Otro importe<?php else: ?>Other amount<?php endif; ?>:</label>
			<input type="text" id="gi_importe" name="gi_importe" placeholder="Cantidad mensual">
		</div>
		<div class="col s12 m4 margin-bottom-small">
			<label for="gi_banco"><?php if( 'es' == $lang ) : ?>Banco emisor<?php else: ?>Issuing bank<?php endif; ?>:</label>
			<input type="text" id="gi_banco" name="gi_banco">
		</div>		
		<div class="col s12 m12 margin-bottom-small">
			<label for="gi_nombreTitular"><?php if( 'es' == $lang ) : ?>Nombre en la tarjeta o del titular en la cuenta de cheques<?php else: ?>Name on the card or the holder in the current account<?php endif; ?>:</label>
			<input type="text" id="gi_nombreTitular" name="gi_nombreTitular">
		</div>
		<div class="col s12 text-right">
			<?php if( 'es' == $lang ) :
				$valueButton = 'Enviar';
			else:
				$valueButton = 'Send';
			endif; ?>
			<input type="submit" name="submitDonativo" class="btn inline-block_imp" value="<?php echo $valueButton; ?>" />
		</div>
	</form>	
	<p class="col s12 fz-large margin-top-large">"Muchas gracias por ayudarnos a construir mejores familias".</p>
</div>

<?php if(isset($_POST['submitDonativo'])){

    $to 				= "pruebas@altoempleo.com.mx";    
    $subject 			= "Pre-registro Donador frecuente";	

    $apellidoPaterno    = $_POST['gi_apellidoPaterno'];
    $apellidoMaterno    = $_POST['gi_apellidoMaterno'];
    $nombre             = $_POST['gi_nombre'];
    $calle              = $_POST['gi_calle'];
    $colonia            = $_POST['gi_colonia'];
    $delegacion         = $_POST['gi_delegacion']; 
    $cp                 = $_POST['gi_cp'];
    $pais               = $_POST['gi_pais'];
    $tel                = $_POST['gi_tel'];
    $cel                = $_POST['gi_cel'];
    $email              = $_POST['gi_email'];
    $nacimiento         = $_POST['gi_nacimiento'];
    $reciboNombre       = $_POST['gi_reciboNombre'];
    $reciboRfc          = $_POST['gi_reciboRfc'];
    $reciboCalle      	= $_POST['gi_reciboCalle'];
    $reciboColonia      = $_POST['gi_reciboColonia'];
    $reciboDelegacion   = $_POST['gi_reciboDelegacion'];
    $reciboCp           = $_POST['gi_reciboCp'];
    $reciboPais         = $_POST['gi_reciboPais'];

	$noTarjeta         = $_POST['gi_noTarjeta'];
    $clabe              = $_POST['gi_clabe'];
    $tarjeta            = $_POST['gi_tarjeta'];
    $vencimientoMes     = $_POST['gi_vencimientoMes'];
    $vencimientoAno     = $_POST['gi_vencimientoAno'];
    $mensual            = $_POST['gi_mensual'];
    $importe            = $_POST['gi_importe'];
    $banco              = $_POST['gi_banco'];
    $nombreTitular      = $_POST['gi_nombreTitular'];

	$message 			= '<html style="font-family: Arial, sans-serif; font-size: 14px;"><body>';	
	$message 	        .= '<div style="text-align: center; margin-bottom: 20px;"><a style="color: #000; text-align: center; display: block;" href="' . SITEURL . '"><img style="display: inline-block; margin: auto;" src="http://localhost:8888/irma/wp-content/themes/irma/images/identidad/logo.png"></a></div>';
	$message 		   .= '<h1 style="display: block; margin-bottom: 20px; text-align: center;  font-size: 20px; font-weight: 700; color: #325192; text-transform: uppercase;">Nuevo pre-registro de donador frecuente</h1>';
	$message 			.= '<p style="font-weight: 600; color: #c24871;">DATOS GENERALES</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Apellido Paterno: </span>' . $apellidoPaterno . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Apellido Materno: </span>' . $apellidoMaterno . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Nombre(s): </span>' . $nombre . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Calle y número: </span>' . $calle . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Colonia: </span>' . $colonia . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Delegación: </span>' . $delegacion . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Código Postal: </span>' . $cp . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">País/Estado/Ciudad: </span>' . $pais . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Teléfono Casa: </span>' . $tel . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Celular: </span>' . $cel . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Correo Electrónico: </span>' . $email . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Fecha de Nacimiento: </span>' . $nacimiento . '</p><br><br>';
	$message 			.= '<p style="font-weight: 600; color: #c24871;">DATOS PARA RECIBO DEDUCIBLE DE IMPUESTOS</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Recibo a favor de: </span>' . $reciboNombre . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">RFC: </span>' . $reciboRfc . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Calle: </span>' . $reciboCalle . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Colonia: </span>' . $reciboColonia . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Delegación: </span>' . $reciboDelegacion . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Código Postal: </span>' . $reciboCp . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">País/Estado: </span>' . $reciboPais . '</p><br><br>';
	$message 			.= '<p style="font-weight: 600; color: #c24871;">DATOS PARA DONATIVO | TARJETA DE CRÉDITO/DÉBITO O CUENTA DE CHEQUES</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">No. de tarjeta de crédito o débito: </span>' . $noTarjeta . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Cuenta CLABE: </span>' . $clabe . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Tarjeta: </span>' . $tarjeta . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Fecha de vencimiento: </span>' . $vencimientoMes . '/' . $vencimientoAno . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Cantidad mensual: </span>' . $mensual . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Otro importe: </span>' . $importe . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Banco emisor: </span>' . $banco . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">País/Estado: </span>' . $nombreTitular . '</p>';
	$message 			.= '<div style="text-align: center; margin-bottom: 10px; margin-top: 20px;"><p><small>Este email fue enviado desde el formulario de donaciones frecuentes de Irma.</small></p></div>';
	$message 	        .= '</body></html>';

    wp_mail($to, $subject, $message);


    /* Donación como post en Donador Fracuente*/
	$title 		= 'Registro de ' . $nombre . ' ' . $apellidoPaterno . ' ' . $apellidoMaterno;

	$post = array(
		'post_title'	=> wp_strip_all_tags($title),
		'post_status'	=> 'publish',
		'post_type' 	=> 'gi_donador_frecuente'
	);

	$my_post_id = wp_insert_post($post);

	update_post_meta($my_post_id,'gi_donador_frecuente_apellidoPaterno', $apellidoPaterno);
    update_post_meta($my_post_id,'gi_donador_frecuente_apellidoMaterno', $apellidoMaterno);
    update_post_meta($my_post_id,'gi_donador_frecuente_nombre', $nombre);
    update_post_meta($my_post_id,'gi_donador_frecuente_calle', $calle);
    update_post_meta($my_post_id,'gi_donador_frecuente_colonia', $colonia);
    update_post_meta($my_post_id,'gi_donador_frecuente_delegacion', $delegacion);
    update_post_meta($my_post_id,'gi_donador_frecuente_cp', $cp);
    update_post_meta($my_post_id,'gi_donador_frecuente_pais', $pais);
    update_post_meta($my_post_id,'gi_donador_frecuente_tel', $tel);
    update_post_meta($my_post_id,'gi_donador_frecuente_cel', $cel);
    update_post_meta($my_post_id,'gi_donador_frecuente_email', $email);
    update_post_meta($my_post_id,'gi_donador_frecuente_nacimiento', $nacimiento);
    update_post_meta($my_post_id,'gi_donador_frecuente_reciboNombre', $reciboNombre);
    update_post_meta($my_post_id,'gi_donador_frecuente_reciboRfc', $reciboRfc);
    update_post_meta($my_post_id,'gi_donador_frecuente_reciboCalle', $reciboCalle);
    update_post_meta($my_post_id,'gi_donador_frecuente_reciboColonia', $reciboColonia);
    update_post_meta($my_post_id,'gi_donador_frecuente_reciboDelegacion', $reciboDelegacion);
    update_post_meta($my_post_id,'gi_donador_frecuente_reciboCp', $reciboCp);
    update_post_meta($my_post_id,'gi_donador_frecuente_reciboPais', $reciboPais);
	update_post_meta($my_post_id,'gi_donador_frecuente_noTarjeta', $noTarjeta);
	update_post_meta($my_post_id,'gi_donador_frecuente_clabe', $clabe);
	update_post_meta($my_post_id,'gi_donador_frecuente_tarjeta', $tarjeta);
	update_post_meta($my_post_id,'gi_donador_frecuente_vencimientoMes', $vencimientoMes);
	update_post_meta($my_post_id,'gi_donador_frecuente_vencimientoAno', $vencimientoAno);
	update_post_meta($my_post_id,'gi_donador_frecuente_mensual', $mensual);
	update_post_meta($my_post_id,'gi_donador_frecuente_importe', $importe);
	update_post_meta($my_post_id,'gi_donador_frecuente_banco', $banco);
	update_post_meta($my_post_id,'gi_donador_frecuente_nombreTitular', $nombreTitular);
} ?>