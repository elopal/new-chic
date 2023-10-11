<?php 

// add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
// function chicdressing_enqueue_styles() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
// }

// add_filter( 'big_image_size_threshold', '__return_false' );




add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );

function chicdressing_enqueue_styles() {
    // Charger le style du thème parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Décharger les polices Google du thème parent
    wp_dequeue_style('ashe-playfair-font');
    wp_dequeue_style('ashe-opensans-font');
    wp_dequeue_style('ashe-kalam-font');
    wp_dequeue_style('ashe-rokkitt-font');

    // Charger les polices locales
    wp_enqueue_style('local-google-fonts', get_stylesheet_directory_uri() . '/fonts/custom-fonts.css', array(), '1.0');
}
