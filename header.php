<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php wp_title( '|', true, 'right' );?></title>
	<?php wp_head();?>
	<!-- HTML5 Shim for IE -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body <?php body_class();?> role="application">

<div id="header" class="clearfix" role="banner">
	<div class="<?php the_container(); ?>">
		<?php the_logo(); ?>
		<?php bootstrap_menu('main'); ?>
    </div>
</div>
<div id="main">