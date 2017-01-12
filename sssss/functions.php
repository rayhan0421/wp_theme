<?php 

//add_filter('show_admin_bar','__return_false');

add_theme_support('custom-header');
register_nav_menus(array(

	'header_menu'=>'This is our Header Menu',
	'footer_menu'=>'This is our Fotter Menu',

));



function add_css_js(){
	
	//Load CSS
	
	//wp_enqueue_style('name',get_template_directory_uri().'/folder/sub_folder/file',array(),'version','all');
	
	wp_enqueue_style('awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css',array(),'1.0.0','all');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1.0.0','all');
	wp_enqueue_style('smartmenus',get_template_directory_uri().'/assets/css/jquery.smartmenus.bootstrap.css',array(),'1.0.0','all');
	wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css',array(),'1.0.0','all');
	wp_enqueue_style('responsive',get_template_directory_uri().'/assets/css/responsive.css',array(),'1.0.0','all');
	
	//Load Js
	
	//wp_enqueue_script('name',get_template_directory_uri().'/folder/sub_folder/file',array(),'version',true/false);
	
	wp_enqueue_script('plugins',get_template_directory_uri().'/assets/js/plugins.js',array('jquery'),'version',true);
	wp_enqueue_script('functions',get_template_directory_uri().'/assets/js/functions.js',array('jquery'),'version',true);
	
	
}
add_action('wp_enqueue_scripts','add_css_js');