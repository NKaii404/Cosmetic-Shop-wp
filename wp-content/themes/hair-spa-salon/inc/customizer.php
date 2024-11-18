<?php
/**
 * Hair Spa Salon: Customizer
 *
 * @package Hair Spa Salon
 * @subpackage hair_spa_salon
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function hair_spa_salon_customize_register( $wp_customize ) {

	require get_parent_theme_file_path('/inc/controls/icon-changer.php');

	require get_parent_theme_file_path('/inc/controls/range-slider-control.php');

	// Register the custom control type.
	$wp_customize->register_control_type( 'Hair_Spa_Salon_Toggle_Control' );

	//Register the sortable control type.
	$wp_customize->register_control_type( 'Hair_Spa_Salon_Control_Sortable' );	

	//add home page setting pannel
	$wp_customize->add_panel( 'hair_spa_salon_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Custom Home page', 'hair-spa-salon' ),
	    'description' => __( 'Description of what this panel does.', 'hair-spa-salon' ),
	) );

	//TP General Option
	$wp_customize->add_section('hair_spa_salon_tp_general_settings',array(
        'title' => __('TP General Option', 'hair-spa-salon'),
        'panel' => 'hair_spa_salon_panel_id',
        'priority' => 1,
    ) );

    $wp_customize->add_setting('hair_spa_salon_tp_body_layout_settings',array(
        'default' => 'Full',
        'sanitize_callback' => 'hair_spa_salon_sanitize_choices'
	));
    $wp_customize->add_control('hair_spa_salon_tp_body_layout_settings',array(
        'type' => 'radio',
        'label'     => __('Body Layout Setting', 'hair-spa-salon'),
        'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'hair-spa-salon'),
        'section' => 'hair_spa_salon_tp_general_settings',
        'choices' => array(
            'Full' => __('Full','hair-spa-salon'),
            'Container' => __('Container','hair-spa-salon'),
            'Container Fluid' => __('Container Fluid','hair-spa-salon')
        ),
	) );

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('hair_spa_salon_sidebar_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'hair_spa_salon_sanitize_choices'
	));
	$wp_customize->add_control('hair_spa_salon_sidebar_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Sidebar Position', 'hair-spa-salon'),
        'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'hair-spa-salon'),
        'section' => 'hair_spa_salon_tp_general_settings',
        'choices' => array(
            'full' => __('Full','hair-spa-salon'),
            'left' => __('Left','hair-spa-salon'),
            'right' => __('Right','hair-spa-salon'),
            'three-column' => __('Three Columns','hair-spa-salon'),
            'four-column' => __('Four Columns','hair-spa-salon'),
            'grid' => __('Grid Layout','hair-spa-salon')
        ),
	) );
	// Add Settings and Controls for Post sidebar Layout
	$wp_customize->add_setting('hair_spa_salon_sidebar_single_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'hair_spa_salon_sanitize_choices'
	));
	$wp_customize->add_control('hair_spa_salon_sidebar_single_post_layout',array(
        'type' => 'radio',
        'label'     => __('Single Post Sidebar Position', 'hair-spa-salon'),
        'description'   => __('This option work for single blog page', 'hair-spa-salon'),
        'section' => 'hair_spa_salon_tp_general_settings',
        'choices' => array(
            'full' => __('Full','hair-spa-salon'),
            'left' => __('Left','hair-spa-salon'),
            'right' => __('Right','hair-spa-salon'),
        ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('hair_spa_salon_sidebar_page_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'hair_spa_salon_sanitize_choices'
	));
	$wp_customize->add_control('hair_spa_salon_sidebar_page_layout',array(
        'type' => 'radio',
        'label'     => __('Page Sidebar Position', 'hair-spa-salon'),
        'description'   => __('This option work for pages.', 'hair-spa-salon'),
        'section' => 'hair_spa_salon_tp_general_settings',
        'choices' => array(
            'full' => __('Full','hair-spa-salon'),
            'left' => __('Left','hair-spa-salon'),
            'right' => __('Right','hair-spa-salon')
        ),
	) );
	
	//tp typography option
	$hair_spa_salon_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	$wp_customize->add_section('hair_spa_salon_typography_option',array(
		'title'         => __('TP Typography Option', 'hair-spa-salon'),
		'priority' => 1,
		'panel' => 'hair_spa_salon_panel_id'
   	));

   	$wp_customize->add_setting('hair_spa_salon_heading_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'hair_spa_salon_sanitize_choices',
	));
	$wp_customize->add_control(	'hair_spa_salon_heading_font_family', array(
		'section' => 'hair_spa_salon_typography_option',
		'label'   => __('heading Fonts', 'hair-spa-salon'),
		'type'    => 'select',
		'choices' => $hair_spa_salon_font_array,
	));

	$wp_customize->add_setting('hair_spa_salon_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'hair_spa_salon_sanitize_choices',
	));
	$wp_customize->add_control(	'hair_spa_salon_body_font_family', array(
		'section' => 'hair_spa_salon_typography_option',
		'label'   => __('Body Fonts', 'hair-spa-salon'),
		'type'    => 'select',
		'choices' => $hair_spa_salon_font_array,
	));

	$wp_customize->add_section('hair_spa_salon_mobile_media_option',array(
		'title'         => __('Mobile Responsive media', 'hair-spa-salon'),
		'description' => __('Control will no function if the toggle in the main settings is off.', 'hair-spa-salon'),
		'priority' => 10,
		'panel' => 'hair_spa_salon_panel_id'
	) );

	$wp_customize->add_setting( 'hair_spa_salon_return_to_header_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_return_to_header_mob', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'hair-spa-salon' ),
		'section'     => 'hair_spa_salon_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_return_to_header_mob',
	) ) );

	$wp_customize->add_setting( 'hair_spa_salon_slider_button_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_slider_button_mob', array(
		'label'       => esc_html__( 'Show / Hide Slider Button', 'hair-spa-salon' ),
		'section'     => 'hair_spa_salon_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_slider_button_mob',
	) ) );
	$wp_customize->add_setting( 'hair_spa_salon_related_post_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_related_post_mob', array(
		'label'       => esc_html__( 'Show / Hide Related Post', 'hair-spa-salon' ),
		'section'     => 'hair_spa_salon_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_related_post_mob',
	) ) );


 	//menu typography
  	$wp_customize->add_section( 'hair_spa_salon_menu_typography', array(
    	'title'      => __( 'Menu Typography', 'hair-spa-salon' ),
    	'priority' => 5,
		'panel' => 'hair_spa_salon_panel_id'
	) );

	$wp_customize->add_setting('hair_spa_salon_menu_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'hair_spa_salon_sanitize_choices',
	));
	$wp_customize->add_control(	'hair_spa_salon_menu_font_family', array(
		'section' => 'hair_spa_salon_menu_typography',
		'label'   => __('Menu Fonts', 'hair-spa-salon'),
		'type'    => 'select',
		'choices' => $hair_spa_salon_font_array,
	));

	$wp_customize->add_setting('hair_spa_salon_menu_text_tranform',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'hair_spa_salon_sanitize_choices'
 	));
 	$wp_customize->add_control('hair_spa_salon_menu_text_tranform',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','hair-spa-salon'),
		'section' => 'hair_spa_salon_menu_typography',
		'choices' => array(
		   'Uppercase' => __('Uppercase','hair-spa-salon'),
		   'Lowercase' => __('Lowercase','hair-spa-salon'),
		   'Capitalize' => __('Capitalize','hair-spa-salon'),
		),
	) );


	$wp_customize->add_setting('hair_spa_salon_menu_font_size', array(
	'default' => 15,
    'sanitize_callback' => 'hair_spa_salon_sanitize_number_range',
	));

	$wp_customize->add_control(new Hair_Spa_Salon_Range_Slider($wp_customize, 'hair_spa_salon_menu_font_size', array(
    'section' => 'hair_spa_salon_menu_typography',
    'label' => esc_html__('Font Size', 'hair-spa-salon'),
    'input_attrs' => array(
        'min' => 0,
        'max' => 15,
        'step' => 1
    )
	)));

  	//TP Preloader Option
	$wp_customize->add_section('hair_spa_salon_prealoader_option',array(
		'title' => __('TP Preloader Option', 'hair-spa-salon'),
		'panel' => 'hair_spa_salon_panel_id',
		'priority' => 3,
 	) );

	$wp_customize->add_setting( 'hair_spa_salon_preloader_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_preloader_show_hide', array(
		'label'       => esc_html__( 'Show / Hide Preloader Option', 'hair-spa-salon' ),
		'section'     => 'hair_spa_salon_prealoader_option',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_preloader_show_hide',
		) ) );

  	$wp_customize->add_setting( 'hair_spa_salon_tp_preloader_color1_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hair_spa_salon_tp_preloader_color1_option', array(
	    'description' => __('It will change the complete theme preloader ring 1 color in one click.', 'hair-spa-salon'),
	    'section' => 'hair_spa_salon_prealoader_option',
	    'settings' => 'hair_spa_salon_tp_preloader_color1_option',
  	)));

  	$wp_customize->add_setting( 'hair_spa_salon_tp_preloader_color2_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hair_spa_salon_tp_preloader_color2_option', array(
	    'description' => __('It will change the complete theme preloader ring 2 color in one click.', 'hair-spa-salon'),
	    'section' => 'hair_spa_salon_prealoader_option',
	    'settings' => 'hair_spa_salon_tp_preloader_color2_option',
  	)));

  	$wp_customize->add_setting( 'hair_spa_salon_tp_preloader_bg_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hair_spa_salon_tp_preloader_bg_color_option', array(
	    'description' => __('It will change the complete theme preloader bg color in one click.', 'hair-spa-salon'),
	    'section' => 'hair_spa_salon_prealoader_option',
	    'settings' => 'hair_spa_salon_tp_preloader_bg_color_option',
  	)));

  	//TP Color Option
	$wp_customize->add_section('hair_spa_salon_color_option',array(
     'title'         => __('TP Color Option', 'hair-spa-salon'),
     'panel' => 'hair_spa_salon_panel_id',
     'priority' => 1,
    ) );
	$wp_customize->add_setting( 'hair_spa_salon_tp_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hair_spa_salon_tp_color_option', array(
			'label'     => __('Theme first Color', 'hair-spa-salon'),
	    'description' => __('It will change the complete theme color in one click.', 'hair-spa-salon'),
	    'section' => 'hair_spa_salon_color_option',
	    'settings' => 'hair_spa_salon_tp_color_option',
  	)));
  	$wp_customize->add_setting( 'hair_spa_salon_tp_color_option_link', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hair_spa_salon_tp_color_option_link', array(
			'label'     => __('Theme  Second Color', 'hair-spa-salon'),
	    'description' => __('It will change the complete theme color in one click.', 'hair-spa-salon'),
	    'section' => 'hair_spa_salon_color_option',
	    'settings' => 'hair_spa_salon_tp_color_option_link',
  	)));

	//TP Blog Option
	$wp_customize->add_section('hair_spa_salon_blog_option',array(
        'title' => __('TP Blog Option', 'hair-spa-salon'),
        'panel' => 'hair_spa_salon_panel_id',
        'priority' => 4,
    ) );
    /** Meta Order */
    $wp_customize->add_setting('blog_meta_order', array(
        'default' => array('date', 'author', 'comment', 'category'),
        'sanitize_callback' => 'hair_spa_salon_sanitize_sortable',
    ));
    $wp_customize->add_control(new Hair_Spa_Salon_Control_Sortable($wp_customize, 'blog_meta_order', array(
    	'label' => esc_html__('Meta Order', 'hair-spa-salon'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'hair-spa-salon') ,
        'section' => 'hair_spa_salon_blog_option',
        'choices' => array(
            'date' => __('date', 'hair-spa-salon') ,
            'author' => __('author', 'hair-spa-salon') ,
            'comment' => __('comment', 'hair-spa-salon') ,
            'category' => __('category', 'hair-spa-salon') ,
        ) ,
    )));
    $wp_customize->add_setting( 'hair_spa_salon_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hair_spa_salon_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'hair_spa_salon_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','hair-spa-salon' ),
		'section'     => 'hair_spa_salon_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('hair_spa_salon_post_image_round', array(
	  'default' => '0',
      'sanitize_callback' => 'hair_spa_salon_sanitize_number_range',
	));
	$wp_customize->add_control(new hair_spa_salon_Range_Slider($wp_customize, 'hair_spa_salon_post_image_round', array(
       'section' => 'hair_spa_salon_blog_option',
      'label' => esc_html__('Edit Post Image Border Radius', 'hair-spa-salon'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 180,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('hair_spa_salon_post_image_width', array(
	  'default' => '',
      'sanitize_callback' => 'hair_spa_salon_sanitize_number_range',
	));
	$wp_customize->add_control(new hair_spa_salon_Range_Slider($wp_customize, 'hair_spa_salon_post_image_width', array(
       'section' => 'hair_spa_salon_blog_option',
      'label' => esc_html__('Edit Post Image Width', 'hair-spa-salon'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 367,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('hair_spa_salon_post_image_length', array(
	  'default' => '',
      'sanitize_callback' => 'hair_spa_salon_sanitize_number_range',
	));
	$wp_customize->add_control(new hair_spa_salon_Range_Slider($wp_customize, 'hair_spa_salon_post_image_length', array(
       'section' => 'hair_spa_salon_blog_option',
      'label' => esc_html__('Edit Post Image height', 'hair-spa-salon'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 900,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('hair_spa_salon_read_more_text',array(
		'default'=> __('Read More','hair-spa-salon'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hair_spa_salon_read_more_text',array(
		'label'	=> __('Edit Button Text','hair-spa-salon'),
		'section'=> 'hair_spa_salon_blog_option',
		'type'=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'hair_spa_salon_read_more_text', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'hair_spa_salon_customize_partial_hair_spa_salon_read_more_text',
	) );
	$wp_customize->add_setting( 'hair_spa_salon_remove_read_button', array(
		 'default'           => true,
		 'transport'         => 'refresh',
		 'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_remove_read_button', array(
		 'label'       => esc_html__( 'Show / Hide Read More Button', 'hair-spa-salon' ),
		 'section'     => 'hair_spa_salon_blog_option',
		 'type'        => 'toggle',
		 'settings'    => 'hair_spa_salon_remove_read_button',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'hair_spa_salon_remove_read_button', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'hair_spa_salon_customize_partial_hair_spa_salon_remove_read_button',
	));
	$wp_customize->add_setting( 'hair_spa_salon_remove_tags', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_remove_tags', array(
		'label'       => esc_html__( 'Show / Hide Tags Option', 'hair-spa-salon' ),
		'section'     => 'hair_spa_salon_blog_option',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_remove_tags',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'hair_spa_salon_remove_tags', array(
		'selector' => '.box-content a[rel="tag"]',
		'render_callback' => 'hair_spa_salon_customize_partial_hair_spa_salon_remove_tags',
	));

	$wp_customize->add_setting( 'hair_spa_salon_remove_category', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_remove_category', array(
		'label'       => esc_html__( 'Show / Hide Category Option', 'hair-spa-salon' ),
		'section'     => 'hair_spa_salon_blog_option',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_remove_category',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'hair_spa_salon_remove_category', array(
		'selector' => '.box-content a[rel="category"]',
		'render_callback' => 'hair_spa_salon_customize_partial_hair_spa_salon_remove_category',
	));
	$wp_customize->add_setting( 'hair_spa_salon_remove_comment', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_remove_comment', array(
	 'label'       => esc_html__( 'Show / Hide Comment Form', 'hair-spa-salon' ),
	 'section'     => 'hair_spa_salon_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'hair_spa_salon_remove_comment',
	) ) );

	$wp_customize->add_setting( 'hair_spa_salon_remove_related_post', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_remove_related_post', array(
	 'label'       => esc_html__( 'Show / Hide Related Post', 'hair-spa-salon' ),
	 'section'     => 'hair_spa_salon_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'hair_spa_salon_remove_related_post',
	) ) );
	$wp_customize->add_setting('hair_spa_salon_related_post_heading',array(
		'default'=> __('Related Posts','hair-spa-salon'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hair_spa_salon_related_post_heading',array(
		'label'	=> __('Edit Section Title','hair-spa-salon'),
		'section'=> 'hair_spa_salon_blog_option',
		'type'=> 'text'
	));
	$wp_customize->add_setting( 'hair_spa_salon_related_post_per_page', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hair_spa_salon_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'hair_spa_salon_related_post_per_page', array(
		'label'       => esc_html__( 'Related Post Per Page','hair-spa-salon' ),
		'section'     => 'hair_spa_salon_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 3,
			'max'              => 9,
		),
	) );
	$wp_customize->add_setting( 'hair_spa_salon_related_post_per_columns', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'hair_spa_salon_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'hair_spa_salon_related_post_per_columns', array(
		'label'       => esc_html__( 'Related Post Per Row','hair-spa-salon' ),
		'section'     => 'hair_spa_salon_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	) );
	$wp_customize->add_setting('hair_spa_salon_post_layout',array(
        'default' => 'image-content',
        'sanitize_callback' => 'hair_spa_salon_sanitize_choices'
	));
	$wp_customize->add_control('hair_spa_salon_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Layout', 'hair-spa-salon'),
        'section' => 'hair_spa_salon_blog_option',
        'choices' => array(
            'image-content' => __('Media-Content','hair-spa-salon'),
            'content-image' => __('Content-Media','hair-spa-salon'),
        ),
	) );

	// Top bar Section
	$wp_customize->add_section( 'hair_spa_salon_topbar', array(
    	'title'      => __( 'Contact Details', 'hair-spa-salon' ),
    	'description' => __( 'Add your contact details', 'hair-spa-salon' ),
		'panel' => 'hair_spa_salon_panel_id',
      'priority' => 5,
	) );

	$wp_customize->add_setting( 'hair_spa_salon_cart_icon', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_cart_icon', array(
		'label'       => esc_html__( 'Show / Hide Cart Option', 'hair-spa-salon' ),
		'section'     => 'hair_spa_salon_topbar',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_cart_icon',
	) ) );

	$wp_customize->add_setting('hair_spa_salon_mail_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hair_spa_salon_mail_text',array(
		'label'	=> __('Add Mail Text','hair-spa-salon'),
		'section'=> 'hair_spa_salon_topbar',
		'type'=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'hair_spa_salon_mail_text', array(
		'selector' => '.email',
		'render_callback' => 'hair_spa_salon_customize_partial_hair_spa_salon_mail_text',
	) );
	$wp_customize->add_setting('hair_spa_salon_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('hair_spa_salon_mail',array(
		'label'	=> __('Add Mail Address','hair-spa-salon'),
		'section'=> 'hair_spa_salon_topbar',
		'type'=> 'text'
	));
	
	$wp_customize->add_setting('hair_spa_salon_call_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hair_spa_salon_call_text',array(
		'label'	=> __('Add Text','hair-spa-salon'),
		'section'=> 'hair_spa_salon_topbar',
		'type'=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'hair_spa_salon_call_text', array(
		'selector' => '.call',
		'render_callback' => 'hair_spa_salon_customize_partial_hair_spa_salon_call_text',
	) );
	$wp_customize->add_setting('hair_spa_salon_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'hair_spa_salon_sanitize_phone_number'
	));
	$wp_customize->add_control('hair_spa_salon_call',array(
		'label'	=> __('Add Phone Number','hair-spa-salon'),
		'section'=> 'hair_spa_salon_topbar',
		'type'=> 'text'
	));
	$wp_customize->add_setting( 'hair_spa_salon_search_icon', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_search_icon', array(
		'label'       => esc_html__( 'Show / Hide Search Option', 'hair-spa-salon' ),
		'section'     => 'hair_spa_salon_topbar',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_search_icon',
	) ) );
	$wp_customize->selective_refresh->add_partial( 'hair_spa_salon_search_icon', array(
		'selector' => '.search_btn i',
		'render_callback' => 'hair_spa_salon_customize_partial_hair_spa_salon_search_icon',
	) );
	//home page slider
	$wp_customize->add_section( 'hair_spa_salon_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'hair-spa-salon' ),
		'panel' => 'hair_spa_salon_panel_id',
      'priority' => 7,
	) );

	$wp_customize->add_setting( 'hair_spa_salon_slider_arrows', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_slider_arrows', array(
		'label'       => esc_html__( 'Show / Hide slider', 'hair-spa-salon' ),
		'section'     => 'hair_spa_salon_slider_section',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_slider_arrows',
	) ) );

    $wp_customize->selective_refresh->add_partial( 'hair_spa_salon_slider_arrows', array(
		'selector' => '#slider .carousel-caption',
		'render_callback' => 'hair_spa_salon_customize_partial_hair_spa_salon_slider_arrows',
	) );

	$wp_customize->add_setting('hair_spa_salon_slider_short_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hair_spa_salon_slider_short_heading',array(
		'label'	=> __('Add short Heading','hair-spa-salon'),
		'section'=> 'hair_spa_salon_slider_section',
		'type'=> 'text'
	));


	for ( $hair_spa_salon_count = 1; $hair_spa_salon_count <= 4; $hair_spa_salon_count++ ) {

	// Add color scheme setting and control.
	$wp_customize->add_setting( 'hair_spa_salon_slider_page' . $hair_spa_salon_count, array(
		'default'           => '',
		'sanitize_callback' => 'hair_spa_salon_sanitize_dropdown_pages'
	) );

	$wp_customize->add_control( 'hair_spa_salon_slider_page' . $hair_spa_salon_count, array(
		'label'    => __( 'Select Slide Image Page', 'hair-spa-salon' ),
		'section'  => 'hair_spa_salon_slider_section',
		'type'     => 'dropdown-pages'
	) );
	}

	$wp_customize->add_setting( 'hair_spa_salon_slider_button', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_slider_button', array(
		'label'       => esc_html__( 'Show / Hide Slider Button', 'hair-spa-salon' ),
		'section'     => 'hair_spa_salon_slider_section',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_slider_button',
	) ) );

	$wp_customize->add_setting('hair_spa_salon_slider_content_layout',array(
        'default' => 'LEFT-ALIGN',
        'sanitize_callback' => 'hair_spa_salon_sanitize_choices'
	));
	$wp_customize->add_control('hair_spa_salon_slider_content_layout',array(
        'type' => 'radio',
        'label'     => __('Slider Content Layout', 'hair-spa-salon'),
        'section' => 'hair_spa_salon_slider_section',
        'choices' => array(
            'CENTER-ALIGN' => __('CENTER-ALIGN','hair-spa-salon'),
            'LEFT-ALIGN' => __('LEFT-ALIGN','hair-spa-salon'),
            'RIGHT-ALIGN' => __('RIGHT-ALIGN','hair-spa-salon'),
        ),
	) );

	//From Our services
	$wp_customize->add_section('hair_spa_salon_services_section',array(
		'title'	=> __('Services Section','hair-spa-salon'),
		'panel' => 'hair_spa_salon_panel_id',
      'priority' => 8,
	));
	$wp_customize->add_setting( 'hair_spa_salon_services_section_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_services_section_show_hide', array(
		'label'       => esc_html__( 'Show / Hide services Section', 'hair-spa-salon' ),
		'section'     => 'hair_spa_salon_services_section',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_services_section_show_hide',
	) ) );

	$wp_customize->add_setting( 'hair_spa_salon_slider_loop', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_slider_loop', array(
		'label'       => esc_html__( 'Show / Hide services loop', 'hair-spa-salon' ),
		'section'     => 'hair_spa_salon_services_section',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_slider_loop',
	) ) );

	$wp_customize->add_setting('hair_spa_salon_services_short_heading',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hair_spa_salon_services_short_heading',array(
		'label'	=> __('Services Short Title','hair-spa-salon'),
		'section'	=> 'hair_spa_salon_services_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('hair_spa_salon_services_tittle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hair_spa_salon_services_tittle',array(
		'label'	=> __('services Title','hair-spa-salon'),
		'section'	=> 'hair_spa_salon_services_section',
		'type'		=> 'text'
	));

	 $wp_customize->add_setting('hair_spa_salon_category_increament',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('hair_spa_salon_category_increament',array(
        'label' => esc_html__('Service Box Increament','hair-spa-salon'),
        'section'   => 'hair_spa_salon_services_section',
        'type'      => 'number',
        'input_attrs' => array(
            'step'             => 1,
            'min'              => 0,
            'max'              => 6,
        ),
    ));

    $category = get_theme_mod('hair_spa_salon_category_increament');

    for ($i=1; $i <= $category ; $i++) {

    	$wp_customize->add_setting('hair_spa_salon_service_image'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'hair_spa_salon_service_image'.$i,array(
	    'label' => __('Service Image','hair-spa-salon').$i,
	    'section' => 'hair_spa_salon_services_section'
		)));

        $wp_customize->add_setting('hair_spa_salon_category_box_icon'.$i,array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('hair_spa_salon_category_box_icon'.$i,array(
            'label' => esc_html__('Icon ','hair-spa-salon').$i,
            'description' => esc_html__('Ex: fab fa fontawesome free icon version 5','hair-spa-salon'),
            'section'   => 'hair_spa_salon_services_section',
            'type'      => 'text'
        ));

        $wp_customize->add_setting('hair_spa_salon_category_box_title'.$i,array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('hair_spa_salon_category_box_title'.$i,array(
            'label' => esc_html__('Title ','hair-spa-salon').$i,
            'section'   => 'hair_spa_salon_services_section',
            'type'      => 'text'
        ));

        $wp_customize->add_setting('hair_spa_salon_category_box_title_url'.$i,array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('hair_spa_salon_category_box_title_url'.$i,array(
            'label' => esc_html__('Title URL','hair-spa-salon').$i,
            'section'   => 'hair_spa_salon_services_section',
            'type'      => 'url'
        ));
    }

	//footer
	$wp_customize->add_section('hair_spa_salon_footer_section',array(
		'title'	=> __('Footer Text','hair-spa-salon'),
		'description'	=> __('Add copyright text.','hair-spa-salon'),
		'panel' => 'hair_spa_salon_panel_id',
		'priority' => 9,
	));

	$wp_customize->selective_refresh->add_partial( 'hair_spa_salon_footer_text', array(
		'selector' => '#footer p',
		'render_callback' => 'hair_spa_salon_customize_partial_hair_spa_salon_footer_text',
	) );
	// footer columns
	$wp_customize->add_setting('hair_spa_salon_footer_columns',array(
		'default'	=> 4,
		'sanitize_callback'	=> 'hair_spa_salon_sanitize_number_absint'
	));
	$wp_customize->add_control('hair_spa_salon_footer_columns',array(
		'label'	=> __('Footer Widget Columns','hair-spa-salon'),
		'section'	=> 'hair_spa_salon_footer_section',
		'setting'	=> 'hair_spa_salon_footer_columns',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	));

	$wp_customize->add_setting( 'hair_spa_salon_tp_footer_bg_color_option', array(
		'default' => '#583B4C',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hair_spa_salon_tp_footer_bg_color_option', array(
		'label'     => __('Footer Widget Background Color', 'hair-spa-salon'),
		'description' => __('It will change the complete footer widget backgorund color.', 'hair-spa-salon'),
		'section' => 'hair_spa_salon_footer_section',
		'settings' => 'hair_spa_salon_tp_footer_bg_color_option',
	)));

    $wp_customize->add_setting('hair_spa_salon_return_to_header',array(
       'default' => true,
       'sanitize_callback'	=> 'hair_spa_salon_sanitize_checkbox'
    ));
    $wp_customize->add_control('hair_spa_salon_return_to_header',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Return to header','hair-spa-salon'),
       'section' => 'hair_spa_salon_footer_section',
    ));


	$wp_customize->add_setting('hair_spa_salon_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'hair_spa_salon_footer_widget_image',array(
    'label' => __('Footer Widget Background Image','hair-spa-salon'),
    'section' => 'hair_spa_salon_footer_section'
	)));

	$wp_customize->add_setting( 'hair_spa_salon_return_to_header', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_return_to_header', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'hair-spa-salon' ),
		'section'     => 'hair_spa_salon_footer_section',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_return_to_header',
	) ) );


    // Add Settings and Controls for Scroll top
	$wp_customize->add_setting('hair_spa_salon_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'hair_spa_salon_sanitize_choices'
	));
	$wp_customize->add_control('hair_spa_salon_scroll_top_position',array(
        'type' => 'radio',
        'label'     => __('Scroll to top Position', 'hair-spa-salon'),
        'description'   => __('This option work for scroll to top', 'hair-spa-salon'),
        'section' => 'hair_spa_salon_footer_section',
        'choices' => array(
            'Right' => __('Right','hair-spa-salon'),
            'Left' => __('Left','hair-spa-salon'),
            'Center' => __('Center','hair-spa-salon')
        ),
	) );

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'hair_spa_salon_customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'hair_spa_salon_customize_partial_blogdescription',
	) );

		$wp_customize->add_setting( 'hair_spa_salon_site_title_text', array(
			'default'           => true,
			'transport'         => 'refresh',
			'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
		) );
		$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_site_title_text', array(
			'label'       => esc_html__( 'Show / Hide Site Title', 'hair-spa-salon' ),
			'section'     => 'title_tagline',
			'type'        => 'toggle',
			'settings'    => 'hair_spa_salon_site_title_text',
		) ) );

		// logo site title size
		$wp_customize->add_setting('hair_spa_salon_site_title_font_size',array(
			'default'	=> 30,
			'sanitize_callback'	=> 'hair_spa_salon_sanitize_number_absint'
		));
		$wp_customize->add_control('hair_spa_salon_site_title_font_size',array(
			'label'	=> __('Site Title Font Size in PX','hair-spa-salon'),
			'section'	=> 'title_tagline',
			'setting'	=> 'hair_spa_salon_site_title_font_size',
			'type'	=> 'number',
			'input_attrs' => array(
				'step'             => 1,
				'min'              => 0,
				'max'              => 30,
			),
		));

		$wp_customize->add_setting( 'hair_spa_salon_site_tagline_color', array(
		    'default' => '',
		    'sanitize_callback' => 'sanitize_hex_color'
	  	));
	  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hair_spa_salon_site_tagline_color', array(
				'label'     => __('Change Site Title Color', 'hair-spa-salon'),
		    'section' => 'title_tagline',
		    'settings' => 'hair_spa_salon_site_tagline_color',
	  	)));

		$wp_customize->add_setting( 'hair_spa_salon_site_tagline_text', array(
			'default'           => false,
			'transport'         => 'refresh',
			'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
		) );
		$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_site_tagline_text', array(
			'label'       => esc_html__( 'Show / Hide Site Tagline', 'hair-spa-salon' ),
			'section'     => 'title_tagline',
			'type'        => 'toggle',
			'settings'    => 'hair_spa_salon_site_tagline_text',
		) ) );


		// logo site tagline size
	$wp_customize->add_setting('hair_spa_salon_site_tagline_font_size',array(
		'default'	=> 15,
		'sanitize_callback'	=> 'hair_spa_salon_sanitize_number_absint'
	));
	$wp_customize->add_control('hair_spa_salon_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size in PX','hair-spa-salon'),
		'section'	=> 'title_tagline',
		'setting'	=> 'hair_spa_salon_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 30,
		),
	));

	$wp_customize->add_setting( 'hair_spa_salon_logo_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hair_spa_salon_logo_tagline_color', array(
			'label'     => __('Change Site Tagline Color', 'hair-spa-salon'),
	    'section' => 'title_tagline',
	    'settings' => 'hair_spa_salon_logo_tagline_color',
  	)));

    $wp_customize->add_setting('hair_spa_salon_logo_width',array(
		'default' => 150,
		'sanitize_callback'	=> 'hair_spa_salon_sanitize_number_absint'
	));
	 $wp_customize->add_control('hair_spa_salon_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','hair-spa-salon'),
		'section'	=> 'title_tagline',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('hair_spa_salon_logo_settings',array(
        'default' => 'Different Line',
        'sanitize_callback' => 'hair_spa_salon_sanitize_choices'
	));
   $wp_customize->add_control('hair_spa_salon_logo_settings',array(
        'type' => 'radio',
        'label'     => __('Logo Layout Settings', 'hair-spa-salon'),
        'description'   => __('Here you have two options 1. Logo and Site tite in differnt line. 2. Logo and Site title in same line.', 'hair-spa-salon'),
        'section' => 'title_tagline',
        'choices' => array(
            'Different Line' => __('Different Line','hair-spa-salon'),
            'Same Line' => __('Same Line','hair-spa-salon')
        ),
	) );

	$wp_customize->add_setting('hair_spa_salon_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'hair_spa_salon_sanitize_number_absint'
	));
	$wp_customize->add_control('hair_spa_salon_per_columns',array(
		'label'	=> __('Product Per Row','hair-spa-salon'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

	$wp_customize->add_setting('hair_spa_salon_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'hair_spa_salon_sanitize_number_absint'
	));
	$wp_customize->add_control('hair_spa_salon_product_per_page',array(
		'label'	=> __('Product Per Page','hair-spa-salon'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'hair_spa_salon_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Shop page sidebar', 'hair-spa-salon' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_product_sidebar',
	) ) );
	$wp_customize->add_setting('hair_spa_salon_sale_tag_position',array(
        'default' => 'right',
        'sanitize_callback' => 'hair_spa_salon_sanitize_choices'
	));
	$wp_customize->add_control('hair_spa_salon_sale_tag_position',array(
        'type' => 'radio',
        'label'     => __('Sale Badge Position', 'hair-spa-salon'),
        'description'   => __('This option work for Archieve Products', 'hair-spa-salon'),
        'section' => 'woocommerce_product_catalog',
        'choices' => array(
            'left' => __('Left','hair-spa-salon'),
            'right' => __('Right','hair-spa-salon'),
        ),
	) );
	$wp_customize->add_setting( 'hair_spa_salon_single_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_single_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Product page sidebar', 'hair-spa-salon' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_single_product_sidebar',
	) ) );

	$wp_customize->add_setting( 'hair_spa_salon_related_product', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'hair_spa_salon_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Hair_Spa_Salon_Toggle_Control( $wp_customize, 'hair_spa_salon_related_product', array(
		'label'       => esc_html__( 'Show / Hide related product', 'hair-spa-salon' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'hair_spa_salon_related_product',
	) ) );

	//add home page setting pannel
	$wp_customize->add_panel( 'hair_spa_salon_page_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Page Template Settings', 'hair-spa-salon' ),
	    'description' => __( 'Description of what this panel does.', 'hair-spa-salon' ),
	) );

	// 404 PAGE
	$wp_customize->add_section('hair_spa_salon_404_page_section',array(
		'title'         => __('404 Page', 'hair-spa-salon'),
		'description'   => 'Here you can customize 404 Page content.',
		'panel' => 'hair_spa_salon_page_panel_id'
	) );

	$wp_customize->add_setting('hair_spa_salon_edit_404_title',array(
		'default'=> __('Oops! That page cant be found.','hair-spa-salon'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('hair_spa_salon_edit_404_title',array(
		'label'	=> __('Edit Title','hair-spa-salon'),
		'section'=> 'hair_spa_salon_404_page_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('hair_spa_salon_edit_404_text',array(
		'default'=> __('It looks like nothing was found at this location. Maybe try a search?','hair-spa-salon'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hair_spa_salon_edit_404_text',array(
		'label'	=> __('Edit Text','hair-spa-salon'),
		'section'=> 'hair_spa_salon_404_page_section',
		'type'=> 'text'
	));

	// Search Results
	$wp_customize->add_section('hair_spa_salon_no_result_section',array(
		'title'         => __('Search Results', 'hair-spa-salon'),
		'description'   => 'Here you can customize Search Result content.',
		'panel' => 'hair_spa_salon_page_panel_id'
	) );

	$wp_customize->add_setting('hair_spa_salon_edit_no_result_title',array(
		'default'=> __('Nothing Found','hair-spa-salon'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('hair_spa_salon_edit_no_result_title',array(
		'label'	=> __('Edit Title','hair-spa-salon'),
		'section'=> 'hair_spa_salon_no_result_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('hair_spa_salon_edit_no_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','hair-spa-salon'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('hair_spa_salon_edit_no_result_text',array(
		'label'	=> __('Edit Text','hair-spa-salon'),
		'section'=> 'hair_spa_salon_no_result_section',
		'type'=> 'text'
	));

}
add_action( 'customize_register', 'hair_spa_salon_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Hair Spa Salon 1.0
 * @see hair_spa_salon_customize_register()
 *
 * @return void
 */
function hair_spa_salon_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Hair Spa Salon 1.0
 * @see hair_spa_salon_customize_register()
 *
 * @return void
 */
function hair_spa_salon_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'HAIR_SPA_SALON_PRO_THEME_NAME' ) ) {
	define( 'HAIR_SPA_SALON_PRO_THEME_NAME', esc_html__( 'Hair Spa Salon Pro Theme', 'hair-spa-salon' ));
}
if ( ! defined( 'HAIR_SPA_SALON_PRO_THEME_URL' ) ) {
	define( 'HAIR_SPA_SALON_PRO_THEME_URL', esc_url('https://www.themespride.com/products/hair-spa-wordpress-theme'));
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Hair_Spa_Salon_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Hair_Spa_Salon_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Hair_Spa_Salon_Customize_Section_Pro(
				$manager,
				'hair_spa_salon_section_pro',
				array(
					'priority'   => 9,
					'title'    => HAIR_SPA_SALON_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'hair-spa-salon' ),
					'pro_url'  => esc_url( HAIR_SPA_SALON_PRO_THEME_URL, 'hair-spa-salon' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'hair-spa-salon-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'hair-spa-salon-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Hair_Spa_Salon_Customize::get_instance();