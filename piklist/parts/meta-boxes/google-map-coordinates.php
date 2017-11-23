<?php
/*
Title: Google Map coordinates
Post Type: page
Collapse: true
Order: 6
*/

piklist('field', array(
	'type' => 'text'
	,'columns' => 6
	,'label' => 'Widget ID'   
	,'field' => 'google_map_widget_id'
	,'description' => 'Lowercase hyphen separated. To be used by menu items'
));

piklist('field', array(
	'type' => 'text'
	,'columns' => 6
	,'label' => 'Latitude'   
	,'field' => 'google_map_lat'
	,'description' => 'Please add Latitude of the place'
));

piklist('field', array(
	'type' => 'text'
	,'columns' => 6
	,'label' => 'Longitude'   
	,'field' => 'google_map_long'
	,'description' => 'Please add Longitude of the place'
));