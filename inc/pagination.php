<div class="pagination">
	<?php
		global $wp_query, $wp_rewrite;
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	
		$pagination = array(
			'base' => @add_query_arg('paged','%#%'),
			'format' => '',
			'total' => $wp_query->max_num_pages,
			'current' => $current,
			'show_all' => false,
			'type' => 'list',
			'end_size' => 1,
			'mid_size' => 2,
			'next_text' => '&raquo;',
			'prev_text' => '&laquo;'
			);
	
		if( $wp_rewrite->using_permalinks() )
			$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	
		if( !empty($wp_query->query_vars['s']) )
			$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
	
		echo paginate_links( $pagination );
	?>	
</div>
