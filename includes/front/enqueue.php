<?php

function su_enqueue()
{
    $uri = get_theme_file_uri();
    $ver = SU_DEV_MODE ? time() : false;

    wp_register_style(
        'su_google_fonts',
        'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i',
        [],
        $ver
    );
    wp_register_style(
        'su_bootstrap',
        $uri . '/assets/css/bootstrap.css',
        [],
        $ver
    );
    wp_register_style(
        'su_style',
        $uri . '/assets/css/style.css',
        [],
        $ver
    );
    wp_register_style(
        'su_dark',
        $uri . '/assets/css/dark.css',
        [],
        $ver
    );
    wp_register_style(
        'su_font_icons',
        $uri . '/assets/css/font-icons.css',
        [],
        $ver
    );
    wp_register_style(
        'su_animate',
        $uri . '/assets/css/animate.css',
        [],
        $ver
    );
    wp_register_style(
        'su_magnific_popup',
        $uri . '/assets/css/magnific-popup.css',
        [],
        $ver
    );
    wp_register_style(
        'su_responsive',
        $uri . '/assets/css/responsive.css',
        [],
        $ver
    );
    wp_register_style(
        'su_custom',
        $uri . '/assets/css/custom.css',
        [],
        $ver
    );

    wp_enqueue_style('su_google_fonts');
    wp_enqueue_style('su_bootstrap');
    wp_enqueue_style('su_style');
    wp_enqueue_style('su_dark');
    wp_enqueue_style('su_font_icons');
    wp_enqueue_style('su_animate');
    wp_enqueue_style('su_magnific_popup');
    wp_enqueue_style('su_responsive');
    wp_enqueue_style('su_custom');

    wp_register_script('su_plugins', $uri . '/assets/js/plugins.js', [], $ver, true);
    wp_register_script('su_functions', $uri . '/assets/js/functions.js', [], $ver, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('su_plugins');
    wp_enqueue_script('su_functions');
}
