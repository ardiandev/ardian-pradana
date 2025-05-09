<?php
// Enqueue theme styles
function ardian_pradana_styles() {
    wp_enqueue_style('ardian-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'ardian_pradana_styles');

// Include the TGM Plugin Activation class and configuration file
require_once get_stylesheet_directory() . '/includes/tgmpa-settings/class-tgm-plugin-activation.php';
require_once get_stylesheet_directory() . '/includes/tgmpa-settings/tgm-plugin-activation.php'; 

// Register the required plugins
add_action('tgmpa_register', 'register_required_plugins');
