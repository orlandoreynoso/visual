<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



/*CP bio*/

function godoy_cpt_bio() {

// Etiquetas para el Post Type
	$labels = array(
		'name'                => _x( 'bio', 'Post Type General Name', 'godoy' ),
		'singular_name'       => _x( 'bio', 'Post Type Singular Name', 'godoy' ),
		'menu_name'           => __( 'bio', 'godoy' ),
		'parent_item_colon'   => __( 'bio Padre', 'godoy' ),
		'all_items'           => __( 'Todas las bio', 'godoy' ),
		'view_item'           => __( 'Ver bio', 'godoy' ),
		'add_new_item'        => __( 'Agregar Nuevo bio', 'godoy' ),
		'add_new'             => __( 'Agregar Nuevo bio', 'godoy' ),
		'edit_item'           => __( 'Editar bio', 'godoy' ),
		'update_item'         => __( 'Actualizar bio', 'godoy' ),
		'search_items'        => __( 'Buscar bio', 'godoy' ),
		'not_found'           => __( 'No encontrado', 'godoy' ),
		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'godoy' ),
	);

// Otras opciones para el post type

	$args = array(
		'label'               => __( 'bio', 'godoy' ),
		'description'         => __( 'bio news and reviews', 'godoy' ),
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
//		'rewrite'           => array('slug' => 'bio'), // Permalinks format
		"rewrite" => array( "slug" => "bio"),
		//"taxonomies" => array( "category", "post_tag" ),
		'query_var' => true,
		//'rewrite'           => array('slug' => 'bio/%proyectox%'), // Permalinks format
	);

	// Por ultimo registramos el post type
	register_post_type( 'bio', $args );

}

add_action( 'init', 'godoy_cpt_bio', 0 );


function biobook_rewrite_flush(){
	godoy_cpt_about();
	flush_rewrite_rules();
}

?>
