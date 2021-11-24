<?php

// Get the last post URL. If reached the first, return to end post URL.
function asw_get_previous_post_url() {
	$actual_post_link = get_permalink();
	$prev_post = get_adjacent_post(false, '', true);
	
	if(!empty($prev_post)) {
		$prev_post_link = get_permalink($prev_post->ID);
		return $prev_post_link;
	}else{
		// We reached first post, return last post link
		$last = new WP_Query('post_type=post&posts_per_page=1&order=DESC&no_found_rows=true');
		$last->the_post();
		$last_link = get_permalink();
		wp_reset_query();
		return $last_link;
	}
}

// Get the next post URL. If reached the end, return to first post URL.
function asw_get_next_post_url(){
	$actual_post_link = get_permalink();
	$next_post = get_adjacent_post(false, '', false);
	
	if(!empty($next_post)) {
		$next_post_link = get_permalink($next_post->ID);
		return $next_post_link;
	}else{
		// We reached last post, return first post link
		$first = new WP_Query('post_type=post&posts_per_page=1&order=ASC&no_found_rows=true');
		$first->the_post();
		$first_link = get_permalink();
		wp_reset_query();
		return $first_link;
	}
}
