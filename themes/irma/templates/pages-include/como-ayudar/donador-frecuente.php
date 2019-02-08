<?php 
	$lang = isset( $_GET['lang'] ) ? $_GET['lang'] : 'es'; /* Iniciar WPML */  
	if( 'es' == $lang ) : 
		$requiredMessage = "El campo es obligatorio.";
	else:
		$requiredMessage = "The field is required.";
	endif;
?>
<div class="row row-complete">
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
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboNombre"><?php if( 'es' == $lang ) : ?>Recibo a favor de<?php else: ?>Receive a favor from<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboNombre" name="gi_reciboNombre" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboColonia"><?php if( 'es' == $lang ) : ?>Colonia<?php else: ?>Colony<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboColonia" name="gi_reciboColonia" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboDelegacion"><?php if( 'es' == $lang ) : ?>Delegación<?php else: ?>Delegation<?php endif; ?><span class="color-red">*</span>:</label>
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
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_reciboRfc">RFC<span class="color-red">*</span>:</label>
			<input type="text" id="gi_reciboRfc" name="gi_reciboRfc" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 margin-top-bottom-small"><p class="color-pink"><strong><?php if( 'es' == $lang ) : ?>Datos del promotor<?php else: ?>Promoter data<?php endif; ?></strong></p></div>
		<div class="col s12 m4 margin-bottom-small">
			<label for="gi_promotorNombre"><?php if( 'es' == $lang ) : ?>Nombre<?php else: ?>Name<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_promotorNombre" name="gi_promotorNombre" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_promotorEmail"><?php if( 'es' == $lang ) : ?>Correo Electrónico<?php else: ?>Email<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="email" id="gi_promotorEmail" name="gi_promotorEmail" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
		</div>
		<div class="col s12 sm6 m4 margin-bottom-small">
			<label for="gi_promotorTel"><?php if( 'es' == $lang ) : ?>Teléfono<?php else: ?>Phone<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_promotorTel" name="gi_promotorTel" required data-parsley-required-message="<?php echo $requiredMessage; ?>">
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
    $reciboColonia      = $_POST['gi_reciboColonia'];
    $reciboDelegacion   = $_POST['gi_reciboDelegacion'];
    $reciboCp           = $_POST['gi_reciboCp'];
    $reciboPais         = $_POST['gi_reciboPais'];
    $reciboRfc          = $_POST['gi_reciboRfc'];
    $promotorNombre     = $_POST['gi_promotorNombre'];
    $promotorEmail      = $_POST['gi_promotorEmail'];
    $promotorTel        = $_POST['gi_promotorTel'];

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
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Colonia: </span>' . $reciboColonia . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Delegación: </span>' . $reciboDelegacion . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Código Postal: </span>' . $reciboCp . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">País/Estado: </span>' . $reciboPais . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">RFC: </span>' . $reciboRfc . '</p><br><br>';
	$message 			.= '<p style="font-weight: 600; color: #c24871;">DATOS DEL PROMOTOR</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Nombre: </span>' . $promotorNombre . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Correo Electrónico: </span>' . $promotorEmail . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Teléfono: </span>' . $promotorTel . '</p>';
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
    update_post_meta($my_post_id,'gi_donador_frecuente_reciboColonia', $reciboColonia);
    update_post_meta($my_post_id,'gi_donador_frecuente_reciboDelegacion', $reciboDelegacion);
    update_post_meta($my_post_id,'gi_donador_frecuente_reciboCp', $reciboCp);
    update_post_meta($my_post_id,'gi_donador_frecuente_reciboPais', $reciboPais);
    update_post_meta($my_post_id,'gi_donador_frecuente_reciboRfc', $reciboRfc);
    update_post_meta($my_post_id,'gi_donador_frecuente_promotorNombre', $promotorNombre);
    update_post_meta($my_post_id,'gi_donador_frecuente_promotorEmail', $promotorEmail);
    update_post_meta($my_post_id,'gi_donador_frecuente_promotorTel', $promotorTel);
} ?>