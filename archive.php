<?php get_header();?>
<div class="<?php the_container(); ?>">
	<div class="row">
		<div class="col-sm-8">
			<div id="content" class="clearfix">
				
				<?php the_breadcrumb();?>
				
				<header class="page-header" role="heading">
					<h1 class="page-title"><?php post_type_archive_title();?></h1>
				</header>
				
				<?php if( have_posts() ) : ?>
				<div class="the-loop">
					
					<?php while(have_posts()) : the_post(); ?>
					<article <?php post_class();?> role="article">
						
						<a href="<?php the_permalink();?>" role="link">
							<?php the_title('<h3>', '</h3>');?>
						</a>
						
						<?php the_excerpt();?>
						
					</article>
					<?php endwhile; ?>
					
					<?php the_pagination(); ?>
				</div>
				<?php else : ?>
				<div class="no-posts">
					<h2><?php _e('No posts to show', 'scratch'); ?></h2>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer();?>