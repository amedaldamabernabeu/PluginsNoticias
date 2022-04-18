<?php
/*
Plugin Name: cpt_noticias
Plugin URI: 
Description: Plugin para generar post type noticias. 
Version: 1.0
Author: Amed Aldama
Author URI: 
License: 
License URI: 
*/
if ( ! function_exists('custom_post_noticias') ) {

// Register Custom Post Type
function custom_post_noticias() {

	$labels = array(
		'name'                  => _x( 'noticias', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'noticia', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'noticias', 'text_domain' ),
		'name_admin_bar'        => __( 'noticias', 'text_domain' ),
		'archives'              => __( 'Archivo de noticias', 'text_domain' ),
		'attributes'            => __( 'Atributos de noticia', 'text_domain' ),
		'parent_item_colon'     => __( 'Noticia padre', 'text_domain' ),
		'all_items'             => __( 'Todas las noticias', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nueva noticia', 'text_domain' ),
		'add_new'               => __( 'Añadir Nueva', 'text_domain' ),
		'new_item'              => __( 'Nueva Noticia', 'text_domain' ),
		'edit_item'             => __( 'Editar Noticia', 'text_domain' ),
		'update_item'           => __( 'Actualizar Noticia', 'text_domain' ),
		'view_item'             => __( 'Ver Noticia', 'text_domain' ),
		'view_items'            => __( 'Ver Noticias', 'text_domain' ),
		'search_items'          => __( 'Buscar Noticia', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en la noticia', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en ests noticia', 'text_domain' ),
		'items_list'            => __( 'Listado de noticias', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de noticias', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de noticias', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'noticia', 'text_domain' ),
		'description'           => __( 'Entradas de noticias', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'noticias', $args );

}
add_action( 'init', 'custom_post_noticias', 0 );

}