<?php

require_once 'class/Envolcrea_Customize.class.php';

function materializestarter_enqueue_styles() {
    wp_enqueue_style( 'materialize-css', get_template_directory_uri() . '/materializestarter/materialize/css/materialize.min.css' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/style.css');
}

function materializestarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('materialize-js', get_template_directory_uri().'/materializestarter/materialize/js/materialize.min.js', $dependencies, '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'materializestarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'materializestarter_enqueue_scripts' );

function theme_js() {
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/custom.js', array("jquery"));
}
add_action('wp_footer', 'theme_js');


/* création menu */
register_nav_menu( 'premier-menu', __( 'Premier menu' ) );

/* création section pour les params */
add_action( 'customize_register' , array( 'Envolcrea_Customize' , 'register' ) );

register_nav_menu( 'footer-menu', __( 'Pied de page' ) );

function Envolcrea_setup() {
    // support du theme
    add_theme_support( 'title-tag');

    // enlève le générateur de version
    remove_action( 'wp_head', 'wp_generator');
}
?>

