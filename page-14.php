<?php get_header(); ?>

<div class="row-fluid">
	<div class="span8 offset1">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
			<h2><?php the_title(); ?></h2>

			<?php the_content(''); ?>

			<ul>
			  <li><a href="<?php bloginfo('url'); ?>/lideres/carlos-dog/">Dog</a></li>
			  <li><a href="<?php bloginfo('url'); ?>/lideres/ciro-chocotone/">Chocotone</a></li>
			  <li><a href="<?php bloginfo('url'); ?>/lideres/danilo-gnomo/">Gnomo</a></li>
			  <li><a href="<?php bloginfo('url'); ?>/lideres/rafael-maximo/">Rafael</a></li>
			  <li><a href="<?php bloginfo('url'); ?>/lideres/lord-kelvin/">Kelvin</a></li>
			  <li><a href="<?php bloginfo('url'); ?>/lideres/luis-jesus/">Jesus</a></li>
			  <li><a href="<?php bloginfo('url'); ?>/lideres/willian-hidro/">Hidro</a></li>
			</ul>

		</div>
		<?php endwhile; endif; ?>

		<?php include(TEMPLATEPATH . "/inc/edit-button.php"); ?>
	</div>
	
	<div class="span2">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
