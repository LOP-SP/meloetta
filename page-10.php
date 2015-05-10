<?php get_header(); ?>

<div class="row-fluid">
	<div class="span8 offset1">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
			<h2><?php the_title(); ?></h2>

			<?php the_content(''); ?>
		</div>
		<?php endwhile; endif; ?>

		<?php include(TEMPLATEPATH . "/inc/edit-button.php"); ?>
	</div>

	<div class="span2">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
