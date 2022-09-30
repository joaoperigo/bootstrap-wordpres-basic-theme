<?php
    function scripts_e_css() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_script( 'jsBootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', '', 1 , true);
        wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js','',1.1, true );
    }
    add_action( 'wp_enqueue_scripts', 'scripts_e_css' );

    //Suporte ao thumbnail
    add_theme_support( 'post-thumbnails' ); 

    // MENU
    function register_my_menu() {
        register_nav_menu('primary',__( 'Menu' ));
      }
      add_action( 'init', 'register_my_menu' );
?>