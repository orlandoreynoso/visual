<?php
/*
Plugin Name: quizes course
Plugin URI:
Description: information about course
Version:     1.0
Author:      Orlando Reynoso
Author URI:  http://www.orlandoreynoso.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/


/*
* Añade el post type de Quizes
* revisar versiones anteriores en tryit.php
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/posttypes.php';

/*
* Regenera las reglas de las URL al activar
*/
register_activation_hook( __FILE__, 'quizbook_rewrite_flush');

?>
