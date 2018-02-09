<?php 


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


function quizbook_agregar_metaboxes(){

	add_meta_box( 'quizbook_meta_box', 'Respuestas', 'quizbook_metaboxes','quiz', 'normal','high',null );

}

add_action('add_meta_boxes','quizbook_agregar_metaboxes');

/*
* Muetra el contenido HTML del Metaboxes
*/

function quizbook_metaboxes(){

	echo "Hola Metaboxes";
}


function quizbook_campos_quiz() {
	$prefix = 'info_quiz_';

	$metabox_eventos = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Metaboxes CMB 2 to quiz', 'cmb2' ),
		'object_types'  => array( 'quiz'), // Post type
	) );

	$metabox_eventos->add_field( array(
	  'name'       => __( 'Titulo servicios', 'cmb2' ),
	  'desc'       => __( 'Mes de la quiz', 'cmb2' ),
	  'id'         => $prefix . 'servicios_titulo',
	  'type'       => 'text',
	) ); 

	$metabox_eventos->add_field( array(
		'name'    => 'contenido servicios',
		'desc'    => 'field description (optional)',
		'id'      => 'servicios_contenido',
		'type'    => 'wysiwyg',
		'options' => array(),
	) ); 	

	$metabox_eventos->add_field( array(
		'name'    => 'Imagen servicio empeñar',
		'desc'    => 'field description (optional)',
		'id'      => 'img_servicio_empenar',
		'type'    => 'wysiwyg',
		'options' => array(),
	) ); 

	$metabox_eventos->add_field( array(
		'name'    => 'Imagen servicio comprar',
		'desc'    => 'field description (optional)',
		'id'      => 'img_servicio_comprar',
		'type'    => 'wysiwyg',
		'options' => array(),
	) ); 	

}

add_action( 'cmb2_admin_init', 'quizbook_campos_quiz');

?>