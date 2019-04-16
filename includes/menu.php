<?php
class Menu
{
    public static function addMenu()
    {
        register_nav_menus([
            'menu-principal' => 'menu in the header ',
            'menu-footer' => 'menu in footer of page'
        ]);
        // attention ici on cree l'emplacement et pas le menu en soit ;
    }

    /*voir aussi pour page */
    //https://developer.wordpress.org/reference/functions/add_menu_page/
    //add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null ) 
    // public static function ajout_filtre($attribut)
    // {
    //     $attribut['class'] = 'text-dark';
    //     return $attribut;
    // }
    public static function ajout_filter_li($att)
    {
        $att['class'] = 'active';
        return $att;
    }
}
add_action('after_setup_theme', [Menu::class, 'addMenu']);
// add_filter('nav_menu_link_attributes', [Menu::class, 'ajout_filtre'], 10, 1);
// add_filter('nav_menu_css_class', [Menu::class, 'ajout_filter_li'], 10, 1);
