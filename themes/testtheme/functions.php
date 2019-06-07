<?php 

function registerThemes()
{
    wp_register_style( 'base', get_template_directory_uri() . '/style.css' );
}

add_action( 'init', 'registerThemes' );

function theme_enqueue_default()
{
   wp_enqueue_style( 'base' );
}

add_action('wp_enqueue_scripts', 'theme_enqueue_default');

function registerfunc()
{
    echo 'hit!';
}
add_action( 'admin_post_register', 'registerfunc');

?>