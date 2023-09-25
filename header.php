<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <a href="index.html">
        
    </a>
    <nav>
        <ul class="menu">
            <li class="nav-item-link nav-item"><img src="http://localhost/planty/wordpress/wp-content/uploads/2023/09/Logo.png" alt="Logo planty" id="logo"></li>
            <li class="nav-item-link nav-item"><a href="http://localhost/planty/wordpress/nous-rencontrer/">nous rencontrer</a></li>
            <li class="nav-item-link nav-item"><a href="' . get_admin_url() . '"  class= "nav-link">Admin</a></li>
            <li class="nav-item-link nav-item"><a href="planty_wp/commander/"><button class="button-commander">Commander</button></a></li>
        </ul>
        
    </nav>

    <?php 

wp_nav_menu([
'theme_location' => 'header',
'container' => 'false',
//ajout de class "ul" 
'menu_class' => 'menu-nav'
]);
