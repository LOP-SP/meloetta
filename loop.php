<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if( $post->ID == $do_not_duplicate ) continue; ?>

<div class="row-fluid">
	<div class="span2">
		<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				   <?php the_post_thumbnail('thumbnail'); ?>
		   </a>
		<?php endif; ?>
	</div>

	<div class="span10 post">
		<h2>
			<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
			<br>
			<small>
				<span class=""><i class="icon-time"></i> <?php echo get_the_date(); ?></span>
                <span class=""><i class="icon-user"></i> <?php the_author_posts_link(); ?></span>
                <?php the_tags( '<span class="tags"><i class="icon-tags"></i> ', ', ', '</span>' ); ?>
			</small>
		</h2>

		<div class="post-content">
			<?php the_excerpt(); ?>

			<?php include(TEMPLATEPATH . "/inc/num_of_comments.php"); ?>
		</div> <!-- post content -->
	</div>
</div>

<!--<?php trackback_rdf(); ?>-->

<?php endwhile; ?>
<?php endif; ?>

<div class="row-fluid">
	<div class="offset2">
		<?php include(TEMPLATEPATH . "/inc/pagination.php"); ?>
	</div>
</div>
