<?php
function giving_theme_agregar_css_js(){
    /* adding styleshhets and js to the theme */
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array ( 'jquery' ), 5.0, true);
}
add_action('wp_enqueue_scripts','giving_theme_agregar_css_js', );

// add widget portfolio custom post 

function giving_theme_widgets(){
    register_sidebar( array(
        'id' => 'widget-portfolio',
        'name' => __('widget portfolio'),
        'description' => __('this widget allows to show the grid portfolio of custom post items in givning theme '),
        'before_widget'=> '<div class="container my-5">',
        'after_widget'=> '</div>',
        'before_title'=> '<h1>',
        'after_title'=> '</h1><hr>'
    ) );
}
add_action( 'widgets_init', 'giving_theme_widgets');



add_theme_support('post_thumbnails');
function avalibleThumbnails_support(){
    //add correctly featured image support 
    add_theme_support('post_thumbnails');
}

add_action( 'after_setup_theme','avalibleThumbnails_support' );

/* Widget sidebar post custom theme */
function sidebar_post_widget(){
    register_sidebar( array(
        'id' => 'sidebar-post',
        'name' => __('sidebar'),
        'description' => __('this widget allows to show a sidebar in post theme '),
        'before_widget'=> '<div class="sidebar-widget">',
        'after_widget'=> '</div>',
        'before_title'=> '<div class="continer-widget-title">',
        'after_title'=> '</div>'
    ) );
}
add_action( 'widgets_init', 'sidebar_post_widget');



/* Widget content post custom theme */
function content_post_widget(){
    register_sidebar( array(
        'id' => 'content-post',
        'name' => __('content post'),
        'description' => __('this widget allows to show a content in post theme '),
        'before_widget'=> '<div class="content-widget">',
        'after_widget'=> '</div>',
        'before_title'=> '<div class="content-title">',
        'after_title'=> '</div>'
    ) );
}
add_action( 'widgets_init', 'content_post_widget');