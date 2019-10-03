<?php

/**
 * Modify the page content
 * - Only do this if the page is Book page eg. http://site.com/book/the-notebook
 * - Append Author and Number of pages in the bottom any book page the page if they are provided in the editor.
 *
 * @param $content
 *
 * @return string
 */
function bl_the_content( $content ) {

	if ( is_singular( 'book' ) ) {

		$author          = get_post_meta( get_the_ID(), 'book_author', true );
		$number_of_pages = get_post_meta( get_the_ID(), 'book_pages', true );

		$book_info = '';

		if ( $author ) {
			$book_info .= '<span>' . sprintf( __( 'Book by %s' ), $author ) . '</span>';
		}

		if ( $number_of_pages ) {
			$book_info .= '<span>' . sprintf( __( 'Total pages: %s' ), $number_of_pages ) . '</span>';
		}

		if ( ! empty( $book_info ) ) {
			$book_info = '<p class="bl-book-info"><strong>' . $book_info . '</strong></p>';
			$content   .= $book_info;
		}
	}

	return $content;
}
add_filter( 'the_content', 'bl_the_content' );


/**
 * Send login notification when user successfully logs in
 *
 * @param $user_login
 * @param WP_User $user
 */
function bl_login_notification( $user_login, \WP_User $user ) {
	$subject = __( 'User login' );
	$message = sprintf( __( '%s logged into the site %s', 'books-library', site_url() ), $user_login );
	$email   = get_option( 'admin_email' );
	// Skip sending the email to the admin
	if ( $email != $user->user_email ) {
		wp_mail( $email, $subject, $message );
	}
}

add_action( 'wp_login', 'bl_login_notification', 100, 2 );