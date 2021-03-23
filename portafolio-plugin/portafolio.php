<?php 
/* 
Plugin Name: portafolio-plugin
Plugin URI: https://www.brm.com.co/plugins/portafolio
Description: This is a custom plugin created by jUAN Lopez to the brm test 
Version: 1.0 
Author: Juan David Lopez 
Author URI: https://www.jdlopezva.io
License: GPLv2 
*/
/* basics functions */
function Activar(){

}

function Desactivar(){
    flush_rewrite_rules();
}



register_activation_hook( __FILE__,'Activar');
register_deactivation_hook( __FILE__,'Desactivar');



// Register Custom Post Type
/* Portafolio plugin creation with new custom post  */
function portafolio() {

	$labels = array(
		'name'                  => _x( 'portafolio', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Custom post', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Portafolio', 'text_domain' ),
		'name_admin_bar'        => __( 'Portafolio', 'text_domain' ),
		'archives'              => __( 'Post', 'text_domain' ),
		'attributes'            => __( 'Atributos de post', 'text_domain' ),
		'parent_item_colon'     => __( 'Post principal', 'text_domain' ),
		'all_items'             => __( 'Todos los post', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo post', 'text_domain' ),
		'add_new'               => __( 'Añadir post', 'text_domain' ),
		'new_item'              => __( 'Nuevo post', 'text_domain' ),
		'edit_item'             => __( 'Editar post', 'text_domain' ),
		'update_item'           => __( 'Actualizar post', 'text_domain' ),
		'view_item'             => __( 'Ver post', 'text_domain' ),
		'view_items'            => __( 'Ver post', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Custom post', 'text_domain' ),
		'description'           => __( 'Custom post with some information fields of portafolio', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor','thumbnail','excerpt', 'comments' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type_portafolio', $args );

}
add_action( 'init', 'portafolio', 0 );
