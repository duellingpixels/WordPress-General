
<?php
	
/** Replace the standard loop with our custom loop */
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop',  'dp_author_info', 20);
/**
 * Function to display author details on the author archive page
 *
 * Here, we're hooking to genesis_before_loop so that it displays
 * above the posts output
 *
 * @author Ade Walker http://www.studiograsshopper.ch
 * @uses get_query_var()
 *
 * @return echo out the author's details
 */
 function dp_author_info() {
	
    
    if( !is_author() ) return;
    
    if( get_query_var('author') ) {
		global $wp_query;
		$curauth = $wp_query->get_queried_object();
    }
    
    $bio = $curauth->description;
    $name = $curauth->display_name;
    $website = $curauth->user_url; 
    $entry_author = get_avatar( get_the_author_meta( 'email' ), 200 );
       
	echo apply_filters('the_content', get_post_meta($author_id->ID, $bio, true));
    
	echo '<div class="introduction">';
			//$author_link  = get_author_posts_url( get_the_author_meta( 'ID' ) );
			printf( '<div class="one-third first">%s</div>', $entry_author );
	echo '<div class="two-thirds ">';
			echo '<h1  class=" page-title">' . $curauth->display_name .'</h1>';
			echo '<p>' . $bio . '</p><br>';
			echo '<p>Website: <a href="' . $website . '">' . $website . '</p>';
	echo '</div></div></div>';
			
	echo '<h4 class="entry-title" style="text-align: center"> All posts by ' . $name . '</h4> ';
			
	genesis_standard_loop();
}

genesis();
