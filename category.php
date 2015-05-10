<?php get_header(); ?>

<div class="row-fluid">
	<div class="span8 offset1">
		<div class="category-header">
			<h1><?php single_cat_title(); ?></h1>
	
			<?php if(category_description()) { ?>
				<p>
					<?php echo category_description(); ?>
				</p>
			<?php } ?>			
		</div>
		
		<?php include(TEMPLATEPATH . "/loop.php"); ?>
	</div>
	
	<div class="span2">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>


