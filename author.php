<?php get_header(); ?>

<div class="row-fluid">
	<div class="span8 offset1">
		<div class="author-page">
			<?php
				$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
			?>
		
			<h1><?php echo $curauth->display_name; ?></h1>
		
			<div class="avatar">
				<?php echo get_avatar( $curauth->user_email, 150 ); ?>				
			</div>
			
			<ul class="info unstyled">
				<li><a href="http://twitter.com/<?php echo($curauth->aim); ?>">@<?php echo($curauth->aim); ?></a></li>
				<li>3DS Friend Code: <?php echo($curauth->yim); ?></li>
				
				<?php
					$author_website = $curauth->user_url;
					if ($author_website) :
				?>
					<li>
						<a href="<?php echo $author_website; ?>"><?php echo $author_website; ?></a>
					</li>
				<?php endif;?>
			</ul>
			
			<p class="bio"><?php echo $curauth->description; ?></p>
		</div>
		
		<?php include(TEMPLATEPATH . "/loop.php"); ?>
	</div>
	
	<div class="span2">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>