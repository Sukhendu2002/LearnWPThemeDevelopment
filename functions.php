<?php

// Setup 
define('SU_DEV_MODE', true);

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));
include(get_theme_file_path('/includes/custom-nav-walker.php'));
include(get_theme_file_path('/includes/widgets.php'));

// Hooks
add_action('wp_enqueue_scripts', 'su_enqueue');
add_action('after_setup_theme', 'su_setup');
add_action('widgets_init', 'su_widgets');

// Shortcodes
