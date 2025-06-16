<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(),
filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

function ajouter_lien_admin_si_connecte($items, $args) {
    
    if (is_user_logged_in() && $args->theme_location === 'main-menu') { // Nom du menu concerné 
        $admin_url = admin_url();                                       // URL du tableau de bord
        $items .= '<li class="menu-item"><a href="' . esc_url($admin_url) . '">Admin</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_si_connecte', 10, 2);
