<?php

function su_social_customizer_section($wp_customize)
{
    $wp_customize->add_setting('su_facebook_handle', array(
        'default' => ''
    ));

    $wp_customize->add_section('su_social_section', array(
        'title' => __('Udemy Social Settings', 'udemy'),
        'priority' => 30
    ));

    $wp_customize->add_control('su_facebook_handle', array(
        'label' => __('Facebook Handle', 'udemy'),
        'section' => 'su_social_section',
        'settings' => 'su_facebook_handle',
        'type' => 'text'
    ));
}
