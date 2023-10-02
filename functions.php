<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Blankslate
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));

}
?>

<?php

add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );

function add_admin_link( $items, $args ) {

    if (is_user_logged_in() && $args->theme_location == 'menu-1') {

        $items .= '<li><a href="'. get_admin_url() .'">Admin</a></li>';

    }

    return $items;

}

?>





<?php
function planty_admin_link( $bard, $args ) {

    if (is_user_logged_in() && $args->theme_location == 'header') {

        $bard='<li id= "menu-item-42" class= "nav-item"><a href="http://localhost/Planty/nous-rencontrer/" class= "nav-link">Nous rencontrer</a></li>'.'<li class= "nav-item-link nav-item"><a href="'. get_admin_url() .'"'.' class= "nav-link">Admin</a></li>'.'<li id="menu-item-41" class= "nav-item"><a href="href=http://localhost/planty/commander/" class= "nav-link">Commander</a></li>';

    }
    return $bard;
      
}

add_filter( 'wp_nav_menu_items','planty_admin_link', 10, 2 );

?>
