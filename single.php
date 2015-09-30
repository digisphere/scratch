<?php get_header();
?>
<div id="main"> 
	<div class="<?php the_container(); ?>">
		<div class="row marg-top">
			
			<?php if( of_get_option( 'single-sidebar-side' ) === 'right' && of_get_option('single-sidebar') ) : ?>
			<div class="col-sm-4"><?php get_sidebar();?></div>
			<?php endif; ?>
			
			<?php if( have_posts() ) : ?>
        	<div id="content" class="col-sm-<?php if( of_get_option( 'single-sidebar' ) ) { echo '8'; }else{ echo '12'; }?>" role="document">
				<?php while( have_posts() ) : the_post();?>
            	<article id="page-<?php the_ID();?>" <?php post_class();?>>
	            	<?php the_breadcrumbs();?>
	            	<?php get_bootstrap_thumbnail(get_the_id(), 'circle');?>
	            	<header class="page-header nomarg-top" itemprop="headline" role="heading">
		        		<?php the_title('<h1 class="page-title">','</h1>');?>
		        	</header>
		        	<?php the_content();?>
					<footer>
						<p><?php
						if( get_the_author() ) {
							echo __('This post was written by ', 'scratch') . get_the_author();
						}
						if( get_the_date() ) {
							echo __(' in ', 'scratch') . get_the_date();
						}
						?>.</p>
					</footer>
					
					<section id="comments">
						<?php
							$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
							$fields =  array(
								'author'	=> '<div class="form-group"><label for="author">' . __( 'Name', 'scratch' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
								'email'		=> '<div class="form-group"><label for="email">' . __( 'Email', 'scratch' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '<input id="email" class="form-control" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
								'url'		=> '<div class="form-group"><label for="url">' . __( 'Website', 'scratch' ) . '</label>' . '<input id="url" class="form-control" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>',
							);
							$comment_args = array(
								'class_submit'		=> 'btn btn-default',
								'title_reply'       => __( 'Leave a Reply' ),
								'title_reply_to'    => __( 'Leave a Reply to %s' ),
								'cancel_reply_link' => __( 'Cancel Reply' ),
								'label_submit'      => __( 'Post Comment' ),
								'comment_field'		=>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'scratch' ) . '</label><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true">' . '</textarea></p>',
								'comment_notes_before' => 'Your email address will not be published. Required fields are marked *',
								'comment_notes_after' => '',
								
								'fields' => apply_filters( 'comment_form_default_fields', $fields ),
							);
							comment_form( $comment_args );?>
					</section>
            	</article>
				<?php endwhile;?>
				<?php posts_nav_link(); ?>
	        </div>
	        <?php endif; ?>
	        <?php if( of_get_option( 'single-sidebar-side' ) === 'left' && of_get_option('single-sidebar') ) : ?>
			<div class="col-sm-4"><?php get_sidebar();?></div>
			<?php endif; ?>
			
        </div>
    </div>
</div>
<?php get_footer();?>