<?php get_header(); ?>

<div class="row-fluid">
	<div class="span8 offset1">		
		<div class="category-header">
			<h1><?php single_tag_title("Tag: "); ?></h1>

			<?php if(tag_description()) { ?>
				<p>
					<?php echo tag_description(); ?>
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