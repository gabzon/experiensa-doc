<?php
/**
* Sage includes
*
* The $sage_includes array determines the code library included in your theme.
* Add or remove files to the array as needed. Supports child theme overrides.
*
* Please note that missing files will produce a fatal error.
*
* @link https://github.com/roots/sage/pull/1042
*/
$sage_includes = [
    'lib/utils.php',    // Scripts and stylesheets
    'lib/assets.php',    // Scripts and stylesheets
    'lib/extras.php',    // Custom functions
    'lib/setup.php',     // Theme setup
    'lib/nav.php',    // Scripts and stylesheets
    'lib/wp_bootstrap_navwalker.php',    // Scripts and stylesheets
    'lib/titles.php',    // Page titles
    'lib/wrapper.php',   // Theme wrapper class
    'lib/customizer.php', // Theme customizer
    'controller/methods.php'
];

foreach ($sage_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
    }

    require_once $filepath;
}
unset($file, $filepath);

//http://jordiplana.com/wordpress-add-category-taxonomysupport-to-pages
add_action('admin_init', 'reg_tax');
function reg_tax() {
    register_taxonomy_for_object_type('category', 'page');
    add_post_type_support('page', 'category');
}
