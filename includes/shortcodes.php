<?php

// REGISTERS TWO SHORTCODES
// [books_library number=N]
// [books_library_extended number=N genre=Fantasy]


/**
 * 1.) Shortcode that lists books
 *
 * @param $args
 *
 * @return string|void
 */
function books_library( $args ) {

	// Setup the default parameters
	$args = shortcode_atts( array( 'total' => 5 ), $args );

	// Retrieve the Book posts
	$books = get_posts( array(
		'posts_per_page' => $args['total'],
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


/**
 * 2.) Extended version of the first shortcode. Does two additional things:
 *
 *  - Allows us to display books by genre
 *  - Outputs the taxonomy the books belong
 *
 * @param $args
 *
 * @return string|void
 */
function books_library_extended( $args ) {

	// Setup the default parameters
	$args = shortcode_atts( array( 'total' => 5, 'genre' => '' ), $args );

	// Retrieve the Book posts
	$query_args = array(
		'posts_per_page' => $args['total'],
		'post_type'      => 'book',
		'post_status'    => 'publish',
		'orderby'        => 'date',
		'order'          => 'DESC',
	);

	// If taxonomy is specified, set the taxonomy query parameters to query by the Genre taxonomy.
	if ( ! empty( $args['genre'] ) ) {
		$query_args['tax_query'] = array(
			array(
				'taxonomy' => 'genre',
				'field'    => 'slug',
				'terms'    => $args['genre'],
			)
		);
	}

	// Query the posts
	$books = get_posts( $query_args );

	// Output the books
	if ( count( $books ) > 0 ) {
		$output = '<ul>';
		foreach ( $books as $book ) {

			$book_genre       = wp_get_post_terms( $book->ID, 'genre' ); // Retrieve the terms that book belongs in. Like fantasy, crime, etc.
			$book_genre_names = wp_list_pluck( $book_genre, 'name' );
			$book_genre_names = ! empty( $book_genre_names ) ? '(' . implode( ', ', $book_genre_names ) . ')' : '';

			$output .= '<li><a href="' . get_permalink( $book ) . '">' . $book->post_title . '</a> ' . $book_genre_names;
		}
		$output .= '</ul>';
	} else {
		$output = __( 'No books found', 'books-library' );
	}

	return $output;
}
add_shortcode( 'books_library_extended', 'books_library_extended' );