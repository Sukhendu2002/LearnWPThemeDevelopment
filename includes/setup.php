<?php

function su_setup()
{

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');


    register_nav_menu(
        'primary',
        __('Primary Menu', 'udemy')
    );
    register_nav_menu(
        'secondary',
        __('Secondary Menu', 'udemy')
    );
}
