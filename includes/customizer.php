<?php
class Customiser
{

    public static function customize_carousel($wp_customize)
    {
        // $wp_customize->add_panel('carousel', [
        //     'title' => 'modifier-carousel',
        //     'discription' => 'modifier votre carousel'
        // ]);
        //section
        $wp_customize->add_section('banner-carousel', [
            'title' => 'modifier votre carousel',
            'discription' => 'modifier votre carousel'
        ]);
        // settings1
        $wp_customize->add_setting('image1', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        //settings2
        $wp_customize->add_setting('image2', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);
        //control1
        $wp_customize->add_control('image-1', new WP_Customize_Image_Control(
            $wp_customize,
            'image1', // setting-id
            [
                'label' => 'image carousel 1',
                'section' => 'banner-carousel',
            ]
        ));
        //control2
        $wp_customize->add_control('image-2', new WP_Customize_Image_Control(
            $wp_customize,
            'image2', // setting-id
            [
                'label' => 'image carousel 2',
                'section' => 'banner-carousel',
            ]
        ));
    }

    // section about:
    public static function about_section($wp_customize)
    {
        //panel
        $wp_customize->add_panel('sections-panel', [
            'title' => 'changings-sections',
            'decription' => 'personaliser la section'
        ]);
        //section
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
    }

    public static function custom_video($wp_customize)
    {

        $wp_customize->add_section('ma-video', [
            'panel' => '',
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
    }

    public static function customize_myCarousel($wp_customize)
    {

        $wp_customize->add_section('mon-carousel', [
            'panel' => '',
            'title' => 'Modifier le Carousel'
        ]);
        $wp_customize->add_setting('first-image', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_setting('second-image', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        // $wp_customize->add_control('first-image-control', WP_Customize_Image_Control(
        //     $wp_customize,
        //     'first-image', // setting-id
        //     [
        //         'label' => 'image carousel 1',
        //         'section' => 'mon-carousel',
        //     ]
        // ));
        $wp_customize->add_control('first-image-control', [
            'section' => 'mon-carousel',
            'settings' => 'first-image',
            'label' => 'to change the first image',
            'description' => 'change the image',
            // 'type' => 'file',
            // 'accept' => 'image/*'

        ]);
        $wp_customize->add_control('second-image-control', [
            'section' => 'mon-carousel',
            'settings' => 'second-image',
            'label' => 'to change the second image',
            'description' => 'change the image',
            // 'type' => 'file',    
        ]);
    }

    public static function promotion_section($wp_customize)
    {
        //panel
        // $wp_customize->add_panel('section-promotion-panel', [
        //     'title' => 'promotion Section',
        //     'decription' => 'personaliser la section'
        // ]);
        //section
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
    }
}
add_action('customize_register', [Customiser::class, 'about_section']);
add_action('customize_register', [Customiser::class, 'custom_video']);
add_action('customize_register', [Customiser::class, 'customize_myCarousel']);
add_action('customize_register', [Customiser::class, 'promotion_section']);
