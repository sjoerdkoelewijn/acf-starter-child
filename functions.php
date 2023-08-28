<?php

defined( 'ABSPATH' ) || exit;

/***** Add fonts ****************************************************************************************************/

function sgwrd_add_fonts() {
 
    wp_enqueue_style( 
            'sgwrd-fonts', 
            'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,800;1,300;1,400;1,500;1,800&display=swap', 
            false 
        ); 
    }
     
add_action( 'wp_enqueue_scripts', 'sgwrd_add_fonts' ); 

/***** Child theme - Styles ****************************************************************************************************/

function sgwrd_child_enqueue_styles() {
    $parent_style = 'sgwrd-main-style'; 

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'sgwrd-child-style',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        array( $parent_style ),
        SGWRD_CHILD_CACHE_BUST()
    );

}
add_action( 'wp_enqueue_scripts', 'sgwrd_child_enqueue_styles' );

/***** Child theme - JavaScript ***********************************************************************************************/

function sgwrd_child_theme_scripts() {
    wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'sgwrd_child_theme_scripts' );



