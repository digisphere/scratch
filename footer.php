</div><!-- #main -->

<div id="footer" class="clearfix" tabindex="0">
	<div class="<?php the_container(); ?>" id="main-footer">
		<div class="row">
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<div class="col-sm-12">
			<?php wp_nav_menu(array(
				'theme_location' => 'footer',
				'container' => 'nav',
				'container_class' => 'nav',
				'menu_class' => 'nav footer-menu',
				'depth' => 1
			));?></div>
			<?php endif; ?>
    	</div>
	</div>
</div>

</body>
<?php wp_footer();?>
</html>