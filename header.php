<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="author" content="Carlos Agarie" />
	<meta name="description" content="Site oficial da mais antiga Liga Pokemon de Sao Paulo. Desde 2003 organizando campeonatos na cidade!" />
	<meta name="keywords" content="pokemon, pokémon, 3ds, black, white, bw2, sao paulo, SP, liga, eventos, lop-sp, lop, lop-br, anifriends, anime friends, animefriends" />

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Arquivo do Blog <?php } ?> <?php wp_title(); ?></title>

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<?php flush(); ?>

<body>
	<div class='navbar'>
		<div class='navbar-inner'>
			<a class='brand' href="<?php bloginfo('url'); ?>/">Liga Pok&eacute;mon de S&atilde;o Paulo</a>

			<div class="pull-right">
				<?php get_search_form( true ); ?>
			</div>

			<ul class='nav pull-right'>
				<!--<li><a href='#'><p>Como participar?</p></a></li>-->
				<li><a href='<?php echo get_category_link("dicas"); ?>'><p>Guias</p></a></li>
				<li><a href="<?php echo get_page_link(10); ?>"><p>Regras</p></a></li>
				<li><a href="<?php echo get_page_link(12); ?>"><p>Ranking</p></a></li>
				<li><a href="<?php echo get_page_link(2); ?>"><p>Contato</p></a></li>
			</ul>
		</div>
	</div>

	<div class="container-fluid">
