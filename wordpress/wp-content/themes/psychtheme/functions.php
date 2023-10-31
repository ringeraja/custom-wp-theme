<?php

function customblog_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','customblog_theme_support');

function customblog_menus(){
    //can add multyple locations
    $locations = array(
        'primary' => "Top Primary Menu",
        'footer' => "Footer Menu Items Right"
    );

    register_nav_menus($locations);
}

add_action('init', 'customblog_menus');

function customblog_register_styles(){
    $version = wp_get_theme()->get( 'Version');
    wp_enqueue_style('customblog-style', get_template_directory_uri() . "/assets/css/style.css", array('customblog-bootstrap'), $version, 'all');
    wp_enqueue_style('customblog-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2', 'all');
    wp_enqueue_style('customblog-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css", array(), '6.4.2', 'all');
}

add_action('wp_enqueue_scripts','customblog_register_styles');

function customblog_register_scripts(){
    wp_enqueue_script('customblog-jquery', "https://code.jquery.com/jquery-3.7.1.min.js", array(),'3.7.1',true);
    wp_enqueue_script('customblog-popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js", array(),'2.11.8',true);
    wp_enqueue_script('customblog-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js", array(),'5.3.2',true);
    wp_enqueue_script('customblog-myscript', get_template_directory_uri() . "/assets/js/main.js", array(),'1.0',true);
}

add_action('wp_enqueue_scripts','customblog_register_scripts');

function customblog_widget_areas(){
    
    register_sidebar(
        array(
            'name' => 'Single Post Sidebar Widget',
            'id' => 'sidebar-1',
            'description' => 'Single Post Sidebar Widget Area',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'before_widget' => '',
        )
    );

    register_sidebar(
        array(
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'before_widget' => '',
        )
    );
}


add_action('widgets_init','customblog_widget_areas');


?>