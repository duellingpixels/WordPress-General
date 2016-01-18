<?php

	
/** Replace the standard loop with our custom loop */
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop',  'sgr_author_info', 20);
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
 function sgr_author_info() {
	
    
    if( !is_author() ) return;
    
    if( get_query_var('author') ) {
		global $wp_query;
		$curauth = $wp_query->get_queried_object();
    }
    
    $bio = $curauth->description;
    $name = $curauth->display_name;
    $website = $curauth->user_url; 
    
       
	echo apply_filters('the_content', get_post_meta($author_id->ID, $bio, true));
    
	echo '<div class="entry">';
		    echo '<p>All posts by : ' . $name . '</p>';
			echo '<p>About ' . $name . ' ' . $bio . '</p>';
			echo '<p>Website: <a href="' . $website . '">' . $website . '</p>';
	echo '</div>';
	
			
	echo '<h3 class="entry-title" style="text-align: center"> Recent Blog Posts</h3> ';
			

	genesis_standard_loop();
}



genesis();
