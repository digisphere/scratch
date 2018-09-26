<?php
function scratch_customizer_settings($wp_customize) {
	/**
	 * Sections
	 */
	$wp_customize->add_section( 'general' , array(
		'title'      => "General",
		'priority'   => 40,
	) );
	$wp_customize->add_section( 'design' , array(
		'title'      => "Design",
		'priority'   => 50,
	) );
	$wp_customize->add_section( 'header' , array(
		'title'      => "Header",
		'priority'   => 70,
	) );
	$wp_customize->add_section( 'footer' , array(
		'title'      => "Footer",
		'priority'   => 90,
	) );
	$wp_customize->add_section( 'side_contact' , array(
		'title'      => "Side Contact",
		'priority'   => 95,
	) );
	$wp_customize->add_section( 'social' , array(
		'title'      => "Social",
		'priority'   => 100,
	) );
	$wp_customize->add_section( 'google' , array(
		'title'      => "Google",
		'priority'   => 120,
	) );

	/**
	 * Settings
	 */
	$wp_customize->add_setting('logo',  array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_setting('analytics', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_setting('copyrights', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_setting('sc_heading', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_setting('sc_content', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
	));

	$wp_customize->add_setting('phone', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_setting('email', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_setting('sc_shortcode', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
	));

	/**
	 * Controls
	 */
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo',
			array(
				'label' => 'Header Logo',
				'section' => 'header',
				'settings' => 'logo',
			) )
	);
	$wp_customize->add_control('phone', array(
		'label'      => "Phone",
		'section'    => 'general',
		'settings'   => 'phone',
	));
	$wp_customize->add_control('email', array(
		'label'      => "Email",
		'section'    => 'general',
		'settings'   => 'email',
	));
	$wp_customize->add_control('copyrights', array(
		'label'      => "Copyrights",
		'section'    => 'footer',
		'settings'   => 'copyrights',
	));
	$wp_customize->add_control('sc_heading', array(
		'label'      => "Heading",
		'section'    => 'side_contact',
		'settings'   => 'sc_heading',
	));
	$wp_customize->add_control('sc_content', array(
		'label'      => "Content",
		'section'    => 'side_contact',
		'settings'   => 'sc_content',
		'type'       => 'textarea'
	));
	$wp_customize->add_control('sc_shortcode', array(
		'label'      => "Shortcode",
		'section'    => 'side_contact',
		'settings'   => 'sc_shortcode',
	));
	$wp_customize->add_control('analytics', array(
		'label'      => "Add Google Analytics Code without the script tags",
		'section'    => 'google',
		'settings'   => 'analytics',
		'type'       => 'code_editor',
	));


}
add_action('customize_register', 'triad_customizer_settings');