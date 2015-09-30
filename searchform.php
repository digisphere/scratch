<form role="search" method="get" id="searchform" class="navbar-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	
	<div class="form-group">
		
		<label class="screen-reader-text" for="s">
			<?php _e('Search this website', 'scratch');?>
		</label>
		
		<div class="row">
			<div class="col-xs-10 col-sm-8">
				<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control input-sm" />
			</div>
			<div class="col-xs-2 col-sm-4"><input type="submit" id="searchsubmit" value="<?php _e('Search', 'scratch');?>" class="btn btn-default btn-sm input-sm" /></div>
		</div>	
	</div>
</form>