<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



/*CP quiz*/

function quizbook_posttype() {

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
		'menu_icon'           => 'dashicons-welcome-learn-more',
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

add_action( 'init', 'quizbook_posttype', 0 );


function quizbook_rewrite_flush(){
	quizbook_posttype();
	flush_rewrite_rules();
}

?>