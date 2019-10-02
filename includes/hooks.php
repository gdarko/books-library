<?php

/**
 * Modify the book content
 * - Insert Author, ISBN and other book details in each book page content at the end.
 *
 * @param $content
 *
 * @return string
 */
function bl_the_content( $content ) {
	$content .= '<p>' . __( 'This is the last paragraph' ) . '</p>';

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