<?php

function su_widgets()
{
    register_sidebar(
        [
            'name'          => __('My First Sidebar', 'udemy'),
            'id'            => 'su_sidebar',
            'description'   => __('This is my first sidebar', 'udemy'),
            'before_widget' => '<div id="%1$s" class="widget cleafix %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
        ]
    );
}
