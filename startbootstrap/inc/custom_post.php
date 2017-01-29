<?php
// see example custom_post_type in wp

// first we register custom_post
// see https://codex.wordpress.org/Function_Reference/register_post_type#Example

function slider_post(){


 // register slider post

    $args = array(
        'labels'             => "sliders",
        'description'        => __( 'Description.', 'Slider ' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Slider' ),
        'capability_type'    => 'post', //see hierarchical true or false
        'has_archive'        => true,
        'hierarchical'       => false, // when capability type post will false cause post has no parent child .if page will true
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
        // for support thumbnails we need add_theme_support(post_thumbnails); in functions.php
        //see https://developer.wordpress.org/reference/functions/add_theme_support/
    );
    register_post_type( 'Slider', $args );

}


// then we will initialize and will hook

add_action("init","slider_post");
