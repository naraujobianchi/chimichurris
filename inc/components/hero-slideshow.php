<?php 

function hero_slideshow_component($post){
	$group_data = get_post_meta($post->ID, 'hero-slides', true);
	$group_data = maybe_unserialize($group_data); // nice WP helper function to unserialize if needed
	$upload_dir = content_url() . '/uploads/';
	if($group_data !== NULL && count($group_data) > 0 ){
		$hero_slider_component = '';

			$hero_slider_component .='<div class="slideshow">
				<ul class="base carousel background-carousel" data-gw-component="widget/carousel">';

			// Render individual item
			foreach ( $group_data as $key => $item ) {
				// Image properties
	            $hero_slide_image_ID = $item['hero-slide-image'][0];
	            $hero_slide_image_ALT = get_post_meta($hero_slide_image_ID, '_wp_attachment_image_alt', true);
	            $hero_slide_image_TITLE = get_the_title($hero_slide_image_ID);
	            $hero_slide_image_URL_data = wp_get_attachment_metadata($hero_slide_image_ID);

	            if(isset($hero_slide_image_URL_data["file"]) && NULL != $hero_slide_image_URL_data["file"]){
		        	$hero_slide_image_FILE_URL = $hero_slide_image_URL_data["file"];
		            $hero_slide_image_SRC = $upload_dir . $hero_slide_image_FILE_URL;
	            }

	            // Text properties
				$hero_slide_heading = $item['hero-slide-heading']; 
				$hero_slide_copy = wpautop( $item['hero-slide-copy'], true );
				if(isset( $hero_slide_image_SRC) && NULL !=  $hero_slide_image_SRC){
					$hero_slider_component .='<li>
						<div style="background:url(' . $hero_slide_image_SRC . ') 50% 50% no-repeat; background-size:cover;">';

						$hero_slider_component .= '<div class="slideshow__content">
							<div class="container">';
								if(isset( $hero_slide_heading) && NULL !=   $hero_slide_heading){
									$hero_slider_component .='<h1 class="headline sr-scale-carousel">' . $hero_slide_heading . '</h1><br/>';	
								}
															
								if(isset($hero_slide_copy) && NULL !=  $hero_slide_copy){
									$hero_slider_component .='<div class="subheadline sr-move-up-delayed-carousel">' . $hero_slide_copy . '</div><br/>';								
								}

								$hero_slider_component .='<div class="subheadline sr-move-up-delayed-carousel links--brand"><a href="#">Check our menu</a></div>';	
								
								$hero_slider_component .= '</div>
							</div>';
						$hero_slider_component .='</li>';	
				}			
			}

			$hero_slider_component .='</ul>';
			$hero_slider_component .='</div>';
			echo $hero_slider_component;

	}
}


