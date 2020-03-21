<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=  , initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head();?>
</head>
<body>
    <div id="page" class="site">
    <header>
    <?php
    if(has_custom_logo()){
        the_custom_logo();
    }else{?>
    <a href="<?php echo esc_url(home_url( '/' ) ); ?>">
    <?php bloginfo( 'name' );?>
    </a>
    <?php
        echo '<br>';
        bloginfo( 'description' );
    }
    ?>
    <nav>
<?php
wp_nav_menu( array(
'theme_location'=>'primary',
'container'=>'true',
'menu_class'=>'',
'fallback_cb'=>'true',
'depth'=>0
) );
?>
</nav>
    </header>
    <div id="content" class="site-content">