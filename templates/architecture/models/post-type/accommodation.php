<?php
if ( ! function_exists('accommodation_post_type') ) {
    // Register Custom Post Type
    function accommodation_post_type() {
        $labels = array(
            'name'                => _x( 'Accommodations', 'Post Type General Name', 'sage' ),
            'singular_name'       => _x( 'Accommodation', 'Post Type Singular Name', 'sage' ),
            'menu_name'           => __( 'Accommodation', 'sage' ),
            'name_admin_bar'      => __( 'Accommodation', 'sage' ),
            'parent_item_colon'   => __( 'Parent Accommodation:', 'sage' ),
            'all_items'           => __( 'All Accommodations', 'sage' ),
            'add_new_item'        => __( 'Add New Accommodation', 'sage' ),
            'add_new'             => __( 'Add New', 'sage' ),
            'new_item'            => __( 'New Accommodation', 'sage' ),
            'edit_item'           => __( 'Edit Accommodation', 'sage' ),
            'update_item'         => __( 'Update Accommodation', 'sage' ),
            'view_item'           => __( 'View Accommodation', 'sage'     ),
            'search_items'        => __( 'Search Accommodation', 'sage'     ),
            'not_found'           => __( 'Not found', 's    age' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
        );
        $rewrite = array(
            'slug'                => 'accommodation',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'Accommodation', 'sage' ),
            'description'         => __( 'List of hotels, guest houses, apartments that will serve tourist clients', 'sage' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', ),
            'taxonomies'          => array( 'category', 'post_tag', 'country', 'location', 'theme' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-admin-multisite',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        register_post_type( 'accommodation', $args );
    }
    add_action( 'init', 'accommodation_post_type', 0 );
}
?>
