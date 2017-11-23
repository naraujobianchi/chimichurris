<?php 

function two_columns_with_img_component($post){
	$postId = $post->ID;
	$two_cols_component = '';
	$two_columns_with_img_heading = wpautop( get_post_meta($postId, 'two_columns_with_img_heading', true), true );
	$two_columns_with_img_copy = wpautop( get_post_meta($postId, 'two_columns_with_img_copy', true), true );
	$two_columns_with_img_bg_colour = get_post_meta($postId, 'two_columns_with_img_bg_colour', true);
	$two_columns_with_img_widget_id = get_post_meta($postId, 'two_columns_with_img_widget_id', true);

	// Content image
	$two_columns_with_img_image_ID = get_post_meta($postId, 'two_columns_with_img_image', true);
	$two_columns_with_img_image_ALT = get_post_meta($two_columns_with_img_image_ID, '_wp_attachment_image_alt', true);
	$two_columns_with_img_image_TITLE = get_the_title($two_columns_with_img_image_ID);
	$two_columns_with_img_image_URL_data = wp_get_attachment_metadata($two_columns_with_img_image_ID, true);
	$two_columns_with_img_image_FILE_URL = NULL;
	$two_columns_with_img_image_SRC = NULL;
	if(isset($two_columns_with_img_image_URL_data ["file"]) && NULL != $two_columns_with_img_image_URL_data["file"] ){
    	$two_columns_with_img_image_FILE_URL = $two_columns_with_img_image_URL_data ["file"];
		$two_columns_with_img_image_SRC = content_url() . '/uploads/' . $two_columns_with_img_image_FILE_URL;
    }	

    if(NULL != $two_columns_with_img_heading || NULL != $two_columns_with_img_copy){
			$two_cols_component .= '<div id="'. $two_columns_with_img_widget_id .'"><div class="slab slab--large sr-show ' . $two_columns_with_img_bg_colour . '">';
			$two_cols_component .= '<div class="container">';
			if(NULL != $two_columns_with_img_heading){
							$two_cols_component .= '<h2 class="sr-scale">' . $two_columns_with_img_heading .'</h2>';
						}
				$two_cols_component .= '<div class="table">
					<div class="table__cell">';
						if('' !== $two_columns_with_img_image_SRC){
							$two_cols_component .= '<img src="' . $two_columns_with_img_image_SRC . '" alt="' . $two_columns_with_img_heading . '" />';
						}		
					$two_cols_component .= '</div>';
					// Right Column
					$two_cols_component .= '<div class="table__cell">';
						if('' !== $two_columns_with_img_copy){
							$two_cols_component .= '<div class="kilo links--brand"><div class="padding-equal">' . $two_columns_with_img_copy . '</div></div>';
						}
					$two_cols_component .= '</div>';
				$two_cols_component .= '</div>
			</div>
		</div></div>';

		echo $two_cols_component;
	}	
}