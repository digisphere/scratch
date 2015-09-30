<?php get_header();?>
<div id="main"> 
	<div class="<?php the_container(); ?>">
		<div class="row marg-top">
			
        	<div id="content" class="col-sm-8" role="document">
				<?php while( have_posts() ) : the_post();?>
            	<article id="page-<?php the_ID();?>" <?php post_class();?>>
	            	<?php the_breadcrumbs();?>
	            	<header class="page-header nomarg-top" itemprop="headline" role="heading">
		        		<?php the_title('<h1 class="page-title">','</h1>');?>
		        	</header>
					<div class="the-content"><?php the_content();?></div>
					<footer></footer>
            	</article>
				<?php endwhile;?>
	        </div>
	        
			<div class="col-sm-4"><?php get_sidebar();?></div>
        </div>
    </div>
</div>
<?php get_footer();?>