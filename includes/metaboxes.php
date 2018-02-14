<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/*
* Metaboxes CMB2
*/

function bio_audivisual_metabox() {
	$prefix = 'info_bio_';

	$metabox_eventos = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Metaboxes CMB 2 to quiz', 'cmb2' ),
		'object_types'  => array( 'bio'), // Post type
	) );

	$metabox_eventos->add_field( array(
	  'name'       => __( 'Titulo servicios', 'cmb2' ),
	  'desc'       => __( 'Mes de la quiz', 'cmb2' ),
	  'id'         => $prefix . 'servicios_titulo',
	  'type'       => 'text',
	) );

	$metabox_eventos->add_field( array(
		'name'    => 'Contenido Izquierda',
		'desc'    => 'field description (optional)',
		'id'      => 'content_left',
		'type'    => 'wysiwyg',
		'options' => array(),
	) );

	$metabox_eventos->add_field( array(
		'name'    => 'Contenido Derecha',
		'desc'    => 'field description (optional)',
		'id'      => 'content_right',
		'type'    => 'wysiwyg',
		'options' => array(),
	) );



}

add_action( 'cmb2_admin_init', 'bio_audivisual_metabox');

?>
