<?php 

// Registered Theme Support
function classic_ace_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); 
}

add_action( 'after_setup_theme', 'classic_ace_theme_support' );

// Registered Theme Styles
function classic_ace_register_styles(){

    $version = wp_get_theme()-> get('Version');

    wp_enqueue_style('classic_ace-custom_style', get_template_directory_uri() . "/style,css", array('classicace-bootstrap'), $version, 'all');
    wp_enqueue_style('classic_ace-bootstrap_style', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css", array(), '5.3.0', 'all');

}

add_action('wp_enqueue_scripts', 'classic_ace_register_styles');

function classic_ace_register_scripts(){
    
    wp_enqueue_script('classic_ace-bootstrap_script', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js", array(), '5.3.0',true);
    
}

add_action('wp_enqueue_scripts', 'classic_ace_register_scripts');

?>