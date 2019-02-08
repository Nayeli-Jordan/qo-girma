<?php 
	$lang = isset( $_GET['lang'] ) ? $_GET['lang'] : 'es'; /* Iniciar WPML */  
	if( 'es' == $lang ) : 
		$requiredMessage = "El campo es obligatorio.";
	else:
		$requiredMessage = "The field is required.";
	endif;
?>
<div class="row row-complete margin-top-large">
	<form id="necesitasAyuda-form" action=""  method="post" class="validation" data-parsley-nayuda>
		<div class="col s12 sm6 margin-bottom-small">
			<label for="gi_nombre"><?php if( 'es' == $lang ) : ?>Nombre Completo<?php else: ?>Full name<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_nombre" name="gi_nombre" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 margin-bottom-small">
			<label for="gi_email"><?php if( 'es' == $lang ) : ?>Correo electrónico<?php else: ?>Email<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="email" id="gi_email" name="gi_email" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 margin-bottom-small">
			<label for="gi_escolaridad"><?php if( 'es' == $lang ) : ?>Escolaridad<?php else: ?>Education<?php endif; ?><span class="color-red">*</span>:</label>
			<select id="gi_escolaridad" name="gi_escolaridad" required data-parsley-required-message="El campo es obligatorio.">
				<option value="" selected="selected"></option>
				<option value="Primaria">Primaria</option>
				<option value="Secundaria">Secundaria</option>
				<option value="Bachillerato">Bachillerato</option>
				<option value="Carrera técnica">Carrera técnica</option>
				<option value="Licenciatura">Licenciatura</option>
				<option value="Posgrado">Posgrado</option>
			</select>
		</div>
		<div class="col s12 sm6 margin-bottom-small">
			<label for="gi_ocupacion"><?php if( 'es' == $lang ) : ?>Ocupación<?php else: ?>Occupation<?php endif; ?><span class="color-red">*</span>:</label>
			<select id="gi_ocupacion" name="gi_ocupacion" required data-parsley-required-message="El campo es obligatorio.">
				<option value="" selected="selected"></option>
				<option value="Hogar">Hogar</option>
				<option value="Empleado">Empleado</option>
				<option value="Estudiante">Estudiante</option>
				<option value="Profesionista">Profesionista</option>
				<option value="Desempleado">Desempleado</option>
			</select>
		</div>
		<div class="col s12 sm6 margin-bottom-small">
			<label for="gi_edad"><?php if( 'es' == $lang ) : ?>	Edad<?php else: ?>Age<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="number" id="gi_edad" name="gi_edad" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 sm6 margin-bottom-small">
			<label for="gi_ciudad"><?php if( 'es' == $lang ) : ?>Ciudad, delegación, estado o municipio<?php else: ?>City, delegation, state or municipality<?php endif; ?><span class="color-red">*</span>:</label>
			<input type="text" id="gi_ciudad" name="gi_ciudad" required data-parsley-required-message="El campo es obligatorio.">
		</div>
		<div class="col s12 margin-bottom-small">
			<label for="gi_entero"><?php if( 'es' == $lang ) : ?>¿Cómo se entero del servicio?<?php else: ?>How did you find out about the service?<?php endif; ?><span class="color-red">*</span>:</label>
			<select id="gi_entero" name="gi_entero" required data-parsley-required-message="El campo es obligatorio.">
				<option value="" selected="selected"></option>
				<option value="Folleto">Folleto</option>
				<option value="TV">TV</option>
				<option value="Portal de internet">Portal de internet</option>
				<option value="Facebook">Facebook</option>
				<option value="Twitter">Twitter</option>
				<option value="Recomendación">Recomendación</option>
				<option value="Radio">Radio</option>
				<option value="Sistema de transporte metro">Sistema de transporte metro</option>
				<option value="La vida por delante">La vida por delante</option>
				<option value="Otro">Otro</option>
			</select>
		</div>
		<div class="col s12 margin-bottom-small">
			<label for="gi_comentario"><?php if( 'es' == $lang ) : ?>Comentario<?php else: ?>Commentary<?php endif; ?><span class="color-red">*</span>:</label>
			<textarea id="gi_comentario" name="gi_comentario" required data-parsley-required-message="El campo es obligatorio."></textarea>
		</div>
		<div class="col s12 text-right">
			<?php if( 'es' == $lang ) :
				$valueButton = 'Enviar';
			else:
				$valueButton = 'Send';
			endif; ?>
			<input type="submit" name="submitNAyuda" class="btn inline-block_imp" value="<?php echo $valueButton; ?>" />
		</div>
	</form>	
</div>
<div class="text-center margin-top-xlarge">
	<em class="icon-phone icon-xlarge margin-bottom-xxsmall block"></em>
	<h3><?php if( 'es' == $lang ) : ?>Llámanos:<?php else: ?>Call us<?php endif; ?></h3>
	<p><?php if( 'es' == $lang ) : ?>México<?php else: ?>Mexico<?php endif; ?>: 5260 3178 / 5260 8859 <br>01 800 911 IRMA (4762)</p>	
</div>

<?php if(isset($_POST['submitNAyuda'])){

    $to 				= "pruebas@altoempleo.com.mx";    
    $subject 			= "Contacto Necesitas Ayuda";	

    $nombre    			= $_POST['gi_nombre'];
    $email    			= $_POST['gi_email'];
    $escolaridad        = $_POST['gi_escolaridad'];
    $ocupacion          = $_POST['gi_ocupacion'];
    $edad         		= $_POST['gi_edad']; 
    $ciudad             = $_POST['gi_ciudad'];
    $entero             = $_POST['gi_entero'];
    $comentario         = $_POST['gi_comentario'];

	$message 			= '<html style="font-family: Arial, sans-serif; font-size: 14px;"><body>';	
	$message 	        .= '<div style="text-align: center; margin-bottom: 20px;"><a style="color: #000; text-align: center; display: block;" href="' . SITEURL . '"><img style="display: inline-block; margin: auto;" src="http://localhost:8888/irma/wp-content/themes/irma/images/identidad/logo.png"></a></div>';
	$message 		   .= '<h1 style="display: block; margin-bottom: 20px; text-align: center;  font-size: 20px; font-weight: 700; color: #c24871; text-transform: uppercase;">Contacto Necesitas Ayuda</h1>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Nombre completo: </span>' . $nombre . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Correo eléctronico: </span>' . $email . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Escolaridad: </span>' . $escolaridad . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Ocupacion: </span>' . $ocupacion . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Edad: </span>' . $edad . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Ciudad, delegación, estado o municipio: </span>' . $ciudad . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">¿Cómo se entero del servicio?: </span>' . $entero . '</p>';
	$message 			.= '<p><span style="text-transform: uppercase; font-weight: 600; color: #325192;">Comentario: </span>' . $comentario . '</p>';
	$message 			.= '<div style="text-align: center; margin-bottom: 10px; margin-top: 20px;"><p><small>Este email fue enviado desde el formulario de "Necesitas Ayuda" de Irma.</small></p></div>';
	$message 	        .= '</body></html>';

    wp_mail($to, $subject, $message);


    /* Donación como post en Donador Fracuente*/
	$title 		= 'Contacto de ' . $nombre;

	$post = array(
		'post_title'	=> wp_strip_all_tags($title),
		'post_status'	=> 'publish',
		'post_type' 	=> 'gi_necesitas_ayuda'
	);

	$my_post_id = wp_insert_post($post);

	update_post_meta($my_post_id,'gi_necesitas_ayuda_nombre', $nombre);
    update_post_meta($my_post_id,'gi_necesitas_ayuda_email', $email);
    update_post_meta($my_post_id,'gi_necesitas_ayuda_escolaridad', $escolaridad);
    update_post_meta($my_post_id,'gi_necesitas_ayuda_ocupacion', $ocupacion);
    update_post_meta($my_post_id,'gi_necesitas_ayuda_edad', $edad);
    update_post_meta($my_post_id,'gi_necesitas_ayuda_ciudad', $ciudad);
    update_post_meta($my_post_id,'gi_necesitas_ayuda_entero', $entero);
    update_post_meta($my_post_id,'gi_necesitas_ayuda_comentario', $comentario);
} ?>