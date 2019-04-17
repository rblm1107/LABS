<?php
class Theme_supp
{
    public static function theme_support()
    {
        // add_theme_support('post-thumbnails');
        // add_theme_support('custom-background');
        add_theme_support('custom-logo');
    }
}

add_action('init', [Theme_supp::class, 'theme_support']);
