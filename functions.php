<?php

// add custom post type 'projects' and feat image metabox
add_theme_support('post-thumbnails');
add_post_type_support( 'projects', 'thumbnail' );   
add_action('init', 'create_projects');
function create_projects()
{
    register_post_type(
        'projects',
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Projects'),

            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => ('Project Type'),
        )
    );

    $labels = array(
        'name' => _x('Project Type', 'taxonomy general name'),
        'singular_name' => _x('Type', 'taxonomy singular name'),
    );
    register_taxonomy('Project Type', array('projects'), array(
        'hierarchical' => true,
        'labels' => $labels,
    ));
}
