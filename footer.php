<?php wp_footer(); ?>
<footer>
<nav>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'menu_class' => 'classe-menu',
    ));
    ?>
</nav>
<?php get_template_part('templates-parts/modale'); ?>

</footer>



</body>
</html>