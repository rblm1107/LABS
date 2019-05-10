<?php
class Customiser
{

    public static function custom_home_sections($wp_customize)
    {
        //panel
        $wp_customize->add_panel('sections-panel', [
            'title' => 'HOME-sections',
            'decription' => 'personaliser la section'
        ]);
        // :::::the big logo or title:::::::::
        $wp_customize->add_section('modifier-titre', [
            'panel' => 'sections-panel',
            'title' => 'Modifier le titre-image de votre site'
        ]);
        // setting
        $wp_customize->add_setting('titre-big-logo');
        //control
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'titre-big-logo', // setting-id
            [
                'label' => 'Change the logo-title',
                'section' => 'modifier-titre',
            ]
        ));
        //::::::::::::section carousel:::::::
        $wp_customize->add_section('mon-carousel', [
            'panel' => 'sections-panel',
            'title' => 'Modifier la carousel'
        ]);
        // settings1
        $wp_customize->add_setting('first-image');
        //settings2
        $wp_customize->add_setting('second-image');
        //control1
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'first-image', // setting-id
            [
                'label' => 'Add the first image',
                'section' => 'mon-carousel',
            ]
        ));
        //control2
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'second-image',
            [
                'label' => 'Add the second image',
                'section' => 'mon-carousel',
            ]
        ));
        ///////////section about/////////////
        $wp_customize->add_section('about', [
            'panel' => 'sections-panel',
            'title' => 'Modifier Section-about'
        ]);
        //settings
        $wp_customize->add_setting('titreBegin', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('titreSpan', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('titreEnd', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('text-left', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('text-right', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        //control
        $wp_customize->add_control('about-control-title', [
            'section' => 'about',
            'settings' => 'titreBegin',
            'label' => 'The title begin',
            'description' => 'change text',
            'type' => 'text'
        ]);
        $wp_customize->add_control('about-control-title-span', [
            'section' => 'about',
            'settings' => 'titreSpan',
            'label' => 'The span text',
            'description' => 'change text',
            'type' => 'text'
        ]);
        $wp_customize->add_control('about-control-title-end', [
            'section' => 'about',
            'settings' => 'titreEnd',
            'label' => 'The title end',
            'description' => 'change text',
            'type' => 'text'
        ]);
        $wp_customize->add_control('about-control-themes', [
            'section' => 'about',
            'settings' => 'text-left',
            'label' => 'for-first-paragraph',
            'description' => 'change paragraph',
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('about-control-date', [
            'section' => 'about',
            'settings' => 'text-right',
            'label' => 'for-second-paragraph',
            'description' => 'change paragraph',
            'type' => 'textarea'
        ]);
        //////////// la video /////////////:
        $wp_customize->add_section('ma-video', [
            'panel' => 'sections-panel',
            'title' => 'Modifier la Video'
        ]);
        $wp_customize->add_setting('video', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('video-control', [
            'section' => 'ma-video',
            'settings' => 'video',
            'label' => 'to change this video',
            'description' => 'change this video',
            // 'type' => 'file',
        ]);
        // ::::::::: section cient test temoinial:::::::
        $wp_customize->add_section('client-test', [
            'panel' => 'sections-panel',
            'title' => 'Modifier section client test'
        ]);
        // le titre
        $wp_customize->add_setting('client-test-titre', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('control-client-test-titre', [
            'section' => 'client-test',
            'settings' => 'client-test-titre',
            'label' => 'for-title',
            'description' => 'change the title',
            'type' => 'text'
        ]);
        // settings slide1 left
        $wp_customize->add_setting('slid1-text-left', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('client1-image');
        $wp_customize->add_setting('slid1-left-person-name', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('slid1-left-person-info', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        // control slid1 left
        $wp_customize->add_control('control-slid1-text-left', [
            'section' => 'client-test',
            'settings' => 'slid1-text-left',
            'label' => 'for-paragraph left in the first slide',
            'description' => 'change the text',
            'type' => 'textarea'
        ]);
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'client1-image', // setting-id
            [
                'label' => 'Add the image',
                'section' => 'client-test',
            ]
        ));
        $wp_customize->add_control('control-slid1-left-person-name', [
            'section' => 'client-test',
            'settings' => 'slid1-left-person-name',
            'label' => 'for -slide1- person name',
            'description' => 'change the text',
            'type' => 'text'
        ]);
        $wp_customize->add_control('control-slid1-left-person-info', [
            'section' => 'client-test',
            'settings' => 'slid1-left-person-info',
            'label' => 'for -slide1- person info',
            'description' => 'change the text',
            'type' => 'text'
        ]);
        // settings slide 1 right
        $wp_customize->add_setting('slid1-text-right', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('client2-image');
        $wp_customize->add_setting('slid1-right-person-name', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('slid1-right-person-info', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        // control slid1
        $wp_customize->add_control('control-slid1-text-right', [
            'section' => 'client-test',
            'settings' => 'slid1-text-right',
            'label' => 'for-paragraph right in the first slide',
            'description' => 'change the text',
            'type' => 'textarea'
        ]);
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'client2-image', // setting-id
            [
                'label' => 'Add the image',
                'section' => 'client-test',
            ]
        ));
        $wp_customize->add_control('control-slid1-right-person-name', [
            'section' => 'client-test',
            'settings' => 'slid1-right-person-name',
            'label' => 'Add a person name',
            'description' => 'change the text',
            'type' => 'text'
        ]);
        $wp_customize->add_control('control-slid1-right-person-info', [
            'section' => 'client-test',
            'settings' => 'slid1-right-person-info',
            'label' => 'Add a person info',
            'description' => 'change the text',
            'type' => 'text'
        ]);

        //////////////section promotion////////////
        $wp_customize->add_section('promotion', [
            'panel' => 'sections-panel',
            'title' => 'Modifier Promotion-section'
        ]);
        //settings
        $wp_customize->add_setting('titre-promotion', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('text-promotion', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        //control
        $wp_customize->add_control('promotion-control-title', [
            'section' => 'promotion',
            'settings' => 'titre-promotion',
            'label' => 'Change The title',
            'type' => 'text'
        ]);
        $wp_customize->add_control('promotion-control-para', [
            'section' => 'promotion',
            'settings' => 'text-promotion',
            'label' => 'Change The text',
            'type' => 'textarea'
        ]);
        //::::::::::::section Team:::::::
        $wp_customize->add_section('team', [
            'panel' => 'sections-panel',
            'title' => 'Modifier la section Team'
        ]);
        // settings
        $wp_customize->add_setting('team-image');
        //control
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'team-image', // setting-id
            [
                'label' => 'Add image',
                'section' => 'team',
            ]
        ));
    }
    public static function custom_contact_page($wp_customize)
    {
        //panel
        $wp_customize->add_panel('contact-panel', [
            'title' => 'Personaliser la page contact',
            'decription' => 'personaliser la section'
        ]);
        ///section contact me
        $wp_customize->add_section('contact-us', [
            'panel' => 'contact-panel',
            'title' => 'Modifier contact-us section'
        ]);
        //settings
        $wp_customize->add_setting('contact-us-titre', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('contact-us-text', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('contact-us-office', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('contact-us-adress', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('contact-us-city', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('contact-us-phone', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_setting('contact-us-mail', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        //control
        $wp_customize->add_control('contact-us-control-titre', [
            'section' => 'contact-us',
            'settings' => 'contact-us-titre',
            'label' => 'Change The title',
            'type' => 'text'
        ]);
        $wp_customize->add_control('contact-us-control-text', [
            'section' => 'contact-us',
            'settings' => 'contact-us-text',
            'label' => 'Change The text',
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('contact-us-control-office', [
            'section' => 'contact-us',
            'settings' => 'contact-us-office',
            'label' => 'Nom de bureau',
            'type' => 'text'
        ]);
        $wp_customize->add_control('contact-us-control-adress', [
            'section' => 'contact-us',
            'settings' => 'contact-us-adress',
            'label' => 'Ajouter votre adresse',
            'type' => 'text'
        ]);
        $wp_customize->add_control('contact-us-control-city', [
            'section' => 'contact-us',
            'settings' => 'contact-us-city',
            'label' => 'Ajouter un code postal et ville',
            'type' => 'text'
        ]);
        $wp_customize->add_control('contact-us-control-phone', [
            'section' => 'contact-us',
            'settings' => 'contact-us-phone',
            'label' => 'Add a phone number',
            'type' => 'phone'
        ]);
        $wp_customize->add_control('contact-us-control-mail', [
            'section' => 'contact-us',
            'settings' => 'contact-us-mail',
            'label' => 'Add email adress',
            'type' => 'email'
        ]);
        /// pour la section de map
        $wp_customize->add_section('map', [
            'panel' => 'contact-panel',
            'title' => 'Modifier la Map'
        ]);
        //settings
        $wp_customize->add_setting('map-content', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        $wp_customize->add_control('map-control', [
            'section' => 'map',
            'settings' => 'map-content',
            'label' => 'Add adress',
            // 'type' => 'text'
        ]);
    }
}
add_action('customize_register', [Customiser::class, 'custom_home_sections']);
add_action('customize_register', [Customiser::class, 'custom_contact_page']);
