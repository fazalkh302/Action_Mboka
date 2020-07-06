<?php

require_once('bootstrap-navwalker.php');

// Theme Supports her...
add_theme_support('menus');

function wpb_theme_setup(){
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme','wpb_theme_setup');

// register_nav_menus(
//     array(
//         'primary-menu' => __('Primary Menu'),
//         'secondary-menu' => __('Secondary Menu'),
//     )
// );