<?php 

function classic_ace_register_styles(){

    $version = wp_get_theme()-> get('Version');

    wp_enqueue_style('classicace-custom_style', get_template_directory_uri() . "/style,css", array('classicace-bootstrap'), $version, 'all');
    wp_enqueue_style('classicace-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css", array(), '5.2.0', 'all');

}

add_action('wp_enqueue_scripts', 'classic_ace_register_styles');

function classic_ace_register_scripts(){
    
    wp_enqueue_script('classicace-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js", array(), '5.2.0',true);
    
}

add_action('wp_enqueue_scripts', 'classic_ace_register_scripts');

?>