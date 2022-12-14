<?php 

//Theme Files
function theme_files()
{
    wp_enqueue_style( 'main-style' , get_template_directory_uri(  ) . '/style.css' );
    wp_enqueue_style( 'bootstrap' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );

    wp_enqueue_script( 'bootstrap.js', 
    'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',
    array('jquery'),
    true,
    true );
}
add_action( 'wp_enqueue_scripts', 'theme_files' );

add_theme_support( 'title-tag' );
?>