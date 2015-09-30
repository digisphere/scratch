<?php
/*
 * bootstrap Menu
 * 
 * since 1.0.0
 */
function bootstrap_menu( $slug = '', $mobile = true ) {
	
	if( has_nav_menu( $slug ) ) {
?>
<div id="nav-container">
	<?php if( $mobile = true ) : ?>
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only"><?php _e('Toggle navigation', 'scratch'); ?></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<?php endif; ?>
	<?php wp_nav_menu(array(
		'theme_location'	=> $slug,
		'container'	=> false,
		'menu_class' => 'nav navbar-nav',
		'items_wrap' => '<nav class="collapse navbar-collapse"><ul id="%1$s" class="%2$s">%3$s</ul></nav>'
	));?>
</div>
<?php
	}
}