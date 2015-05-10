</div> <!-- container -->

<footer>
	<!-- Sitemap -->
	<div class='row-fluid'>
		<div class='span1 offset1 sitemap'>
			<ul>
				<li>
					<h4><a href="<?php bloginfo('url'); ?>/regras/">Regras</a></h4>
				</li>

				<li>
					<h4><a href="<?php bloginfo('url'); ?>/ranking/">Ranking</a></h4>
			  </li>

				<li>
					<h4><a href="<?php bloginfo('url'); ?>/historia/">Hist&oacute;ria</a></h4>
				</li>

				<li>
					<h4><a href="<?php bloginfo('url'); ?>/contato/">Contato</a></h4>
				</li>
			</ul>
		</div>

		<div class='span2 sitemap'>
			<h4><a href="<?php bloginfo('url'); ?>/organizadores/">Organizadores</a></h4>
	  	<ul>
	      <li><a href="<?php bloginfo('url'); ?>/organizadores/carlos-dog/">Dog</a></li>
	      <li><a href="<?php bloginfo('url'); ?>/organizadores/ciro-chocotone/">Chocotone</a></li>
	      <li><a href="<?php bloginfo('url'); ?>/organizadores/danilo-gnomo/">Gnomo</a></li>
	      <li><a href="<?php bloginfo('url'); ?>/organizadores/rafael-maximo/">Rafael</a></li>
	      <li><a href="<?php bloginfo('url'); ?>/organizadores/lord-kelvin/">Kelvin</a></li>
	      <li><a href="<?php bloginfo('url'); ?>/organizadores/luis-jesus/">Jesus</a></li>
	      <li><a href="<?php bloginfo('url'); ?>/organizadores/willian-hidro/">Hidro</a></li>
	    </ul>
		</div>

		<div class='span2 sitemap'>
			<h4><a href="<?php echo get_category_link("dicas"); ?>">Guias</a></h4>
			<ul>
			<?php
				global $post;
				$posts = get_posts(array('numberposts' => 5, 'category' => get_cat_ID("dicas")));
				foreach($posts as $post) : setup_postdata($post); ?>

				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

			<?php endforeach; ?>
			</ul>
		</div>

    <div class='span1 sitemap'>
      <h4><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></h4>
    </div>

		<div class='span3 offset1'>
			<a href="<?php bloginfo("url"); ?>">
				<img src="<?php bloginfo("url"); ?>/wp-content/uploads/2013/10/lop_sp_logo_small.png">
			</a>
		</div>
	</div>

	<div class='row-fluid'>
		<div class='span12 copyright'>
			<p class='center'>2003 &ndash; 2014 &copy; Liga Pok&eacute;mon de S&atilde;o Paulo</p>
		</div>
	</div>
</footer> <!-- footer -->

<!-- Analytics. -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17876048-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<?php wp_footer(); ?>
</body>
</html>
