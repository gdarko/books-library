<?php

require_once dirname( __FILE__ ) . '/lib/CMB2/init.php';


/**
 * Register the Book Information metabox using the CMB2 library
 */
function bl_register_metabox() {

	$books_metabox = new_cmb2_box( array(
		'id'           => 'book_metabox',
		'title'        => esc_html__( 'Book Information', 'books-library' ),
		'object_types' => array( 'book' ),
	) );
	$books_metabox->add_field( array(
		'name' => esc_html__( 'Author', 'books-library' ),
		'desc' => esc_html__( 'Enter the author of the book', 'books-library' ),
		'id'   => 'book_author',
		'type' => 'text',
	) );
	$books_metabox->add_field( array(
		'name' => esc_html__( 'Number of pages', 'books-library' ),
		'desc' => esc_html__( 'Enter the number of pages of the book', 'books-library' ),
		'id'   => 'book_pages',
		'type' => 'text',
	) );
}
add_action( 'cmb2_admin_init', 'bl_register_metabox' );