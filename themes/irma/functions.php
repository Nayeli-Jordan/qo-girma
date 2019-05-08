<?php 

/**
* Define paths to javascript, styles, theme and site.
**/
define( 'JSPATH', get_stylesheet_directory_uri() . '/js/' );
define( 'THEMEPATH', get_stylesheet_directory_uri() . '/' );
define( 'SITEURL', get_site_url() . '/' );


/*------------------------------------*\
	#SNIPPETS
\*------------------------------------*/
require_once( 'inc/pages.php' );
require_once( 'inc/post-types.php' );
require_once( 'inc/taxonomies.php' );

/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

/**
* Enqueue frontend scripts and styles
**/
add_action( 'wp_enqueue_scripts', function(){
 
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(''), '2.1.1', true );
    wp_enqueue_script( 'irma_parsley', JSPATH.'parsley.min.js', array(), '1.0', true );
	wp_enqueue_script( 'irma_functions', JSPATH .'functions.js', array(), '1.0', true );
 
	wp_localize_script( 'irma_functions', 'siteUrl', SITEURL );
	wp_localize_script( 'irma_functions', 'theme_path', THEMEPATH );

    wp_localize_script( 'qo_functions', 'siteUrl', SITEURL );
    wp_localize_script( 'qo_functions', 'theme_path', THEMEPATH );
    
    $is_home = is_front_page() ? "1" : "0";
    wp_localize_script( 'qo_functions', 'isHome', $is_home );
 
});

/**
* Configuraciones WP
*/

// Agregar css y js al administrador
function load_custom_files_wp_admin() {
        wp_register_style( 'irma_wp_admin_css', THEMEPATH . '/admin/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'irma_wp_admin_css' );

        wp_register_script( 'irma_wp_admin_js', THEMEPATH . 'admin/admin-script.js', false, '1.0.0' );
        wp_enqueue_script( 'irma_wp_admin_js' );        
}
add_action( 'admin_enqueue_scripts', 'load_custom_files_wp_admin' );

//Habilitar thumbnail en post
add_theme_support( 'post-thumbnails' ); 

//Habilitar menú (aparece en personalizar)
add_action('after_setup_theme', 'add_top_menu');
function add_top_menu(){
	register_nav_menu('top_menu',__('Top menu'));
	register_nav_menu('quienes-somos',__('Quienes somos'));
	register_nav_menu('que-hacemos',__('Que hacemos'));
    register_nav_menu('como-ayudar',__('Como ayudar'));
	register_nav_menu('necesitas-ayuda',__('Necesitas ayuda'));
}

//Delimitar número palabras excerpt
/*function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );*/


/**
* Optimización
*/

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/**
* SEO y Analitics
**/

//Código Analitics
// function add_google_analytics() {
//     echo '<script src="https://www.google-analytics.com/ga.js" type="text/javascript"></script>';
//     echo '<script type="text/javascript">';
//     echo 'var pageTracker = _gat._getTracker("UA-117075138-1");';
//     echo 'pageTracker._trackPageview();';
//     echo '</script>';
// }
// add_action('wp_footer', 'add_google_analytics');

/* Aplaza el análisis de JavaScript para una carga más rápida */
if(!is_admin()) {
    // Move all JS from header to footer
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}


/* Send mail by SMTP */
add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->Username   = SMTP_USERNAME;
    $phpmailer->Password   = SMTP_PASSWORD;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_FROMNAME;
}

/* $message wp_mail in html (not text/plain) */
function transforme_content_type(){
    return "text/html";
}
add_filter( 'wp_mail_content_type','transforme_content_type' );


//Hide item admin menu for certain user profile
function gi_remove_menu_items() {
    remove_menu_page('edit.php'); // Posts     
    remove_menu_page('edit.php?post_type=page'); // Pages
    remove_menu_page('edit-comments.php'); // Comments
    //Editor
    if( current_user_can( 'contributor' ) ):
        remove_menu_page( 'edit.php?post_type=seccion' );
        remove_menu_page('tools.php'); // Tools
    endif;    
}
add_action( 'admin_menu', 'gi_remove_menu_items' );

/**
************ CUSTOM FUNCTIONS *************
*/

/*
** VIDEOS HOME
*/
add_action( 'add_meta_boxes', 'gi_video_custom_metabox' );
function gi_video_custom_metabox(){
    add_meta_box( 'gi_video_meta', 'Detalles video', 'display_gi_video_atributos', 'gi_video', 'advanced', 'default');
}

function display_gi_video_atributos( $gi_video ){
    $videoLink       = esc_html( get_post_meta( $gi_video->ID, 'gi_video_videoLink', true ) );
?>
    <table class="gi-custom-fields">
        <tr>
            <th>
                <label for="gi_video_videoLink">Dirección*:</label>
                <input type="text" id="gi_video_videoLink" name="gi_video_videoLink" value="<?php echo $videoLink; ?>" required>
            </th>
        </tr>
    </table>
<?php }

add_action( 'save_post', 'gi_video_save_metas', 10, 2 );
function gi_video_save_metas( $idgi_video, $gi_video ){
    if ( $gi_video->post_type == 'gi_video' ){
        if ( isset( $_POST['gi_video_videoLink'] ) ){
            update_post_meta( $idgi_video, 'gi_video_videoLink', $_POST['gi_video_videoLink'] );
        }
    }
}

/*
** Artículos
*/
add_action( 'add_meta_boxes', 'gi_articulo_custom_metabox' );
function gi_articulo_custom_metabox(){
    add_meta_box( 'gi_articulo_meta', 'URL Artículo', 'display_gi_articulo_atributos', 'gi_articulo', 'advanced', 'default');
}

function display_gi_articulo_atributos( $gi_articulo ){
    $url       = esc_html( get_post_meta( $gi_articulo->ID, 'gi_articulo_url', true ) );
?>
    <table class="gi-custom-fields">
        <tr>
            <th>
                <label for="gi_articulo_url">URL*:</label>
                <input type="text" name="gi_articulo_url" id="gi_articulo_url" class="meta-image" value="<?php echo $url; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </th>
        </tr>
    </table>
<?php }

add_action( 'save_post', 'gi_articulo_save_metas', 10, 2 );
function gi_articulo_save_metas( $idgi_articulo, $gi_articulo ){
    if ( $gi_articulo->post_type == 'gi_articulo' ){
        if ( isset( $_POST['gi_articulo_url'] ) ){
            update_post_meta( $idgi_articulo, 'gi_articulo_url', $_POST['gi_articulo_url'] );
        }
    }
}

/*
** Informes anuales
*/
add_action( 'add_meta_boxes', 'gi_informe_anual_custom_metabox' );
function gi_informe_anual_custom_metabox(){
    add_meta_box( 'gi_informe_anual_meta', 'URL Informe Anual', 'display_gi_informe_anual_atributos', 'gi_informe_anual', 'advanced', 'default');
}

function display_gi_informe_anual_atributos( $gi_informe_anual ){
    $url       = esc_html( get_post_meta( $gi_informe_anual->ID, 'gi_informe_anual_url', true ) );
?>
    <table class="gi-custom-fields">
        <tr>
            <th>
                <label for="gi_informe_anual_url">URL*:</label>
                <input type="text" name="gi_informe_anual_url" id="gi_informe_anual_url" class="meta-image" value="<?php echo $url; ?>" required>
                <input type="button" class="button image-upload" value="Seleccionar">
            </th>
        </tr>
    </table>
<?php }

add_action( 'save_post', 'gi_informe_anual_save_metas', 10, 2 );
function gi_informe_anual_save_metas( $idgi_informe_anual, $gi_informe_anual ){
    if ( $gi_informe_anual->post_type == 'gi_informe_anual' ){
        if ( isset( $_POST['gi_informe_anual_url'] ) ){
            update_post_meta( $idgi_informe_anual, 'gi_informe_anual_url', $_POST['gi_informe_anual_url'] );
        }
    }
}


/*
** DONADOR FRECUENTE
*/
add_action( 'add_meta_boxes', 'gi_donador_frecuente_custom_metabox' );
function gi_donador_frecuente_custom_metabox(){
    add_meta_box( 'gi_donador_frecuente_meta', 'Información Donador Frecuente', 'display_gi_donador_frecuente_atributos', 'gi_donador_frecuente', 'advanced', 'default');
}

function display_gi_donador_frecuente_atributos( $gi_donador_frecuente ){
    $apellidoPaterno    = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_apellidoPaterno', true ) );
    $apellidoMaterno    = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_apellidoMaterno', true ) );
    $nombre             = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_nombre', true ) );
    $calle              = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_calle', true ) );
    $colonia            = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_colonia', true ) );
    $delegacion         = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_delegacion', true ) );
    $cp                 = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_cp', true ) );
    $pais               = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_pais', true ) );
    $tel                = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_tel', true ) );
    $cel                = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_cel', true ) );
    $email              = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_email', true ) );
    $nacimiento         = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_nacimiento', true ) );
    $reciboNombre       = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_reciboNombre', true ) );
    $reciboRfc          = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_reciboRfc', true ) );
    $reciboCalle      = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_reciboCalle', true ) );
    $reciboColonia      = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_reciboColonia', true ) );
    $reciboDelegacion   = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_reciboDelegacion', true ) );
    $reciboCp           = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_reciboCp', true ) );
    $reciboPais         = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_reciboPais', true ) );

    $mensual            = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_mensual', true ) );
    $importe            = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_importe', true ) );
    $banco              = esc_html( get_post_meta( $gi_donador_frecuente->ID, 'gi_donador_frecuente_banco', true ) );
?>
    <table class="gi-custom-fields">
        <tr><th colspan="3" style="padding: 20px 0 10px; color: #c24871;">DATOS GENERALES</th></tr>
        <tr>
            <th>
                <label for="gi_donador_frecuente_apellidoPaterno">Apellido paterno*:</label>
                <input type="text" id="gi_donador_frecuente_apellidoPaterno" name="gi_donador_frecuente_apellidoPaterno" value="<?php echo $apellidoPaterno; ?>" required>
            </th>
            <th>
                <label for="gi_donador_frecuente_apellidoMaterno">Apellido materno*:</label>
                <input type="text" id="gi_donador_frecuente_apellidoMaterno" name="gi_donador_frecuente_apellidoMaterno" value="<?php echo $apellidoMaterno; ?>" required>
            </th>
            <th>
                <label for="gi_donador_frecuente_nombre">Nombre(s)*:</label>
                <input type="text" id="gi_donador_frecuente_nombre" name="gi_donador_frecuente_nombre" value="<?php echo $nombre; ?>" required>
            </th>
        </tr>
        <tr>
            <th>
                <label for="gi_donador_frecuente_calle">Calle y número*:</label>
                <input type="text" id="gi_donador_frecuente_calle" name="gi_donador_frecuente_calle" value="<?php echo $calle; ?>" required>
            </th>
            <th>
                <label for="gi_donador_frecuente_colonia">Colonia*:</label>
                <input type="text" id="gi_donador_frecuente_colonia" name="gi_donador_frecuente_colonia" value="<?php echo $colonia; ?>" required>
            </th>
            <th>
                <label for="gi_donador_frecuente_delegacion">Delegación*:</label>
                <input type="text" id="gi_donador_frecuente_delegacion" name="gi_donador_frecuente_delegacion" value="<?php echo $delegacion; ?>" required>
            </th>
        </tr>
        <tr>
            <th>
                <label for="gi_donador_frecuente_cp">Código Postal*:</label>
                <input type="text" id="gi_donador_frecuente_cp" name="gi_donador_frecuente_cp" value="<?php echo $cp; ?>" required>
            </th>
            <th>
                <label for="gi_donador_frecuente_pais">País/Estado/Ciudad*:</label>
                <input type="text" id="gi_donador_frecuente_pais" name="gi_donador_frecuente_pais" value="<?php echo $pais; ?>" required>
            </th>
            <th>
                <label for="gi_donador_frecuente_tel">Teléfono Casa*:</label>
                <input type="number" id="gi_donador_frecuente_tel" name="gi_donador_frecuente_tel" value="<?php echo $tel; ?>" required>
            </th>
        </tr>
        <tr>
            <th>
                <label for="gi_donador_frecuente_cel">Celular*:</label>
                <input type="number" id="gi_donador_frecuente_cel" name="gi_donador_frecuente_cel" value="<?php echo $cel; ?>" required>
            </th>
            <th>
                <label for="gi_donador_frecuente_email">Correo Electrónico*:</label>
                <input type="email" id="gi_donador_frecuente_email" name="gi_donador_frecuente_email" value="<?php echo $email; ?>" required>
            </th>
            <th>
                <label for="gi_donador_frecuente_nacimiento">Fecha de Nacimiento*:</label>
                <input type="date" id="gi_donador_frecuente_nacimiento" name="gi_donador_frecuente_nacimiento" value="<?php echo $nacimiento; ?>" required>
            </th>
        </tr>
        <tr><th colspan="3" style="padding: 20px 0 10px; color: #c24871;">DATOS PARA RECIBO DEDUCIBLE DE IMPUESTOS</th></tr>
        <tr>
            <th colspan="3">
                <label for="gi_donador_frecuente_reciboNombre">Recibo a favor de*:</label>
                <input type="text" id="gi_donador_frecuente_reciboNombre" name="gi_donador_frecuente_reciboNombre" value="<?php echo $reciboNombre; ?>" required>
            </th>
        </tr>
        <tr>
            <th>
                <label for="gi_donador_frecuente_reciboRfc">RFC*:</label>
                <input type="text" id="gi_donador_frecuente_reciboRfc" name="gi_donador_frecuente_reciboRfc" value="<?php echo $reciboRfc; ?>" required>
            </th>
            <th>
                <label for="gi_donador_frecuente_reciboCalle">Calle*:</label>
                <input type="text" id="gi_donador_frecuente_reciboCalle" name="gi_donador_frecuente_reciboCalle" value="<?php echo $reciboCalle; ?>" required>
            </th>
            <th>
                <label for="gi_donador_frecuente_reciboColonia">Colonia*:</label>
                <input type="text" id="gi_donador_frecuente_reciboColonia" name="gi_donador_frecuente_reciboColonia" value="<?php echo $reciboColonia; ?>" required>
            </th>
        </tr>
        <tr>
            <th>
                <label for="gi_donador_frecuente_reciboDelegacion">Delegación*:</label>
                <input type="text" id="gi_donador_frecuente_reciboDelegacion" name="gi_donador_frecuente_reciboDelegacion" value="<?php echo $reciboDelegacion; ?>" required>
            </th>
            <th>
                <label for="gi_donador_frecuente_reciboCp">Código Postal*:</label>
                <input type="number" id="gi_donador_frecuente_reciboCp" name="gi_donador_frecuente_reciboCp" value="<?php echo $reciboCp; ?>" required>
            </th>
            <th>
                <label for="gi_donador_frecuente_reciboPais">País/Estado*:</label>
                <input type="text" id="gi_donador_frecuente_reciboPais" name="gi_donador_frecuente_reciboPais" value="<?php echo $reciboPais; ?>" required>
            </th>
        </tr>
        <tr><th colspan="3" style="padding: 20px 0 10px; color: #c24871;">Datos para donativo | Tarjeta de Crédito/Débito o cuenta de cheques</th></tr>
        <tr>
            <th>
                <label for="gi_mensual">Cantidad mensual:</label>
                <input type="text" id="gi_mensual" name="gi_mensual" value="<?php echo $mensual; ?>" required>
            </th>
            <th>
                <label for="gi_importe">Otro importe:</label>
                <input type="text" id="gi_importe" name="gi_importe" value="<?php echo $importe; ?>" required>
            </th>
            <th>
                <label for="gi_banco">Banco emisor:</label>
                <input type="text" id="gi_banco" name="gi_banco" value="<?php echo $banco; ?>" required>
            </th>
        </tr>
    </table>
<?php }

add_action( 'save_post', 'gi_donador_frecuente_save_metas', 10, 2 );
function gi_donador_frecuente_save_metas( $idgi_donador_frecuente, $gi_donador_frecuente ){
    if ( $gi_donador_frecuente->post_type == 'gi_donador_frecuente' ){
        //Guardamos los datos que vienen en el POST
        if ( isset( $_POST['gi_donador_frecuente_apellidoPaterno'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_apellidoPaterno', $_POST['gi_donador_frecuente_apellidoPaterno'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_apellidoMaterno'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_apellidoMaterno', $_POST['gi_donador_frecuente_apellidoMaterno'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_nombre'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_nombre', $_POST['gi_donador_frecuente_nombre'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_calle'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_calle', $_POST['gi_donador_frecuente_calle'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_colonia'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_colonia', $_POST['gi_donador_frecuente_colonia'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_delegacion'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_delegacion', $_POST['gi_donador_frecuente_delegacion'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_cp'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_cp', $_POST['gi_donador_frecuente_cp'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_pais'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_pais', $_POST['gi_donador_frecuente_pais'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_tel'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_tel', $_POST['gi_donador_frecuente_tel'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_cel'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_cel', $_POST['gi_donador_frecuente_cel'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_email'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_email', $_POST['gi_donador_frecuente_email'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_nacimiento'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_nacimiento', $_POST['gi_donador_frecuente_nacimiento'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_reciboNombre'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_reciboNombre', $_POST['gi_donador_frecuente_reciboNombre'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_reciboRfc'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_reciboRfc', $_POST['gi_donador_frecuente_reciboRfc'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_reciboCalle'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_reciboCalle', $_POST['gi_donador_frecuente_reciboCalle'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_reciboColonia'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_reciboColonia', $_POST['gi_donador_frecuente_reciboColonia'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_reciboDelegacion'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_reciboDelegacion', $_POST['gi_donador_frecuente_reciboDelegacion'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_reciboCp'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_reciboCp', $_POST['gi_donador_frecuente_reciboCp'] );
        }
        if ( isset( $_POST['gi_donador_frecuente_reciboPais'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_donador_frecuente_reciboPais', $_POST['gi_donador_frecuente_reciboPais'] );
        }
        if ( isset( $_POST['gi_mensual'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_mensual', $_POST['gi_mensual'] );
        }
        if ( isset( $_POST['gi_importe'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_importe', $_POST['gi_importe'] );
        }        
        if ( isset( $_POST['gi_banco'] ) ){
            update_post_meta( $idgi_donador_frecuente, 'gi_banco', $_POST['gi_banco'] );
        }
    }
}

/* Redirección formulario Donador frecuente */
add_action ('template_redirect', 'custom_redirect_donacion');
function custom_redirect_donacion() {
    if ( ('POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['submitDonativo']) ) ) {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        wp_redirect($actual_link . '#donador-enviado');
    }
}


/*
** NECESITAS AYUDA
*/
add_action( 'add_meta_boxes', 'gi_necesitas_ayuda_custom_metabox' );
function gi_necesitas_ayuda_custom_metabox(){
    add_meta_box( 'gi_necesitas_ayuda_meta', 'Detalles video', 'display_gi_necesitas_ayuda_atributos', 'gi_necesitas_ayuda', 'advanced', 'default');
}

function display_gi_necesitas_ayuda_atributos( $gi_necesitas_ayuda ){
    $nombre         = esc_html( get_post_meta( $gi_necesitas_ayuda->ID, 'gi_necesitas_ayuda_nombre', true ) );
    $email          = esc_html( get_post_meta( $gi_necesitas_ayuda->ID, 'gi_necesitas_ayuda_email', true ) );
    $escolaridad    = esc_html( get_post_meta( $gi_necesitas_ayuda->ID, 'gi_necesitas_ayuda_escolaridad', true ) );
    $ocupacion      = esc_html( get_post_meta( $gi_necesitas_ayuda->ID, 'gi_necesitas_ayuda_ocupacion', true ) );
    $edad           = esc_html( get_post_meta( $gi_necesitas_ayuda->ID, 'gi_necesitas_ayuda_edad', true ) );
    $ciudad         = esc_html( get_post_meta( $gi_necesitas_ayuda->ID, 'gi_necesitas_ayuda_ciudad', true ) );
    $entero         = esc_html( get_post_meta( $gi_necesitas_ayuda->ID, 'gi_necesitas_ayuda_entero', true ) );
    $comentario     = esc_html( get_post_meta( $gi_necesitas_ayuda->ID, 'gi_necesitas_ayuda_comentario', true ) );
?>
    <table class="gi-custom-fields">
        <tr>
            <th>
                <label for="gi_necesitas_ayuda_nombre">Dirección*:</label>
                <input type="text" id="gi_necesitas_ayuda_nombre" name="gi_necesitas_ayuda_nombre" value="<?php echo $nombre; ?>" required>
            </th>
            <th>
                <label for="gi_necesitas_ayuda_email">Correo Electrónico*:</label>
                <input type="email" id="gi_necesitas_ayuda_email" name="gi_necesitas_ayuda_email" value="<?php echo $email; ?>" required>
            </th>
            <th>
                <label for="gi_necesitas_ayuda_escolaridad">Escolaridad*:</label>
                <input type="text" id="gi_necesitas_ayuda_escolaridad" name="gi_necesitas_ayuda_escolaridad" value="<?php echo $escolaridad; ?>" required>
            </th>
        </tr>
        <tr>
            <th>
                <label for="gi_necesitas_ayuda_ocupacion">Ocupación*:</label>
                <input type="text" id="gi_necesitas_ayuda_ocupacion" name="gi_necesitas_ayuda_ocupacion" value="<?php echo $ocupacion; ?>" required>
            </th>
            <th>
                <label for="gi_necesitas_ayuda_edad">Edad*:</label>
                <input type="number" id="gi_necesitas_ayuda_edad" name="gi_necesitas_ayuda_edad" value="<?php echo $edad; ?>" required>
            </th>
            <th>
                <label for="gi_necesitas_ayuda_ciudad">Ciudad, delegación, estado o municipio*:</label>
                <input type="text" id="gi_necesitas_ayuda_ciudad" name="gi_necesitas_ayuda_ciudad" value="<?php echo $ciudad; ?>" required>
            </th>
        </tr>
        <tr>
            <th colspan="3">
                <label for="gi_necesitas_ayuda_entero">¿Cómo se entero del servicio?*:</label>
                <input type="text" id="gi_necesitas_ayuda_entero" name="gi_necesitas_ayuda_entero" value="<?php echo $entero; ?>" required>
            </th>
        </tr>
        <tr>
            <th colspan="3">
                <label for="gi_necesitas_ayuda_comentario">Comentario*:</label>
                <textarea id="gi_necesitas_ayuda_comentario" name="gi_necesitas_ayuda_comentario" rows="3" required><?php echo $comentario; ?></textarea>
            </th>
        </tr>
    </table>
<?php }

add_action( 'save_post', 'gi_necesitas_ayuda_save_metas', 10, 2 );
function gi_necesitas_ayuda_save_metas( $idgi_necesitas_ayuda, $gi_necesitas_ayuda ){
    if ( $gi_necesitas_ayuda->post_type == 'gi_necesitas_ayuda' ){
        if ( isset( $_POST['gi_necesitas_ayuda_nombre'] ) ){
            update_post_meta( $idgi_necesitas_ayuda, 'gi_necesitas_ayuda_nombre', $_POST['gi_necesitas_ayuda_nombre'] );
        }
        if ( isset( $_POST['gi_necesitas_ayuda_email'] ) ){
            update_post_meta( $idgi_necesitas_ayuda, 'gi_necesitas_ayuda_email', $_POST['gi_necesitas_ayuda_email'] );
        }
        if ( isset( $_POST['gi_necesitas_ayuda_escolaridad'] ) ){
            update_post_meta( $idgi_necesitas_ayuda, 'gi_necesitas_ayuda_escolaridad', $_POST['gi_necesitas_ayuda_escolaridad'] );
        }
        if ( isset( $_POST['gi_necesitas_ayuda_ocupacion'] ) ){
            update_post_meta( $idgi_necesitas_ayuda, 'gi_necesitas_ayuda_ocupacion', $_POST['gi_necesitas_ayuda_ocupacion'] );
        }
        if ( isset( $_POST['gi_necesitas_ayuda_edad'] ) ){
            update_post_meta( $idgi_necesitas_ayuda, 'gi_necesitas_ayuda_edad', $_POST['gi_necesitas_ayuda_edad'] );
        }
        if ( isset( $_POST['gi_necesitas_ayuda_ciudad'] ) ){
            update_post_meta( $idgi_necesitas_ayuda, 'gi_necesitas_ayuda_ciudad', $_POST['gi_necesitas_ayuda_ciudad'] );
        }
        if ( isset( $_POST['gi_necesitas_ayuda_entero'] ) ){
            update_post_meta( $idgi_necesitas_ayuda, 'gi_necesitas_ayuda_entero', $_POST['gi_necesitas_ayuda_entero'] );
        }
        if ( isset( $_POST['gi_necesitas_ayuda_comentario'] ) ){
            update_post_meta( $idgi_necesitas_ayuda, 'gi_necesitas_ayuda_comentario', $_POST['gi_necesitas_ayuda_comentario'] );
        }
    }
}

/* Redirección formulario Necesitas ayuda */
add_action ('template_redirect', 'custom_redirect_ayuda');
function custom_redirect_ayuda() {
    if ( ('POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['submitNAyuda']) ) ) {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        wp_redirect($actual_link . '#ayuda-enviado');
    }
}


/*
** PAGE
*/
add_action( 'add_meta_boxes', 'gi_page_custom_metabox' );
function gi_page_custom_metabox(){
    add_meta_box( 'gi_page_meta', 'Contenido en título', 'display_gi_page_atributos', 'page', 'advanced', 'default');
}

function display_gi_page_atributos( $gi_page ){
    $contentTitle       = esc_html( get_post_meta( $gi_page->ID, 'gi_page_contentTitle', true ) );
?>
    <table class="gi-custom-fields">
        <tr>
            <th>
                <textarea name="gi_page_contentTitle" rows="5"><?php echo $contentTitle; ?></textarea>
            </th>
        </tr>
    </table>
<?php }

add_action( 'save_post', 'gi_page_save_metas', 10, 2 );
function gi_page_save_metas( $idgi_page, $gi_page ){
    if ( $gi_page->post_type == 'page' ){
        if ( isset( $_POST['gi_page_contentTitle'] ) ){
            update_post_meta( $idgi_page, 'gi_page_contentTitle', $_POST['gi_page_contentTitle'] );
        }
    }
}