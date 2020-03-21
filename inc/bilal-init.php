<?php


if(! function_exists('bilal_setup_init')):
function bilal_setup_init(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5',array(
        'saerch-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));
    add_theme_support( 'responsive-embeds' );

    //gutenberg ready theme
    //add_theme_support( 'wp-block-styles' );
    $bilalImages = array(
        'default-image'=>'',
        'default-color'=>'ffffff'
    );

    //custom logo
    $bilalLogo=array(
        'height'=>150,
        'width'=>150,
        'flex-height'=>'true',
        'flex-width'=>'true',
    );
    add_theme_support( 'custom-logo',$bilalLogo );
    add_theme_support( 'custom-background',$bilalImages );
    //add_theme_support('menus');
    //register_nav_menu( 'primary', __('Bilal Main Menu', 'bilaltheme') );
    register_nav_menus( array(
        'primary'=> __('Bilal Main Menu','bilaltheme'),
        'secomdary'=> __('Bilal Secondary Menu','bilaltheme'),
        'social'=> __('Bilal Social Menu','bilaltheme'),
        'clients'=> __('Bilal Clients Menu','bilaltheme'),
    ) );

    //register sidebar
    function bilal_theme_widgets_init(){
        //first sidebar
        register_sidebar( array(
            'name'=>__('Main Bilal Sidebar','bilaltheme'),
            'id'=>'bilal-sidebar-1',
            'description'=>__('Please add your widgets here','bilaltheme'),
            'before_widget'=>'<section id="%1$s" class="myS %2$s">',
            'after_widget'=>'</section>',
            'before_title'=>'<div class="widget_container"><h2 class="widget-title">',
            'after_title'=>'</h2></div>',
        ) );
        //second sidebar
        register_sidebar( array(
            'name'=>__('Footer Sidebar','bilaltheme'),
            'id'=>'bilal-sidebar-2',
            'description'=>__('Please add your footer widgets here','bilaltheme'),
            'before_widget'=>'<section id="%1$s" class="myS %2$s">',
            'after_widget'=>'</section>',
            'before_title'=>'<div class="widget_container"><h2 class="widget-title">',
            'after_title'=>'</h2></div>',
        ) );
    }
}
endif;


?>