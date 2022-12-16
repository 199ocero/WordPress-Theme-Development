<?php

// Use theme name at the start of every fuction name

// A function to load the Stylesheet
function wpdevs_load_scripts()
{
    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
}

// A WP function which will enqueue our function
add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');

//Support Config
function wpdevs_config(){
    // Register Menu Items
    register_nav_menus(array(
        'wp_devs_main_menu' => "Main Menu",
        'wp_devs_footer_menu' => "Footer Menu",
    ));
}

add_action('after_setup_theme', 'wpdevs_config',0);