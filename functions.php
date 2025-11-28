
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script(
        'mobile-menu',
        get_theme_file_uri('/assets/js/mobile-menu.js'),
        [],
        null,
        true
    );
});
