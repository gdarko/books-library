<?php

/**
 * Registers the Book post type
 */
function bl_register_books() {
	$labels = array(
		'name'           => _x( 'Books', 'post type general name', 'books-library' ),
		'singular_name'  => _x( 'Book', 'post type singular name', 'books-library' ),
		'menu_name'      => _x( 'Books', 'admin menu', 'books-library' ),
		'name_admin_bar' => _x( 'Book', 'add new on admin bar', 'books-library' ),
		'add_new'        => _x( 'Add New', 'book', 'books-library' ),
		'add_new_item'   => __( 'Add New Book', 'books-library' ),
		'new_item'       => __( 'New Book', 'books-library' ),
		'edit_item'      => __( 'Edit Book', 'books-library' ),
		'view_item'      => __( 'View Book', 'books-library' ),
		'all_items'      => __( 'All Books', 'books-library' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' )
	);
	register_post_type( 'book', $args );
}
add_action( 'init', 'bl_register_books' );