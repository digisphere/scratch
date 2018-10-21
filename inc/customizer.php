<?php
function scratch_customizer_settings($wp_customize) {
	/**
	 * Sections
	 */
	$sections = array(
		array(
			'section_id'    => 'general',
			'args'          => array( 'title' => __('General Settings', THEMEID), 'priority' => 40, )
		),
		array(
			'section_id'    => 'site_info',
			'args'          => array( 'title' => __('Site Info', THEMEID), 'priority' => 41, )
		),
		array(
			'section_id'    => 'design',
			'args'          => array( 'title' => __('Design', THEMEID), 'priority' => 50, )
		),
		array(
			'section_id'    => 'header',
			'args'          => array( 'title' => __('Header', THEMEID), 'priority' => 60, )
		),
		array(
			'section_id'    => 'footer',
			'args'          => array( 'title' => __('Footer', THEMEID), 'priority'=> 70, )
		),
		array(
			'section_id'    => 'social',
			'args'          => array( 'title' => __('Side Social', THEMEID), 'priority' => 105, )
		),
		array(
			'section_id'    => 'google',
			'args'          => array( 'title' => __('Google', THEMEID), 'priority' => 100, )
		),
	);

	if( !empty($sections) ){
		foreach ($sections as $section) {
			$wp_customize->add_section( $section['section_id'] , $section['args']);
		}
	}

	$controls = array(
		'logo' => array(
			'settings' => array(
				'default'        => '',
				'capability'     => 'edit_theme_options',
				'type'           => 'option',
			),
			'control' => array(
				'label'      => __('Header Logo', 'scratch'),
				'section'    => 'header',
				'settings'   => 'logo',
			),
			'image' => true,
		),
		'phone' => array(
			'settings' => array(
				'capability'     => 'edit_theme_options',
				'type'           => 'option',
			),
			'control' => array(
				'label'      => __('Phone', 'scratch'),
				'section'    => 'general',
				'settings'   => 'phone',
			),
		),
		'analytics' => array(
			'settings' => array(
				'capability'     => 'edit_theme_options',
				'type'           => 'option',
			),
			'control' => array(
				'label'      => __('Google Analytics Code', 'scratch'),
				'section'    => 'google',
				'settings'   => 'analytics',
				'type'   => 'code_editor',
			),
		),
	);

	if( !empty($controls) ) {
		foreach ($controls as $key => $control) {
			$wp_customize->add_setting($key,  $control['settings']);

			if(isset($control['image']) && $control['image'] == true) {
				$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $key, $control['control']) );
			}
			else {
				$wp_customize->add_control($key, $control['control']);
			}
		}
	}

	/**

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


	$wp_customize->add_setting('email', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_setting('sc_shortcode', array(
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
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
	 */

}
add_action('customize_register', 'scratch_customizer_settings');