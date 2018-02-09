<?php

add_action( 'cmb2_admin_init', 'campos_quiz');

function campos_quiz() {
	$prefix = 'info_quiz_';

	$metabox_eventos = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Metaboxes campos quiz', 'cmb2' ),
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


/*CP quiz*/

function crear_post_type_quiz() {

// Etiquetas para el Post Type
	$labels = array(
		'name'                => _x( 'quiz', 'Post Type General Name', 'trip' ),
		'singular_name'       => _x( 'quiz', 'Post Type Singular Name', 'trip' ),
		'menu_name'           => __( 'quiz', 'trip' ),
		'parent_item_colon'   => __( 'quiz Padre', 'trip' ),
		'all_items'           => __( 'Todas las quiz', 'trip' ),
		'view_item'           => __( 'Ver quiz', 'trip' ),
		'add_new_item'        => __( 'Agregar Nuevo quiz', 'trip' ),
		'add_new'             => __( 'Agregar Nuevo quiz', 'trip' ),
		'edit_item'           => __( 'Editar quiz', 'trip' ),
		'update_item'         => __( 'Actualizar quiz', 'trip' ),
		'search_items'        => __( 'Buscar quiz', 'trip' ),
		'not_found'           => __( 'No encontrado', 'trip' ),
		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'trip' ),
	);

// Otras opciones para el post type

	$args = array(
		'label'               => __( 'quiz', 'trip' ),
		'description'         => __( 'quiz news and reviews', 'trip' ),
		'labels'              => $labels,
		// Todo lo que soporta este post type
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions','page-attributes','post-formats'),
		//'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions','page-attributes','post-formats','custom-fields')
		/* Un Post Type hierarchical es como las paginas y puede tener padres e hijos.
		* Uno sin hierarchical es como los posts
		*/
		'hierarchical'        => true, /* comportamiento >> true: páginas , false: Entradas */
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-welcome-lear-more',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
//		'rewrite'           => array('slug' => 'quiz'), // Permalinks format
		"rewrite" => array( "slug" => "quiz"),
		//"taxonomies" => array( "category", "post_tag" ),
		'query_var' => true,
		//'rewrite'           => array('slug' => 'quiz/%proyectox%'), // Permalinks format
	);

	// Por ultimo registramos el post type
	register_post_type( 'quiz', $args );

}

add_action( 'init', 'crear_post_type_quiz', 0 );


?>