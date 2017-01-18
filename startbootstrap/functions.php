<?php
require_once ("inc/custom_post.php");



function start_bootstrap_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '3.1', 'all');
    wp_enqueue_style( 'fontawsome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '3.1', 'all');
    wp_enqueue_style( 'simple', get_template_directory_uri() . '/vendor/simple-line-icons/css/simple-line-icons.css', array(), '3.1', 'all');
    wp_enqueue_style( 'device-mock', get_template_directory_uri() . '/vendor/device-mockups/device-mockups.min.css', array(), '3.1', 'all');
    wp_enqueue_style( 'nav', get_template_directory_uri() . '/css/new-age.min.css', array(), '3.1', 'all');
    wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato', array(), '3.1', 'all');
    wp_enqueue_style( 'cata', 'https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900', array(), '3.1', 'all');
    wp_enqueue_style( 'multi', 'https://fonts.googleapis.com/css?family=Muli', array(), '3.1', 'all');

    wp_enqueue_script( 'script', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', array (  ), 1.0, false);

    wp_enqueue_script( 'respond', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', array (  ), 1.1, false);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

    wp_enqueue_script( 'script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array (  ), 1.0, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/new-age.min.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'start_bootstrap_scripts' );