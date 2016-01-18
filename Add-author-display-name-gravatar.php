<?php

add_action( 'genesis_before_entry','relocate_entry_title_pages' );
function relocate_entry_title_pages() {
	
	 
   	 if( !is_author() ) return;
    
    	if( get_query_var('author') ) {
		global $wp_query;
		$curauth = $wp_query->get_queried_object();
		}
		
		echo '<h1 style="text-align:center" class="page-title">' . $curauth->display_name .'</h1>';
		

		$entry_author = get_avatar( get_the_author_meta( 'email' ), 200 );

		//$author_link  = get_author_posts_url( get_the_author_meta( 'ID' ) );
		printf( '<div class="author-avatar">%s</div>', $entry_author );
		
}

genesis();