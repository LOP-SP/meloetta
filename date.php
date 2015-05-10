<?php get_header(); ?>

<div class="row-fluid">
	<div class="span8 offset1">
		<div class="category-header">
			<h1>
				<?php // This is a MONTHLY archive. ?>
				<?php the_time('F, Y'); ?>
			</h1>			
		</div>
		
		<?php include(TEMPLATEPATH . "/loop.php"); ?>
	</div>
	
	<div class="span2">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
