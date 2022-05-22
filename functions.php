<?php

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

if ( !function_exists('child_theme_enqueue_styles') ) {
    function child_theme_enqueue_styles() {
        $parenthandle = 'hello-elementor';
        $parenthandleTheme = 'hello-elementor-theme-style';
        $theme = wp_get_theme();

        wp_enqueue_style(
            $parenthandle,
            get_template_directory_uri() . '/style.min.css',
            [],
            $theme->parent()->get('Version')
        );

        wp_enqueue_style(
            'hello-elementor-child',
            get_stylesheet_uri(),
            [ $parenthandle ],
            $theme->get('Version')
        );
    }
}
