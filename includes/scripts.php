<?php

/**
 * Enqueue the required scripts and styles that are located in our /assets/ folder.
 *
 */
function bl_enqueue_scripts() {
	wp_enqueue_style( 'books-library', BL_URI . 'assets/style.css', null, BL_VERSION, 'all' );
	wp_enqueue_script( 'books-library', BL_URI . 'assets/script.js', array( 'jquery' ), BL_VERSION );
}
add_action( 'wp_enqueue_scripts', 'bl_enqueue_scripts', 15 );
