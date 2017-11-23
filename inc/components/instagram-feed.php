<?php 

function instagram_feed_component($post){
	$instagram_feed_component = '';
	$instagram_feed_shortcode = get_post_meta($post->ID, 'instagram_feed_shortcode', true);

	if(isset($instagram_feed_shortcode) && NULL != $instagram_feed_shortcode) {
		$insta_feed = do_shortcode($instagram_feed_shortcode);
		$instagram_feed_component .= '<div class="slab slab--base sr-show">' .$insta_feed . '</div>';
	}
	
	echo $instagram_feed_component;
}