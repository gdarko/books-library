<?php
/*
Plugin Name: Books Library
Plugin URI: http://wordpress.org/extend/plugins/books-library
Description: Organizes your eBooks in WordPress
Author: Darko Gjorgjijoski
Version: 1.0.0
Author URI: https://darkog.com/
Text Domain: books-library
Domain Path: /languages
*/

// Prevent Direct Access to this file
defined( 'ABSPATH' ) || die( 'No direct access allowed' );

define( 'BL_VERSION', '1.0.0' );
define( 'BL_URI', plugin_dir_url( __FILE__ ) );
define( 'BL_PATH', plugin_dir_path( __FILE__ ) );

include 'includes/post-types.php';
include 'includes/taxonomies.php';
include 'includes/shortcodes.php';
include 'includes/hooks.php';
include 'includes/metaboxes.php';
include 'includes/scripts.php';
