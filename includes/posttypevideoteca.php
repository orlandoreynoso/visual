<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



/*
* CP videoteca
*/

function godoy_cpt_videoteca() {

// Etiquetas para el Post Type
	$labels = array(
		'name'                => _x( 'videoteca', 'Post Type General Name', 'godoy' ),
		'singular_name'       => _x( 'videoteca', 'Post Type Singular Name', 'godoy' ),
		'menu_name'           => __( 'videoteca', 'godoy' ),
		'parent_item_colon'   => __( 'videoteca Padre', 'godoy' ),
		'all_items'           => __( 'Todas las videoteca', 'godoy' ),
		'view_item'           => __( 'Ver videoteca', 'godoy' ),
		'add_new_item'        => __( 'Agregar Nuevo videoteca', 'godoy' ),
		'add_new'             => __( 'Agregar Nuevo videoteca', 'godoy' ),
		'edit_item'           => __( 'Editar videoteca', 'godoy' ),
		'update_item'         => __( 'Actualizar videoteca', 'godoy' ),
		'search_items'        => __( 'Buscar videoteca', 'godoy' ),
		'not_found'           => __( 'No encontrado', 'godoy' ),
		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'godoy' ),
	);

// Otras opciones para el post type

	$args = array(
		'label'               => __( 'videoteca', 'godoy' ),
		'description'         => __( 'videoteca news and reviews', 'godoy' ),
		'labels'              => $labels,
		// Todo lo que soporta este post type
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions','page-attributes','post-formats'),
		//'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions','page-attributes','post-formats','custom-fields')
		/* Un Post Type hierarchical es como las paginas y puede tener padres e hijos.
		* Uno sin hierarchical es como los posts
		*/
		'hierarchical'        => false, /* comportamiento >> true: páginas , false: Entradas */
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-video-alt',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
//		'rewrite'           => array('slug' => 'videoteca'), // Permalinks format
		"rewrite" => array( "slug" => "videoteca"),
		//"taxonomies" => array( "category", "post_tag" ),
		'query_var' => true,
		//'rewrite'           => array('slug' => 'videoteca/%proyectox%'), // Permalinks format
	);

	// Por ultimo registramos el post type
	register_post_type( 'videoteca', $args );

}

add_action( 'init', 'godoy_cpt_videoteca', 0 );


function videoteca_rewrite_flush(){
	godoy_cpt_videoteca();
	flush_rewrite_rules();
}

?>
