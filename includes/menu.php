<?php
class Menu
{
    public static function ajout_menu()
    {
        register_nav_menu(
            'menu-principal',
            'menu in the header'
        );
    }
}
add_action('after_setup_theme', [Menu::class, 'ajout_menu']);
