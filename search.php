<?php get_header(); ?>

<div class="row-fluid">
	<div class="span8 offset1">
		<?php include(TEMPLATEPATH . "/loop.php"); ?>
	</div>
	
	<div class="span2">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>