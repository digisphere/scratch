<?php
function get_styles() {
	$header_bg_color = of_get_option('header-bg-color');
	$logo_color = of_get_option('logo-color');
	$mobNavColor = of_get_option('mobile-nav-color');
?>
<style>
<?php if($header_bg_color) : ?>
#header {
	background-color: <?php echo $header_bg_color?>;
}
<?php endif; ?>
<?php if($logo_color) : ?>
#the-logo a.logo-text {
	color: <?php echo $logo_color; ?>;
}
<?php endif; ?>
<?php if($mobNavColor) : ?>
#header .navbar-toggle .icon-bar {
	background: <?php echo $mobNavColor; ?>;
}
<?php endif; ?>
</style>
<?php
}