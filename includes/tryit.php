<?php 



/*============= cargando archivos==============*/
/*
function my_rewrite_flush() {
    crear_post_type_reflexiones();    
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' ); */
/*
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
*/

require_once plugin_dir_path( __FILE__ ) . 'includes/posttypes.php';

/*

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

if(file_exists(dirname(__FILE__).'/quiz/cpt-quiz.php')){
	require_once dirname( __FILE__ ) . '/quiz/cpt-quiz.php';
}

*/



?>