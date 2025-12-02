<?php
// Enqueue scripts
add_action('wp_enqueue_scripts', 'dorothy_enqueue_scripts');
function dorothy_enqueue_scripts() {

    // Mobile menu JS
    wp_enqueue_script(
        'mobile-menu',
        get_theme_file_uri('/assets/js/mobile-menu.js'),
        [],
        null,
        true
    );

    // Tailwind CDN (this is a JS file, not CSS)
    wp_enqueue_script(
        'tailwind-cdn',
        'https://cdn.tailwindcss.com',
        [],
        null,
        false
    );
}

// Enqueue editor + front-end CSS if you have any
add_action('wp_enqueue_scripts', 'dorothy_enqueue_styles');
function dorothy_enqueue_styles() {
    // Add your theme stylesheet (optional)
    wp_enqueue_style(
        'dorothy-style',
        get_stylesheet_uri(),
        [],
        null
    );
}

// Editor styles support
add_action('after_setup_theme', function () {
    add_theme_support('editor-styles');
    add_editor_style('style.css'); // or any CSS you want the editor to load
});

// Add theme support for custom logo
add_action('after_setup_theme', 'dorothy_theme_setup');
function dorothy_theme_setup() {
    add_theme_support('custom-logo', [
        'height'      => 48,
        'width'       => 48,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
}
?>
