<?php
add_action( 'customize_register', 'customize_register' );
function customize_register( $wp_customize ) {
    // All the Customize Options you create goes here

    // Move Homepage Settings section underneath the "Site Identity" section
    $wp_customize->get_section('title_tagline')->priority = 1;
    $wp_customize->get_section('static_front_page')->priority = 2;
    $wp_customize->get_section('static_front_page')->title = __( 'Customize Homepage', 'customize_register' );

    // Theme Options Panel
$wp_customize->add_panel( 'theme_options', 
array(
    //'priority'       => 100,
    'title'            => __( 'Theme Options', 'theme_options' ),
    'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'theme_options' ),
) 
);
// Text Options Section Inside Theme
$wp_customize->add_section( 'text_options', 
    array(
        'title'         => __( 'Footer Text Options', 'text_options' ),
        'priority'      => 10,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'copyright_text',
    array(
        'default'           => __( '© Copyright 2021 HOA Management ', 'copyright_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'copyright_text', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'text_options',
        'label'       => 'Copyright text',
        'description' => 'Text put here will be shown in the footer',
    ) 
);

$wp_customize->add_setting( 'footer_image_logo',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/image 10.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_image_logo', 
    array(
        'priority'    => 40,
        'section'     => 'text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown as logo footer',
    ) 
));


//banner
// Text Options Section Inside Theme
$wp_customize->add_section( 'banner_text_options', 
    array(
        'title'         => __( 'Banner Text Options', 'banner_text_options' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'banner_heading',
    array(
        'default'           => __( 'Live a Golden Life', 'banner_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'banner_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in banner sections heading',
    ) 
);

$wp_customize->add_setting( 'banner_text',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero.', 'banner_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_text', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'banner_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in banner sections description',
    ) 
);
//button
$wp_customize->add_setting( 'banner_button_text',
    array(
        'default'           => __( 'HOMEOWNERS SUPPORT', 'banner_button_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_button_text', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'banner_text_options',
        'label'       => 'Button text',
        'description' => 'Text put here will be shown in banner sections button',
    ) 
);

//button link
$wp_customize->add_setting( 'banner_button_url',
    array(
        'default'           => __( '#', 'banner_button_url' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_button_url', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'banner_text_options',
        'label'       => 'Button Link',
        'description' => 'Link put here will be the redirection link of your button when clicked',
    ) 
);

$wp_customize->add_setting( 'banner_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Rectangle 40.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner_image', 
    array(
        'priority'    => 40,
        'section'     => 'banner_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));



//second section
// Text Options Section Inside Theme
$wp_customize->add_section( 'second_section_text_options', 
    array(
        'title'         => __( 'Second Section Text Options', 'second_section_text_options' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'second_section_heading',
    array(
        'default'           => __( 'With Great Community', 'second_section_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in second sections heading',
    ) 
);

$wp_customize->add_setting( 'second_section_paragraph',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl iaculis id enim nibh semper. Proin morbi donec diam suscipit tincidunt arcu id. Iaculis cursus eros, elit gravida mauris sit nunc. Velit erat phasellus habitant adipiscing nullam consectetur quisque est facilisi. Massa elementum id metus, mattis facilisis. Tincidunt est cursus proin mattis dui donec arcu. Nec dolor elementum ut eu sit turpis proin non, sed.', 'second_section_paragraph' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_paragraph', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in second sections description',
    ) 
);

//third section
// Text Options Section Inside Theme
$wp_customize->add_section( 'third_section_text_options', 
    array(
        'title'         => __( 'Third Section Text Options', 'second_section_text_options' ),
        'priority'      => 3,
        'panel'         => 'theme_options'
    ) 
);

$wp_customize->add_setting( 'third_section_sales',
    array(
        'default'           => __( 'Backyard Sale 12-15-2021 <br> Easter Egg Hunt 04-23-2021 <br> Coffee Hours 02-08-2021 <br> Backyard Together 11-16-2021 <br> Pet Celebration 07-10-2021', 'third_section_sales' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'third_section_sales', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'third_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in second sections description',
    ) 
);

$wp_customize->add_setting( 'third_section_heading',
    array(
        'default'           => __( 'Latest Events', 'third_section_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'third_section_heading', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'third_section_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in second sections description',
    ) 
);

$wp_customize->add_setting( 'third_section_description',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse.', 'third_section_description' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'third_section_description', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'third_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in third sections description',
    ) 
);

//fourth section
// Text Options Section Inside Theme
$wp_customize->add_section( 'fourth_section_text_options', 
    array(
        'title'         => __( 'Fourth Section Text Options', 'fourth_section_text_options' ),
        'priority'      => 4,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'fourth_section_heading',
    array(
        'default'           => __( 'Best Place', 'fourth_section_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'fourth_section_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'fourth_section_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in fourth sections heading',
    ) 
);

$wp_customize->add_setting( 'fourth_section_paragraph',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est.', 'fourth_section_paragraph' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'fourth_section_paragraph', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'fourth_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in fourth sections description',
    ) 
);

$wp_customize->add_setting( 'fourth_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Rectangle 43.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'fourth_image', 
    array(
        'priority'    => 40,
        'section'     => 'fourth_section_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown as logo footer',
    ) 
));

}
?>