<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="row-fluid">
	<div class="span9 offset1">
		<div class="post">
			<h2>
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
				<br>
    			<small>
    				<span class=""><i class="icon-time"></i> <?php echo get_the_date(); ?></span>
                    <span class=""><i class="icon-user"></i> <?php the_author_posts_link(); ?></span>
                    <?php the_tags( '<span class="tags"><i class="icon-tags"></i> ', ', ', '</span>' ); ?>
    			</small>
			</h2>

			<!-- Post's featured image. -->
			<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="center">
					   <?php the_post_thumbnail('large', array('class' => 'featured-image')); ?>
			   </a>
			<?php endif; ?>

			<?php the_content(''); ?>

			<div class="row-fluid author">
				<div class="avatar">
					<a href="<?php the_author_meta('user_url'); ?>">
						<?php echo get_avatar( get_the_author_meta('user_email'), '100', '' ); ?>
					</a>
				</div>

				<div class="info">
					<h1><?php the_author_posts_link(); ?></h1>
					<p><?php the_author_meta('description'); ?></p>
				</div>
			</div>

			<div class="categorization">
				<p>Postado em: <?php the_category(', '); ?></p>
				<p><?php the_tags( 'Tags: ', ', ', ''); ?></p>
			</div>

			<div class="center">
				<?php previous_post_link(); ?> &bull; <?php next_post_link(); ?>
			</div>
		</div> <!-- post -->

	<?php include(TEMPLATEPATH . "/inc/edit-button.php"); ?>

	<?php comments_template(); ?>

	<!--<?php trackback_rdf(); ?>-->

	<?php endwhile; else: ?>
	No Comments
	<?php endif; ?>
	</div>

	<div class="span2">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
