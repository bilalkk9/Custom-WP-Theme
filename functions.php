<?php
//we are going to add theme support tags here

include(get_template_directory() . '/inc/frontend/bilal-scripts.php');
include(get_template_directory() . '/inc/bilal-init.php');
include(get_template_directory() . '/inc/bilal-cpt.php');


//hooks

add_action( 'wp_enqueue_scripts', 'bilal_styles' );
add_action( 'after_setup_theme', 'bilal_setup_init');
add_action( 'widgets_init', 'bilal_theme_widgets_init');
add_action('init','bilal_cpt');//custom post type
add_action('init','skill_person_taxonomy');//custom taxonomy
add_action('init','skill_person_tags');//custom tags


?>