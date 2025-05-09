<?php

function register_required_plugins() {
    $plugins = array(
        array(
            'name'               => 'Larris Form',
            'slug'               => 'larris-form',
            'source'             => 'https://github.com/ardiandev/larris-form/archive/refs/heads/main.zip',
            'required'           => true,
            'version'            => '', // Optional: leave blank to use the latest version
            'force_activation'   => false, // Optional: choose whether to auto-activate
            'force_deactivation' => false, // Optional: choose whether to deactivate on uninstall
            'external_url'       => 'https://github.com/ardiandev/larris-form', // Optional: a URL for more info
        ),
        array(
            'name'               => 'Larris GitHub Showcase',
            'slug'               => 'larris-github-showcase',
            'source'             => 'https://github.com/ardiandev/larris-github-showcase/archive/refs/heads/main.zip',
            'required'           => false, // Not required but recommended
            'external_url'       => 'https://github.com/ardiandev/larris-github-showcase',
        ),
    );

    $config = array(
        'id'           => 'ardian-pradana', // Your theme's unique ID
        'menu'         => 'tgmpa-install-plugins', // The menu slug
        'has_notices'  => true, // Show notice if the plugin is not installed
        'dismissable'  => true, // Allow user to dismiss the notice
        'is_automatic' => false, // Don’t auto-activate by default
        'message'      => '', // Optional: Display a custom message on plugin page
    );

    tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'register_required_plugins' );
