<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css'); 
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/sass/style.css', array('swiper','parent-style'), filemtime(get_stylesheet_directory() . '/assets/sass/style.css'));
    wp_enqueue_script( 'foce_child_script', get_theme_file_uri() . '/assets/js/script.js', array( 'swiper-js','jquery' ), '1.1', true);
    wp_enqueue_script( 'swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), '1.0', true);
    wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '1.0');
    wp_enqueue_script( 'simple-parallax-js' , get_stylesheet_directory_uri() . '/js/parallax.js' , array(),'1.0' , true);
    wp_enqueue_script( 'simple-parallax', 'https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js', array(), true);
} 

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}
?>