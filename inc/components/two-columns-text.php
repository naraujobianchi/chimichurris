<?php 

function two_columns_text_component($post){
	$postId = $post->ID;
	$two_columns_text_component = '';
	$two_columns_text_heading = wpautop( get_post_meta($postId, 'two_columns_text_heading', true), true );
	$two_columns_text_copy = wpautop( get_post_meta($postId, 'two_columns_text_copy', true), true );
	$two_columns_text_cta_url = get_post_meta($postId, 'two_columns_text_cta_url', true);
	$two_columns_text_cta_text = get_post_meta($postId, 'two_columns_text_cta_text', true);
	$two_columns_text_copy_col2 = wpautop( get_post_meta($postId, 'two_columns_text_copy_col2', true), true );
	$two_columns_text_copy_bg_colour = get_post_meta($postId, 'two_columns_text_copy_bg_colour', true);
	$two_columns_text_widget_id = get_post_meta($postId, 'two_columns_text_widget_id', true);

    if(NULL != $two_columns_text_heading || NULL != $two_columns_text_copy){
			$two_columns_text_component .= '<div id="'. $two_columns_text_widget_id .'"><div class="slab slab--large sr-show '. $two_columns_text_copy_bg_colour .'">';	
			$two_columns_text_component .= '<div class="container">
				<div class="row">
					<div class="col-sm-7"><div class="padded-right">';
						if(isset($two_columns_text_heading) && NULL != $two_columns_text_heading){
							$two_columns_text_component .= '<h3 class="peta light">' . $two_columns_text_heading .'</h3>';
						}
						if(isset($two_columns_text_copy) && NULL != $two_columns_text_copy){
							$two_columns_text_component .= '<div class="milli below-32">'.$two_columns_text_copy.'</div>';
						}
						if(isset($two_columns_text_cta_text) && NULL != $two_columns_text_cta_text){
						$two_columns_text_component .= '
							<a href="'.$two_columns_text_cta_url.'" class="link--brand">' . $two_columns_text_cta_text .'</a>';
						}
					$two_columns_text_component .= '</div></div>';
					// Right Column
					$two_columns_text_component .= '<div class="col-sm-5"><div class="mega light">' . $two_columns_text_copy_col2 . '</div></div>';
				$two_columns_text_component .= '</div>
			</div>
		</div></div>';

		echo $two_columns_text_component;
	}
	
}


