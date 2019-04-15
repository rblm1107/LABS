<?php

class Scripts
{
    public static function ajouter_css_js()
    {
        /////////////////////////
        wp_enqueue_style('favicon', get_template_directory_uri() . '/img/favicon.ico');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css');
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
        wp_enqueue_style('popup', get_template_directory_uri() . '/css/magnific-popup.css');
        wp_enqueue_style('media', get_template_directory_uri() . '/css/media.css');
        wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl.carousel.css');
        wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
        wp_enqueue_style('google-font', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700');

        // enregistrement du scripts
        //wp_enqueue_script( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
        wp_enqueue_script('jquery-perso', get_template_directory_uri() . '/js/jquery-2.1.4.min.js');

        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery-perso'], '', true);

        wp_enqueue_script('circle-progress', get_template_directory_uri() . '/js/circle-progress.min.js', ['jquery-perso'], '', true);

        wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/magnific-popup.min.js', ['jquery-perso'], '', true);

        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', ['jquery-perso'], '', true);

        // wp_enqueue_script('map', get_template_directory_uri() . '/js/map.js', ['jquery-perso'], '', true);

        wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', ['bootstrap'], '', true);
    }
}
add_action('wp_enqueue_scripts', [Scripts::class, 'ajouter_css_js']);
