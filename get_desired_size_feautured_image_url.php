<?php
/* 
* Description: Get the desired size featured image URL
* $id: the attachment image id (not the post id), default: current loop post id
* $size: the wanted default wp dimension (thumbnail, medium,  medium_large, large, full), default: medium_large
* Example of use to show only thumbnail: asw_get_desired_size_feautured_image_url(null, "thumbnail");
* Return: Desired featured image size URL, or placeholder image from https://via.placeholder.com API
*/
function asw_get_desired_size_feautured_image_url($id=null, $size="medium_large"){
    $id = (isset($id))? get_the_ID(): $id;
	$size = (in_array( $size, array( 'thumbnail', 'medium', 'medium_large','large', 'full' )) )? $size : "medium_large";
	$url = esc_url(wp_get_attachment_image_src( get_post_thumbnail_id($id), $size)[0]);
	if ( $url==false ) {
		$width = ($size == "full")? "1900" : get_option( $size . '_size_w' );
		return "https://via.placeholder.com/".$width;
	}else{
		return $url;
	}
}
