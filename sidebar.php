<ul class="nav nav-list">
  <li class="nav-header">Colunas</li>
  <?php wp_list_categories(array('exclude' => '1', 'title_li' => '')); ?>
	<li class="nav-header">Arquivo</li>
	<?php wp_get_archives(array('limit' => 12)); ?>
</ul>
