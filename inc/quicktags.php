<?php
function scratch_quicktags() {
	if ( wp_script_is( 'quicktags' ) ) {
	?>
	<script type="text/javascript">
	QTags.addButton( 'mark', 'mark', '[mark]', '[/mark]', '', '', 130 );
	QTags.addButton( 'small', 'small', '[small]', '[/small]', '', '', 131 );
	
	QTags.addButton( 'col', 'col', '[col device="sm" size="12"]', '[/col]', '', '', 140 );
	QTags.addButton( 'row', 'row', '[row]', '[/row]', '', '', 141 );
	QTags.addButton( 'btn', 'btn', '[btn type="default" size="primary"]', '[/btn]', '', '', 142 );
	QTags.addButton( 'panel', 'panel', '[panel type="default" padding="yes"]', '[/panel]', '', '', 143 );
	QTags.addButton( 'lead', 'lead', '[lead]', '[/lead]', '', '', 144 );
	QTags.addButton( 'jumbotron', 'jumbotron', '[jumbotron]', '[/jumbotron]', '', '', 145 );
	
	</script>
	<?php
	}
}
add_action( 'admin_print_footer_scripts', 'scratch_quicktags' );