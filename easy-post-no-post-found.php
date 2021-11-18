<?php
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
