<?php
function bilal_styles(){
    wp_enqueue_style( 'maincss', get_stylesheet_uri(),NULL,microtime());
    wp_enqueue_style( 'mybootstrap', get_template_directory_uri() . '/assets/css/mybootstrap.css' );
    wp_enqueue_script( 'myscript', get_template_directory_uri() . '/assets/js/scripts.js', microtime(),true);

}



?>