<?php
function optionsframework_option_name() {

	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

function optionsframework_options() {

	$container = array(
		'container' => __('Boxed', 'scratch'),
		'container-fluid' => __('Fluid', 'scratch'),
	);
	
	$options = array();

	$options[] = array(
		'name' => __('General', 'scratch'),
		'type' => 'heading'
	);
	$options[] = array(
		'desc' => 'Container',
		'type' => 'radio',
		'id' => 'container',
		'options' => $container,
	);
	
	$options[] = array(
		'name' => 'Utilities',
		'desc' => __('Remove WordPress version meta tag', 'scratch'),
		'type' => 'checkbox',
		'id' => 'wp-version'
	);
	$options[] = array(
		'desc' => __('Remove Scripts & Styles version parameter', 'scratch'),
		'type' => 'checkbox',
		'id' => 'assets-version'
	);
	
	$options[] = array(
		'desc' => __('Add RSS support', 'scratch'),
		'type' => 'checkbox',
		'id' => 'rss'
	);
	$options[] = array(
		'desc' => __('Disable WordPress Emoji support', 'scratch'),
		'type' => 'checkbox',
		'id' => 'disable_emoji'
	);

	$options[] = array(
		'name' => 'Header',
		'type' => 'heading'
	);
	$options[] = array(
		'desc' => 'background color',
		'id' => 'header-bg-color',
		'type' => 'color',
	);
	$options[] = array(
		'name' => 'Logo',
		'desc' => 'Logo text color',
		'id' => 'logo-color',
		'type' => 'color'
	);
	$options[] = array(
		'desc' => 'Logo image',
		'id' => 'logo',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => 'Mobile Navigation',
		'desc' => 'Mobile Navigation color',
		'id' => 'mobile-nav-color',
		'type' => 'color'
	);
	$options[] = array(
		'name' => __('Pages', 'scratch'),
		'type' => 'heading'
	);

	$options[] = array(
		'desc' => __('Display Author', 'scratch'),
		'id' => 'page-author',
		'type' => 'checkbox',
		'class' => 'hidden'
	);
	$options[] = array(
		'desc' => __('Display Date', 'scratch'),
		'id' => 'page-date',
		'type' => 'checkbox',
		'class' => 'hidden'
	);
	
	$options[] = array(
		'name' => __('Posts', 'scratch'),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __('SEO', 'scratch'),
		'type' => 'heading'
	);
	$options[] = array(
		'name' => __('Google Analytics', 'scratch'),
		'desc'	=> __('Add only the scripts (Without the &lt;script&gt;&lt;/script&gt; tags).', 'scratch'),
		'id'	=> 'analytics',
		'type' => 'textarea'
	);
	
	// Enable editor
	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);
	
	return $options;
}
function optionsframework_custom_scripts() { ?>
<script type="text/javascript">
jQuery(document).ready(function($) {
	
	$('#page-meta').click(function() {
  		$('#section-page-author, #section-page-date').fadeToggle(400);
	});
	if ($('#page-meta:checked').val() !== undefined) {
		$('#section-page-author, #section-page-date').show();
	}
	
	$('#hp-lobby').click(function() {
  		$('#section-hp-slider').fadeToggle(400);
	});
	if ($('#hp-lobby:checked').val() !== undefined) {
		$('#section-hp-slider').show();
	}

});
</script>
<?php
}
add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');