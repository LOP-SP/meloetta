<?php get_header(); ?>

<div class="row-fluid">
	<div class="span8 offset1">
		<h1>Desculpe-nos, &hellip;</h1>
		
		<p>&hellip; mas o endere&ccedil;o que voc&ecirc; tentou acessar n&atilde;o existe. Voc&ecirc; pode visitar a nossa p&aacute;gina inicial <a href="/">clicando aqui</a>. :)</p>

		<p>Voc&ecirc; tamb&eacute;m pode enviar-nos perguntas, coment&aacute;rios ou sugestões atrav&eacute;s da <a href="/contatos">nossa p&aacute;gina de contato</a>. Ou mesmo realizar uma busca:</p>

		<form class='form-search' method="get" action="<?php bloginfo('url'); ?>/">
			<input type='text' class='input-xxlarge search-query' value="" placeholder="Anime friends, garchomp, torneios, etc" name="s" id="s">
			<button type="submit" class="btn">Busca</button>
		</form>

		<p>Obrigado pela paci&ecirc;ncia!</p>
	</div>
	
	<div class="span2">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>