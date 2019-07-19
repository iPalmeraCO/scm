<?php
/**
 * Twenty Seventeen: Customizer
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function twentyseventeen_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.site-title a',
			'render_callback' => 'twentyseventeen_customize_partial_blogname',
		)
	);
	$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.site-description',
			'render_callback' => 'twentyseventeen_customize_partial_blogdescription',
		)
	);

	/**
	 * Custom colors.
	 */
	$wp_customize->add_setting(
		'colorscheme',
		array(
			'default'           => 'light',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'twentyseventeen_sanitize_colorscheme',
		)
	);

	$wp_customize->add_setting(
		'colorscheme_hue',
		array(
			'default'           => 250,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'absint', // The hue is stored as a positive integer.
		)
	);

	$wp_customize->add_control(
		'colorscheme',
		array(
			'type'     => 'radio',
			'label'    => __( 'Color Scheme', 'twentyseventeen' ),
			'choices'  => array(
				'light'  => __( 'Light', 'twentyseventeen' ),
				'dark'   => __( 'Dark', 'twentyseventeen' ),
				'custom' => __( 'Custom', 'twentyseventeen' ),
			),
			'section'  => 'colors',
			'priority' => 5,
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorscheme_hue',
			array(
				'mode'     => 'hue',
				'section'  => 'colors',
				'priority' => 6,
			)
		)
	);

	/**
	 * Theme options.
	 */
	$wp_customize->add_section(
		'theme_options',
		array(
			'title'    => __( 'Theme Options', 'twentyseventeen' ),
			'priority' => 130, // Before Additional CSS.
		)
	);

	$wp_customize->add_setting(
		'page_layout',
		array(
			'default'           => 'two-column',
			'sanitize_callback' => 'twentyseventeen_sanitize_page_layout',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'page_layout',
		array(
			'label'           => __( 'Page Layout', 'twentyseventeen' ),
			'section'         => 'theme_options',
			'type'            => 'radio',
			'description'     => __( 'When the two-column layout is assigned, the page title is in one column and content is in the other.', 'twentyseventeen' ),
			'choices'         => array(
				'one-column' => __( 'One Column', 'twentyseventeen' ),
				'two-column' => __( 'Two Column', 'twentyseventeen' ),
			),
			'active_callback' => 'twentyseventeen_is_view_with_layout_option',
		)
	);

	/* FOOTER */

	$wp_customize->add_section( 'footer', array(
		'title'    => __( 'footer', 'twentyseventeen' ),
		'priority' => 130, // Before Additional CSS.
	));

	//dirección español
	$wp_customize->add_setting( 'direccion_español', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'direccion_español', array(
        'label'       => __( 'Direccion Español', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'input'
	));
	//dirección ingles
	$wp_customize->add_setting( 'direccion_ingles', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'direccion_ingles', array(
        'label'       => __( 'Direccion Inglés', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'input'
	));
	//teléfono
	$wp_customize->add_setting( 'telefono_footer', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'telefono_footer', array(
        'label'       => __( 'Teléfono', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'input'
	));
	//correo
	$wp_customize->add_setting( 'correo_footer', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'correo_footer', array(
        'label'       => __( 'Correo', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'input'
	));
	//link facebook
	$wp_customize->add_setting( 'link_facebook', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'link_facebook', array(
        'label'       => __( 'link Facebook', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'input'
	));
	//link twitter
	$wp_customize->add_setting( 'link_twitter', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'link_twitter', array(
        'label'       => __( 'link Twitter', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'input'
	));
	//link youtube
	$wp_customize->add_setting( 'link_youtube', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'link_youtube', array(
        'label'       => __( 'link Youtube', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'input'
	));
	//link linkedin
	$wp_customize->add_setting( 'link_linkedin', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'link_linkedin', array(
        'label'       => __( 'link Linkedin', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'input'
	));

	//cookies español
	$wp_customize->add_setting( 'cookies_español', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'cookies_español', array(
        'label'       => __( 'Cookies español', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'textarea'
	));
	//cookies ingles
	$wp_customize->add_setting( 'cookies_ingles', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'cookies_ingles', array(
        'label'       => __( 'Cookies ingles', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'textarea'
	));

	//disclaimer español
	$wp_customize->add_setting( 'disclaimer_español', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'disclaimer_español', array(
        'label'       => __( 'disclaimer español', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'textarea'
	));
	//disclaimer ingles
	$wp_customize->add_setting( 'disclaimer_ingles', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'disclaimer_ingles', array(
        'label'       => __( 'disclaimer ingles', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'textarea'
	));

	//politicas español
	$wp_customize->add_setting( 'politicas_español', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'politicas_español', array(
        'label'       => __( 'politicas español', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'textarea'
	));
	//politicas ingles
	$wp_customize->add_setting( 'politicas_ingles', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'politicas_ingles', array(
        'label'       => __( 'politicas ingles', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'textarea'
	));

	//tyc español
	$wp_customize->add_setting( 'tyc_español', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'tyc_español', array(
        'label'       => __( 'tyc español', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'textarea'
	));
	//tyc ingles
	$wp_customize->add_setting( 'tyc_ingles', array(
        'default'           => '',
        'transport'         => 'refresh',
    ) );

	$wp_customize->add_control( 'tyc_ingles', array(
        'label'       => __( 'tyc ingles', 'twentyseventeen' ),
        'section'     => 'footer',
        'type'        => 'textarea'
	));

	/**
	 * Filter number of front page sections in Twenty Seventeen.
	 *
	 * @since Twenty Seventeen 1.0
	 *
	 * @param int $num_sections Number of front page sections.
	 */
	$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting(
			'panel_' . $i,
			array(
				'default'           => false,
				'sanitize_callback' => 'absint',
				'transport'         => 'postMessage',
			)
		);

		$wp_customize->add_control(
			'panel_' . $i,
			array(
				/* translators: %d is the front page section number */
				'label'           => sprintf( __( 'Front Page Section %d Content', 'twentyseventeen' ), $i ),
				'description'     => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'twentyseventeen' ) ),
				'section'         => 'theme_options',
				'type'            => 'dropdown-pages',
				'allow_addition'  => true,
				'active_callback' => 'twentyseventeen_is_static_front_page',
			)
		);

		$wp_customize->selective_refresh->add_partial(
			'panel_' . $i,
			array(
				'selector'            => '#panel' . $i,
				'render_callback'     => 'twentyseventeen_front_page_section',
				'container_inclusive' => true,
			)
		);
	}
}
add_action( 'customize_register', 'twentyseventeen_customize_register' );

/**
 * Sanitize the page layout options.
 *
 * @param string $input Page layout.
 */
function twentyseventeen_sanitize_page_layout( $input ) {
	$valid = array(
		'one-column' => __( 'One Column', 'twentyseventeen' ),
		'two-column' => __( 'Two Column', 'twentyseventeen' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Sanitize the colorscheme.
 *
 * @param string $input Color scheme.
 */
function twentyseventeen_sanitize_colorscheme( $input ) {
	$valid = array( 'light', 'dark', 'custom' );

	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'light';
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Twenty Seventeen 1.0
 * @see twentyseventeen_customize_register()
 *
 * @return void
 */
function twentyseventeen_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Twenty Seventeen 1.0
 * @see twentyseventeen_customize_register()
 *
 * @return void
 */
function twentyseventeen_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're previewing the front page and it's a static page.
 */
function twentyseventeen_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function twentyseventeen_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function twentyseventeen_customize_preview_js() {
	wp_enqueue_script( 'twentyseventeen-customize-preview', get_theme_file_uri( '/assets/js/customize-preview.js' ), array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'twentyseventeen_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function twentyseventeen_panels_js() {
	wp_enqueue_script( 'twentyseventeen-customize-controls', get_theme_file_uri( '/assets/js/customize-controls.js' ), array(), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'twentyseventeen_panels_js' );
