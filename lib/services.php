<?php
function create_services_post_type() {

    register_post_type(
        'service',
        array(
            'labels'             => array(
                'name'               => _x( 'Services', 'post type general name', THEME_TEXTDOMAIN ),
                'singular_name'      => _x( 'Service', 'post type singular name', THEME_TEXTDOMAIN ),
                'menu_name'          => _x( 'Services', 'admin menu', THEME_TEXTDOMAIN ),
                'name_admin_bar'     => _x( 'Service', 'add new on admin bar', THEME_TEXTDOMAIN ),
                'add_new'            => _x( 'Add New', 'service', THEME_TEXTDOMAIN ),
                'add_new_item'       => __( 'Add New Service', THEME_TEXTDOMAIN ),
                'new_item'           => __( 'New Service', THEME_TEXTDOMAIN ),
                'edit_item'          => __( 'Edit Service', THEME_TEXTDOMAIN ),
                'view_item'          => __( 'View Service', THEME_TEXTDOMAIN ),
                'all_items'          => __( 'All Services', THEME_TEXTDOMAIN ),
                'search_items'       => __( 'Search Services', THEME_TEXTDOMAIN ),
                'parent_item_colon'  => __( 'Parent Services:', THEME_TEXTDOMAIN ),
                'not_found'          => __( 'No services found.', THEME_TEXTDOMAIN ),
                'not_found_in_trash' => __( 'No services found in Trash.', THEME_TEXTDOMAIN )
            ),
            'description'        => __( 'Description.', THEME_TEXTDOMAIN ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_rest'		  => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'services' ),
            'capability_type'    => 'post',
            'has_archive'        => false,
            'hierarchical'       => true,
            'menu_position'      => null,
            'menu_icon'		  => 'dashicons-admin-tools',
            'supports'           => array('title', 'thumbnail', 'editor'),
        )
    );
}
add_action('init', 'create_services_post_type');