<?php
    register_nav_menus(
        array(
            'header-menu' => 'Header',
            'footer-menu' => 'Footer',
        )
    );

    add_action('wp_enqueue_scripts' , 'theme_enqueue_styles') ; 
    function theme_enqueue_styles()
    {
        wp_enqueue_style('parent-style' , get_template_directory_uri() . '/style.css');
    
        // Chargement du style du thème enfant
        wp_enqueue_style('theme-style' , get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0');
    }


function script_js_custom() {
    // modale de contact
    wp_enqueue_script('modale-script', get_stylesheet_directory_uri() . '/assets/js/modale.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'script_JS_Custom');   


  
$logo_width  = 300;
$logo_height = 100;

add_theme_support(
'custom-logo',
array(
    'height'               => $logo_height,
    'width'                => $logo_width,
    'flex-width'           => true,
    'flex-height'          => true,
    'unlink-homepage-logo' => true,
)
);
