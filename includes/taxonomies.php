<?php

/**
 * Registers Genre taxonomy to the Book post type
 */
function bl_register_genres() {
	$labels = array(
		'name'              => _x( 'Genres', 'taxonomy general name', 'books-library' ),
		'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'books-library' ),
		'search_items'      => __( 'Search Genres', 'books-library' ),
		'all_items'         => __( 'All Genres', 'books-library' ),
		'parent_item'       => __( 'Parent Genre', 'books-library' ),
		'parent_item_colon' => __( 'Parent Genre:', 'books-library' ),
		'edit_item'         => __( 'Edit Genre', 'books-library' ),
		'update_item'       => __( 'Update Genre', 'books-library' ),
		'add_new_item'      => __( 'Add New Genre', 'books-library' ),
		'new_item_name'     => __( 'New Genre Name', 'books-library' ),
		'menu_name'         => __( 'Genres', 'books-library' ),
	);
	$args   = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre' ),
	);
	register_taxonomy( 'genre', array( 'book' ), $args );
}
add_action( 'init', 'bl_register_genres', 0 );