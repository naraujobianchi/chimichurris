<?php 

function google_map_component($post){
	
	$google_map_lat = get_post_meta($post->ID, 'google_map_lat', true);
	$google_map_long = get_post_meta($post->ID, 'google_map_long', true);
	$google_map_widget_id = get_post_meta($post->ID, 'google_map_widget_id', true);

	$google_map_component = '';

	if(isset($google_map_lat)&& isset($google_map_long) && NULL != $google_map_lat && NULL != $google_map_long){

		$google_map_component .='<div id="'. $google_map_widget_id .'" class="sr-show"><div class="google-map">
				<div class="location-map">
	                <div id="map-canvas"></div>
						    <script>					      
								function initMap() {
									var myLatLng = {lat: ' . $google_map_lat .', lng: ' . $google_map_long . '};
									var map = new google.maps.Map(document.getElementById("map-canvas"), {
										center: myLatLng,
										zoom: 16,
										styles: [
								          {
								            elementType: "geometry",
								            stylers: [{color: "#f5f5f5"}]
								          },
								          {
								            elementType: "labels.icon",
								            stylers: [{visibility: "off"}]
								          },
								          {
								            elementType: "labels.text.fill",
								            stylers: [{color: "#616161"}]
								          },
								          {
								            elementType: "labels.text.stroke",
								            stylers: [{color: "#f5f5f5"}]
								          },
								          {
								            featureType: "administrative.land_parcel",
								            elementType: "labels.text.fill",
								            stylers: [{color: "#bdbdbd"}]
								          },
								          {
								            featureType: "poi",
								            elementType: "geometry",
								            stylers: [{color: "#eeeeee"}]
								          },
								          {
								            featureType: "poi",
								            elementType: "labels.text.fill",
								            stylers: [{color: "#757575"}]
								          },
								          {
								            featureType: "poi.park",
								            elementType: "geometry",
								            stylers: [{color: "#e5e5e5"}]
								          },
								          {
								            featureType: "poi.park",
								            elementType: "labels.text.fill",
								            stylers: [{color: "#9e9e9e"}]
								          },
								          {
								            featureType: "road",
								            elementType: "geometry",
								            stylers: [{color: "#ffffff"}]
								          },
								          {
								            featureType: "road.arterial",
								            elementType: "labels.text.fill",
								            stylers: [{color: "#757575"}]
								          },
								          {
								            featureType: "road.highway",
								            elementType: "geometry",
								            stylers: [{color: "#dadada"}]
								          },
								          {
								            featureType: "road.highway",
								            elementType: "labels.text.fill",
								            stylers: [{color: "#616161"}]
								          },
								          {
								            featureType: "road.local",
								            elementType: "labels.text.fill",
								            stylers: [{color: "#9e9e9e"}]
								          },
								          {
								            featureType: "transit.line",
								            elementType: "geometry",
								            stylers: [{color: "#e5e5e5"}]
								          },
								          {
								            featureType: "transit.station",
								            elementType: "geometry",
								            stylers: [{color: "#eeeeee"}]
								          },
								          {
								            featureType: "water",
								            elementType: "geometry",
								            stylers: [{color: "#c9c9c9"}]
								          },
								          {
								            featureType: "water",
								            elementType: "labels.text.fill",
								            stylers: [{color: "#9e9e9e"}]
								          }
								        ]
									});

									// Create a marker and set its position.
									var marker = new google.maps.Marker({
										map: map,
										position: myLatLng
									});
								}

						    </script>
	                <script src="//maps.google.com/maps/api/js?key=AIzaSyCMFOwrmca9MumNpio_4IweESeth655An8&callback=initMap" async defer></script>
	            </div> 
			</div></div>';

		echo $google_map_component;
	}

}

?>