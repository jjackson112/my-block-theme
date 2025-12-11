<?php
// Create custom post type
    function create_custom_post_types() {
        register_post_type('events', array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'events' ),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
            'show_in_rest' => true // make it block friendly
        ));
    }
    add_action ( 'init', 'create_custom_post_types' );

add_action('admin_menu', function() {
    remove_menu_page('edit.php?post_type=event'); // remove ghost Events menu
});

// Enqueue scripts and styles
add_action('wp_enqueue_scripts', 'dorothy_enqueue_assets');
function dorothy_enqueue_assets() {

    // Mobile menu JS
    wp_enqueue_script(
        'mobile-menu',
        get_theme_file_uri('/assets/js/mobile-menu.js'),
        [],
        filemtime(get_theme_file_path('/assets/js/mobile-menu.js')),
        true
    );

    // Tailwind CSS CDN
    wp_enqueue_style(
        'tailwind-cdn',
        'https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css',
        [],
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        [],
        null
    );

    // Theme stylesheet
    wp_enqueue_style(
        'dorothy-style',
        get_stylesheet_uri(),
        [],
        filemtime(get_theme_file_path('/style.css'))
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

