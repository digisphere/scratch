<?php if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) return; ?>

<section id="comments">
	
	<?php  if ( have_comments() ) : 
		global $comments_by_type;
		$comments_by_type = &separate_comments( $comments );
		if ( ! empty( $comments_by_type['comment'] ) ) : 
	?>
	<section id="comments-list" class="comments">
		
		<h3 class="comments-title"><?php comments_number(); ?></h3>
		
		<?php if ( get_comment_pages_count() > 1 ) : ?>
		<nav id="comments-nav-above" class="comments-navigation" role="navigation">
			<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
		</nav>
		<?php endif; ?>
		
		<ul><?php wp_list_comments( 'type=comment' ); ?></ul>
		
		<?php if ( get_comment_pages_count() > 1 ) : ?>
		<nav id="comments-nav-below" class="comments-navigation" role="navigation">
			<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
		</nav>
		<?php endif; ?>
		
	</section>
	<?php 
		endif;
		
		if ( ! empty( $comments_by_type['pings'] ) ) : 
			$ping_count = count( $comments_by_type['pings'] ); 
	?>
	<section id="trackbacks-list" class="comments">
		<h3 class="comments-title"><?php echo '<span class="ping-count">' . $ping_count . '</span> ' . ( $ping_count > 1 ? __( 'Trackbacks', 'blankslate' ) : __( 'Trackback', 'blankslate' ) ); ?></h3>
		<ul><?php wp_list_comments( 'type=pings&callback=blankslate_custom_pings' ); ?></ul>
	</section>
	<?php endif; 
		endif;
		
		if ( comments_open() ){
			$comments_args = array(
		        'label_submit'=> __('Submit', 'ds'),
		        'title_reply'=>'Write your reply here...',
		        'comment_notes_after' => '',
		        'comment_field' => '<p class="form-group"><label for="comment">' . _x( 'Comment', 'scratch' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true" class="form-control"></textarea></p>',
);

comment_form($comments_args);
		}
?>
</section>