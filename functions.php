<?php
// Enqueue scripts
add_action('wp_enqueue_scripts', 'dorothy_enqueue_scripts');
function dorothy_enqueue_scripts() {
    wp_enqueue_script(
        'mobile-menu',
        get_theme_file_uri('/assets/js/mobile-menu.js'),
        [],
        null,
        true
    );
}

// Enqueue Tailwind
add_action('wp_enqueue_scripts', 'dorothy_enqueue_styles');
function dorothy_enqueue_styles() {
    // front end
    wp_enqueue_style(
        'tailwind',
        'https://cdn.tailwindcss.com',
        [],
        null
    )

    // Editor
    add_theme_support('editor-styles');
    add_editor_style('https://cdn.tailwindcss.com');
}

// Add theme support for features like custom logo
add_action('after_setup_theme', 'dorothy_theme_setup');
function dorothy_theme_setup() {
    add_theme_support('custom-logo', [
        'height'      => 48,
        'width'       => 48,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
}