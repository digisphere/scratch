<?php get_header();?>
<div class="<?php the_container(); ?>">
	<div class="row marg-top">
		<div class="col-sm-9">
			<div id="content" class="clearfix">
				
				<?php the_breadcrumbs();?>
				
				<header class="page-header nomarg-top" role="heading">
					<h1 class="page-title"><?php single_cat_title();?></h1>
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
					
				</div>
				<?php endif; ?>
				
				<?php the_pagination(); ?>
			</div>
		</div>
		
		<div class="col-sm-3">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>
<?php get_footer();?>