<?php


/*=========== Custom Post Type slidefront =================================*/

function crear_post_type_slidefront() {

// Etiquetas para el Post Type
	$labels = array(
		'name'                => _x( 'Slide Audivisual', 'Post Type General Name', 'godoy' ),
		'singular_name'       => _x( 'slidefront', 'Post Type Singular Name', 'godoy' ),
		'menu_name'           => __( 'slidefront', 'godoy' ),
		'parent_item_colon'   => __( 'slidefront Padre', 'godoy' ),
		'all_items'           => __( 'Todas las slidefront', 'godoy' ),
		'view_item'           => __( 'Ver slidefront', 'godoy' ),
		'add_new_item'        => __( 'Agregar Nuevo slidefront', 'godoy' ),
		'add_new'             => __( 'Agregar Nuevo slidefront', 'godoy' ),
		'edit_item'           => __( 'Editar slidefront', 'godoy' ),
		'update_item'         => __( 'Actualizar slidefront', 'godoy' ),
		'search_items'        => __( 'Buscar slidefront', 'godoy' ),
		'not_found'           => __( 'No encontrado', 'godoy' ),
		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'godoy' ),
	);

// Otras opciones para el post type

	$args = array(
		'label'               => __( 'slidefront', 'godoy' ),
		'description'         => __( 'slidefront news and reviews', 'godoy' ),
		'labels'              => $labels,
		// Todo lo que soporta este post type
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions','page-attributes','post-formats'),
		/* Un Post Type hierarchical es como las paginas y puede tener padres e hijos.
		* Uno sin hierarchical es como los posts
		*/
		'hierarchical'        => true, /*  Es un comportamiento como las páginas  */
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-format-video',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
//		'rewrite'           => array('slug' => 'slidefront'), // Permalinks format
		"rewrite" => array( "slug" => "slidefront", "with_front" => true ),
		//"taxonomies" => array( "category", "post_tag" ),
		'query_var' => true,
		//'rewrite'           => array('slug' => 'slidefront/%proyectox%'), // Permalinks format
	);

	// Por ultimo registramos el post type
	register_post_type( 'slidefront', $args );

}

add_action( 'init', 'crear_post_type_slidefront', 0 );


?>
