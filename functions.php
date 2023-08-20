<?php

function read_script()
{
    wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap' );
    wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap' );
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '5.15.4' );
    wp_enqueue_style( 'reset', '//unpkg.com/destyle.css@3.0.2/destyle.min.css', array(), '1.0.0' );
    wp_enqueue_style( 'style', get_theme_file_uri( '/css/style.css' ), array(), '1.0.0' );
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true );
    wp_enqueue_script( 'script', get_theme_file_uri( '/js/script.js' ), array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'read_script' );

function custom_theme_support()
{
        // テーマサポート
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 960, 640 ); //デフォルトサイズの設定
        add_theme_support( 'title-tag' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'menus' );

        register_nav_menus( array (
            'header_menu' => esc_html( 'header-menu', 'yosu-portfolio' ),
        ));

}
add_action( 'after_setup_theme', 'custom_theme_support' );

// wp_nav_menuのliにclass追加
function add_additional_class_on_li( $classes, $item, $args )
{
    if ( isset ( $args->add_li_class ) ) {
    $classes['class'] = $args->add_li_class;
}
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
