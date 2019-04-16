<?php
class ThemeSupport
{
    function theme_support()
    {
        // add_theme_support('post-thumbnails');
        // add_theme_support('custom-background');
        add_theme_support('custom-logo');
    }
}

add_action('init', [ThemeSupport::class, 'theme_support']);
