<?php 

function menu_component($post){	
	$menu_widget_title = get_post_meta($post->ID, 'menu_widget_title', true);
	$menu_widget_id = get_post_meta($post->ID, 'menu_widget_id', true);
	$menu_widget_bg_colour = get_post_meta($post->ID, 'menu_widget_bg_colour', true);
	$menu_section_col_1 = get_post_meta($post->ID, 'menu_section_col_1', true);
	$menu_section_col_1 = maybe_unserialize($menu_section_col_1); // nice WP helper function to unserialize if needed
	$menu_section_col_2 = get_post_meta($post->ID, 'menu_section_col_2', true);
	$menu_section_col_2 = maybe_unserialize($menu_section_col_2); // nice WP helper function to unserialize if needed
	$menu_section_col_3 = get_post_meta($post->ID, 'menu_section_col_3', true);
	$menu_section_col_3 = maybe_unserialize($menu_section_col_3); // nice WP helper function to unserialize if needed

	$menu_component = '';

    if($menu_section_col_1 != NULL && count($menu_section_col_1) > 0){
			$menu_component .= '<div id="'. $menu_widget_id .'"><div class="slab slab--large sr-show ' . $menu_widget_bg_colour . '">';	
			$menu_component .= '<div class="container">';

			if(NULL != $menu_widget_title){
				$menu_component .= '<h2 class="sr-scale">' . $menu_widget_title .'</h2>';
			}

			$menu_component .= '<div class="row gutter-60">';

			$menu_component .= '<div class="col-sm-4">';
			foreach ( $menu_section_col_1 as $key => $menu_section_col_1_item ) {
				if(NULL != $menu_section_col_1_item['menu_title']){
					$menu_component .= '<h3>' . $menu_section_col_1_item['menu_title'] . '</h3>';
				}
				if(NULL != $menu_section_col_1_item['menu_subtitle']){
					$menu_component .= '<h4>' . $menu_section_col_1_item['menu_subtitle'] . '</h4>';
				}
				if($menu_section_col_1_item['menu_item'] != NULL && count($menu_section_col_1_item['menu_item']) > 0 ) {
					$menu_component .= '<ul class="list--menu">';
					foreach ( $menu_section_col_1_item['menu_item'] as $key => $menu_item ) {
						$menu_component .= '<li>';
						if(NULL != $menu_item['menu_item_name'] && NULL != $menu_item['menu_item_price']) {
							$menu_component .= '<h5>' . $menu_item['menu_item_name'] . '<span>' . $menu_item['menu_item_price'] . '</span></h5>';
						}
						if(NULL != $menu_item['menu_item_description']) {
							$menu_component .= '<p class="light">' . $menu_item['menu_item_description'] . '</p>';
						}
						$menu_component .= '</li>';
					}
					$menu_component .= '</ul>';
				}
			}
			$menu_component .= '</div>';

			if($menu_section_col_2 != NULL && count($menu_section_col_2) > 0 ){
				$menu_component .= '<div class="col-sm-4">';
				foreach ( $menu_section_col_2 as $key => $menu_section_col_2_item ) {
					if(NULL != $menu_section_col_2_item['menu_title']){
						$menu_component .= '<h3>' . $menu_section_col_2_item['menu_title'] . '</h3>';
					}
					if(NULL != $menu_section_col_2_item['menu_subtitle']){
						$menu_component .= '<h4>' . $menu_section_col_2_item['menu_subtitle'] . '</h4>';
					}
					if($menu_section_col_2_item['menu_item'] != NULL && count($menu_section_col_2_item['menu_item']) > 0 ) {
						$menu_component .= '<ul class="list--menu">';
						foreach ( $menu_section_col_2_item['menu_item'] as $key => $menu_item ) {
							$menu_component .= '<li>';
							if(NULL != $menu_item['menu_item_name'] && NULL != $menu_item['menu_item_price']) {
								$menu_component .= '<h5>' . $menu_item['menu_item_name'] . '<span>' . $menu_item['menu_item_price'] . '</span></h5>';
							}
							if(NULL != $menu_item['menu_item_description']) {
								$menu_component .= '<p class="light">' . $menu_item['menu_item_description'] . '</p>';
							}
							$menu_component .= '</li>';
						}
						$menu_component .= '</ul>';
					}
				}
				$menu_component .= '</div>';
			}
			
			if($menu_section_col_3 != NULL && count($menu_section_col_3) > 0 ){
				$menu_component .= '<div class="col-sm-4">';
				foreach ( $menu_section_col_3 as $key => $menu_section_col_3_item ) {
					if(NULL != $menu_section_col_3_item['menu_title']){
						$menu_component .= '<h3>' . $menu_section_col_3_item['menu_title'] . '</h3>';
					}
					if(NULL != $menu_section_col_3_item['menu_subtitle']){
						$menu_component .= '<h4>' . $menu_section_col_3_item['menu_subtitle'] . '</h4>';
					}
					if($menu_section_col_3_item['menu_item'] != NULL && count($menu_section_col_3_item['menu_item']) > 0 ) {
						$menu_component .= '<ul class="list--menu">';
						foreach ( $menu_section_col_3_item['menu_item'] as $key => $menu_item ) {
							$menu_component .= '<li>';
							if(NULL != $menu_item['menu_item_name'] && NULL != $menu_item['menu_item_price']) {
								$menu_component .= '<h5>' . $menu_item['menu_item_name'] . '<span>' . $menu_item['menu_item_price'] . '</span></h5>';
							}
							if(NULL != $menu_item['menu_item_description']) {
								$menu_component .= '<p class="light">' . $menu_item['menu_item_description'] . '</p>';
							}
							$menu_component .= '</li>';
						}
						$menu_component .= '</ul>';
					}
				}
				$menu_component .= '</div>';
			}

			$menu_component .= '</div></div>
			</div></div>';

		echo $menu_component;
	}	
}