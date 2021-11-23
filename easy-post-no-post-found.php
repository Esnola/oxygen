<?php
/*
* Description: If no posts for the actual query in the easy post module (usefull for query outside the main loop)
* Return: 
* 	if no posts in the query: Desired Output
* 	Else: the posts
*/

add_filter("oxygen_vsb_after_component_render", "asw_oxygen_vsb_after_component_render", 100, 1);

if (!function_exists('asw_oxygen_vsb_after_component_render')) {
	function asw_oxygen_vsb_after_component_render($outputContent){		
		$pattern = '/\boxy-post\b/i';
		if(!preg_match($pattern , $outputContent)) {
			return "<p>No Posts</p>";
		}
		return $outputContent;
	}	
}

	
?>
