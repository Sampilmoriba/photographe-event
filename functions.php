<?php
// Enregistrement des emplacements de menu
register_nav_menus(
    array(
        'header-menu' => 'Header',
        'footer-menu' => 'Footer',
    )
);

// Enqueue des styles et scripts
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Enqueue du style parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Enqueue du style du thème enfant
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0');

    // Enqueue des polices Google
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Space+Mono&display=swap');

    // Enqueue du script JS personnalisé
    wp_enqueue_script('modale-script', get_stylesheet_directory_uri() . '/assets/js/modale.js', array('jquery'), '1.0.0', true);
}

// Ajout de la prise en charge du logo personnalisé
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
