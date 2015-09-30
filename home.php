<?php
/*
 * Template Name: Home
 */
get_header();
?>
<div class="<?php the_container(); ?>">

	<div class="jumbotron marg-top">
		<h1>Welcome to Scratch!</h1>
		<h2>Theme for developers who want to start from scratch.</h2>
		<p>Version: 1.0.0 | Author: Amit Moreno</p>
		<p style="margin-bottom: 0"><small>This theme is Free to use under the <a href="http://www.gnu.org/licenses/gpl-2.0.html" target="_blank">GNU General Public License</a>.</small></p>
	</div>
	
	<div class="row">
		<div class="col-sm-4">
			<h2 class="h1 marg-bottom">What this theme includes?</h2>
		</div>
		<div class="col-sm-8">
			<div class="panel panel-default pad">
				<div class="row">
					<div class="col-sm-6">
						<h3 class="nomarg-top">Basic Utilities</h3>
						<ul>
							<li>Bootstrap 3.3.5</li>
							<li>Font Awesome 4.4.0</li>
						</ul>
					</div>
					<div class="col-sm-6">
						<h3 class="nomarg-top">Environment</h3>
						<ul>
							<li>Options Panel</li>
							<li>Security & Performance addons</li>
							<li>Sass compatibility + Compass compatibility</li>
							<li>Helper Classes in CSS</li>
							<li>Useful Functions</li>
							<li>Extra Quicktags & Shortcodes</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>