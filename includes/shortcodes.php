<?php

/**
 * Create shortcode that will list books by Genre.
 * @param $atts
 *
 * @return string|void
 */
function books_library( $atts ) {

	// Setup the default parameters
	$atts = shortcode_atts( array(
		'posts_per_page' => 5,
	), $atts );

	// Retrieve the Book posts
	$books = get_posts( array(
		'posts_per_page' => $atts['posts_per_page'],
		'post_type'      => 'book',
		'post_status'    => 'publish',
		'orderby'        => 'date',
		'order'          => 'DESC',
	) );

	// Output the books
	if ( count( $books ) > 0 ) {
		$output = '<ul>';
		foreach ( $books as $book ) {
			$output .= '<li><a href="' . get_permalink( $book ) . '">' . $book->post_title . '</a>';
		}
		$output .= '</ul>';
	} else {
		$output = __( 'No books found', 'books-library' );
	}

	return $output;
}
add_shortcode( 'books_library', 'books_library' );