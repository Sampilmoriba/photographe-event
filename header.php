<!doctype html>
<html <?php language_attributes(); ?>  >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="menu-and-logo-container">
    <?php the_custom_logo(); ?>
    <nav>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'menu_class'     => 'menu',
        ));
        ?>
    </nav>
</div>

