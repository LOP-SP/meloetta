<?php get_header(); ?>

<div class='row-fluid'>
	<div class='span7 offset1'>
    <?php include(TEMPLATEPATH . "/carousel.php"); ?>
	</div>

	<div class="span3">
		<?php get_sidebar(); ?>
	</div>
</div>

<div class="row-fluid">
	<div class="span8 offset1">
		<?php include(TEMPLATEPATH . "/loop.php"); ?>
	</div>
</div>

<?php get_footer(); ?>
