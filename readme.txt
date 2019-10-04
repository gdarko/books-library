=== Books Library ===
Contributors: DarkoG
Tags: books-library, library, books, genres
Requires at least: 4.6.0
Stable Tag: 1.0.0
Requires PHP: 5.5.0
Tested up to: 5.2.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The plugin was created for demonstration purposes for my presentation at [WordCamp Skopje 2019](https://2019.skopje.wordcamp.org)

== Description ==

=== How it works ===

1. The plugin registers the `Book` post type
2. The plugin registers the `Genre` taxonomy
3. The plugin provides shortcodes for listing books eg `[books_library number=6]` and `[books_library_extended number=6 genre=fantasy]`
4. The plugin provides metabox for editing metadata in the `Book` posts editor (`Author` and `Number of pages`)
5. The plugin makes use of enqueueuing system to include javascript and css files
5. The plugin makes use of the l81n internationalization standard
6. The plugin makes use of actions and filters
7. The plugin makes use of `readme.txt` that is required to publish plugin on WordPress.org/plugins directory


=== Files ===

1. `books-library.php` declares the plugin and everything starts from there.
2. `post-types.php` registers the `Book` post type
3. `taxonomies.php` registers the `Genre` taxonomy
4. `metaboxes.php` defines the metabox with additional book information (Author and Number of pages) using the [CMB2 Framework](https://github.com/CMB2/CMB2)
5. `hooks.php` defines the hooks (first one: login notification and second one: modification of the book content to add the additional information in the end of each `Book` post)
6. `shortcodes.php` provides the `[books_library ...]` and `[books_library_extended ...]` shortcodes
7. `scripts.php` makes use of the enqueueing system of WordPress
8. `languages/` stores the translations
9. `readme.txt` is required if you want to publish the plugin to WordPress plugin repository


== Installation ==

= Plugin Installation =

* Download the plugin from the WordPress.org repository
* Go to your WordPress Dashboard, navigate to Plugins > Add Plugin and upload the zip file you downloaded.

= If you have any question feel free to get in touch =

== Frequently Asked Questions ==

= Does the plugin support goodreads integration?  =

No at this time.

= Does the plugin support the latest PHP?  =

Yes, sure and we recommend it.

== Screenshots ==

1. Screenshot 1 (in the assets folder of the SVN repository)
2. Screenshot 2 (in the assets folder of the SVN repository)
3. Screenshot 3 (in the assets folder of the SVN repository)

== Changelog ==

= Version 1.0.0 =
* Initial version