<?php
function create_topics_hierarchical_taxonomy() {

    register_taxonomy(
        'locations',
        ['service'],
        [
            'labels'            => array(
                'name'              => _x( 'Locations', 'taxonomy general name', THEME_TEXTDOMAIN ),
                'singular_name'     => _x( 'Location', 'taxonomy singular name', THEME_TEXTDOMAIN ),
                'search_items'      => __( 'Search Locations', THEME_TEXTDOMAIN ),
                'all_items'         => __( 'All Locations', THEME_TEXTDOMAIN ),
                'parent_item'       => __( 'Parent Location', THEME_TEXTDOMAIN ),
                'parent_item_colon' => __( 'Parent Location:', THEME_TEXTDOMAIN ),
                'edit_item'         => __( 'Edit Location', THEME_TEXTDOMAIN ),
                'update_item'       => __( 'Update Location', THEME_TEXTDOMAIN ),
                'add_new_item'      => __( 'Add New Location', THEME_TEXTDOMAIN ),
                'new_item_name'     => __( 'New Location', THEME_TEXTDOMAIN ),
                'menu_name'         => __( 'Locations', THEME_TEXTDOMAIN )
            ),
            'public'                => true,
            'publicly_queryable'    => true,
            'query_var'             => true,
            'show_in_nav_menus'     => true,
            'show_ui'               => true,
            'show_tagcloud'         => false,
            'hierarchical'          => true,
            'show_admin_column'     => true,
            'rewrite'           	=> [
                'slug' => 'locations',
            ]
        ]
    );

}
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );