# Books Library

**The plugin was created for demonstration purposes for my presentation at [WordCamp Skopje 2019](https://2019.skopje.wordcamp.org)**

### How it works

1. The plugin registers the `Book` post type
2. The plugin registers the `Genre` taxonomy
3. The plugin provides shortcodes for listing books eg `[books_library number=6]` and `[books_library_extended number=6 genre=fantasy]`
4. The plugin provides metabox for editing metadata in the `Book` posts editor (`Author` and `Number of pages`)
5. The plugin makes use of enqueueuing system to include javascript and css files
5. The plugin makes use of the l81n internationalization standard
6. The plugin makes use of actions and filters
7. The plugin makes use of `readme.txt` that is required to publish plugin on WordPress.org/plugins directory


### Files

1. `books-library.php` declares the plugin and everything starts from there.
2. `post-types.php` registers the `Book` post type
3. `taxonomies.php` registers the `Genre` taxonomy
4. `metaboxes.php` defines the metabox with additional book information (Author and Number of pages) using the [CMB2 Framework](https://github.com/CMB2/CMB2)
5. `hooks.php` defines the hooks (first one: login notification and second one: modification of the book content to add the additional information in the end of each `Book` post)
6. `shortcodes.php` provides the `[books_library ...]` and `[books_library_extended ...]` shortcodes
7. `scripts.php` makes use of the enqueueing system of WordPress
8. `languages/` stores the translations
9. `readme.txt` is required if you want to publish the plugin to WordPress plugin repository


### Contributions

Feel free to open pull requests if you want to contribute


### License

The plugin is licensed under GPL v2

```

Copyright (C) 2019 Darko Gjorgjijoski (https://darkog.com)

This file is part of Books Library

Books Libraryis free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

Books Library is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Books Library. If not, see <https://www.gnu.org/licenses/>.

```