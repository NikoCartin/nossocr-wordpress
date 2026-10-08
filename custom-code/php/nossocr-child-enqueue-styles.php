<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue child theme stylesheet.
 * Hello Elementor may not have meaningful parent CSS, pero esta función es segura.
 */
function nossocr_child_enqueue_styles() {
    // Enqueue parent style only if present (some minimal themes)
    $parent_style = 'hello-elementor-style'; // handle for parent if exists; it's safe si no existe
    if ( wp_style_is( $parent_style, 'registered' ) ) {
        wp_enqueue_style( $parent_style );
    }

    wp_enqueue_style( 'nossocr-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );
}
add_action( 'wp_enqueue_scripts', 'nossocr_child_enqueue_styles', 20 );
