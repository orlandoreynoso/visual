<?php
/*
Plugin Name: Custom Post Type Audivisual
Plugin URI:
Description: information about course
Version:     1.0
Author:      Orlando Reynoso
Author URI:  http://www.orlandoreynoso.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/*
* Añade el post type de biografía
* revisar versiones anteriores en tryit.php
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/posttypes.php';

/*
* Regenera las reglas de las URL al activar
*/
register_activation_hook( __FILE__, 'bio_rewrite_flush');

/*
* Añade el post type de biografía
* revisar versiones anteriores en tryit.php
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/posttypevideoteca.php';

/*
* Regenera las reglas de las URL al activar
*/
register_activation_hook( __FILE__, 'videoteca_rewrite_flush');


/*
* Load file CMB2
*/

require_once plugin_dir_path( __FILE__ ) . 'CMB2/init.php';
/*
if ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}
*/

/*
* Añade el post type de Quizes
* revisar versiones anteriores en tryit.php
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/metaboxes.php';
//
//
// /*
// * Añade el roles y capabilities a nuestro quiz
// */
//
// require_once plugin_dir_path( __FILE__ ) . 'includes/roles.php';
// register_activation_hook( __FILE__, 'quizbook_crear_role');
// register_deactivation_hook( __FILE__, 'quizbook_remover_role');
//
// /*
// * add funcion about shortcode
// */
// require_once plugin_dir_path( __FILE__ ) . 'includes/shortcode.php';
//
// /*
// * add file about functiones
// */
// require_once plugin_dir_path( __FILE__ ) . 'includes/funciones.php';
//
// /*
// * add file about scrips js and styles css
// */
// require_once plugin_dir_path( __FILE__ ) . 'includes/scripts.php';



?>
