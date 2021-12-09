<?php
/**
 * Enactus Fleming - Keys To Me Theme Customizer
 *
 * @package Enactus_Fleming_-_Keys_To_Me
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ktm_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'ktm_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'ktm_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'ktm_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ktm_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ktm_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ktm_customize_preview_js() {
	wp_enqueue_script( 'ktm-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'ktm_customize_preview_js' );




/**
 * Social Media Customizer
 */
add_action( "customize_register", "ktm_social_media_customizer" );

function ktm_social_media_customizer( $wp_customize ) {

	// Declare Sidebar option
	$wp_customize->add_section('ktm_social_media', array(
        'title'    => __('Social Media', 'cumber'),
        'priority' => 120,
    ));
	
	$fields	=	array(
		"ktm_meta_facebook"		=>	"https://facebook.com",
		"ktm_meta_twitter"		=>	"https://twitter.com",
		"ktm_meta_lkdin"		=>	"https://linkedin.com",
		"ktm_meta_instagram"	=>	"https://instagram.com",
		//"ktm_meta_youtube"		=>	"https://youtube.com"
	);

	$labels	=	array(
		"ktm_meta_facebook"		=>	"Facebook",
		"ktm_meta_twitter"		=>	"Twitter",
		"ktm_meta_lkdin"		=>	"LinkedIn",
		"ktm_meta_instagram"	=>	"Instagram",
		//"ktm_meta_youtube"		=>	"Youtube"
	);

	foreach ( $fields as $key => $field ) {
		$wp_customize->add_setting("ktm_social_media_op[{$key}]", array(
			'default'        => $field,
			'capability'     => 'edit_theme_options',
			'type'           => 'option',
		));
		
		$wp_customize->add_control('ktm_'.$key, array(
			'label'      => __($labels[$key], 'cumber'),
			'section'    => 'ktm_social_media',
			'settings'   => "ktm_social_media_op[{$key}]",
		));
	}
}



/* Featured Post */

add_action( "customize_register", "ktm_featured_posts_option" );

function ktm_featured_posts_option( $wp_customize ) {
	// Declare Sidebar option
	$wp_customize->add_section('ktm_post_select', array(
		'title'    => __('Featured Post', 'ktm'),
		'priority' => 120,
	));

	$wp_customize->add_setting("ktm_post_select_option", array(
		'default'        => $field,
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
	));
		
	$wp_customize->add_control( 'ktm_post_select_option', array(
		'type' 		=> 'select',
		'section' 	=> 'ktm_post_select', // Add a default or your own section
		'label' 	=> __( 'Select Post to be featured' ),
		'choices' 	=> get_all_posts_options(),
	) );

}

function ktm_get_media_link( $media ='facebook' ) {
	$social_media = maybe_unserialize( get_option('ktm_social_media_op') );
	return $social_media['ktm_meta_'.$media];
}