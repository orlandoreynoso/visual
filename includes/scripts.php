<?php 


function quizbook_frontend_styles(){

	// Registrar los estilos
	wp_enqueue_style( 'quizbook_css', plugins_url( '../assets/css/quizbook.css',__FILE__), array(), '1.25');

/*	wp_register_style('style', get_template_directory_uri().'/style.css', array('bootstrap'), '1.0');

	wp_register_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'),'1.0.0', true);
	wp_register_script('lightbox', get_template_directory_uri().'/js/lightbox.js', array('jquery'),'2.9.0', true);

	wp_enqueue_script('jquery');
	wp_enqueue_script('popper');	*/


}

add_action('wp_enqueue_scripts','quizbook_frontend_styles');

?>