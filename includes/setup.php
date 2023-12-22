<?php

function su_setup()
{

    add_theme_support('post-thumbnails');

    register_nav_menu(
        'primary',
        __('Primary Menu', 'udemy')
    );
}
