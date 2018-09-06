<?php
	include('phase1/include/global_var.php');

	// Add "?s=web" to the end of the URL to track source
	$source = preg_replace("/[^A-Za-z0-9-_]/", '', $_GET['s']);

	$section = 'event_content';

	// Sanitize semantic identifier
	$semantic = preg_replace("/[^A-Za-z0-9-_]/", '', $_GET['semantic']);

	// Get page content from db
	$sql = "
		SELECT
			*
		FROM
			content_index
		WHERE
			remove = '0' AND
			active_" . $lang . " = '1' AND
			section = '$section' AND
			semantic_url = '$semantic'
		LIMIT
			1
	";

	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
	
	// Check if this page actually exists
	if($count != 1) {
		header('Location: ' . $real_root_directory . $lang . '/home/');
		exit();
	}
	
	while($row=mysqli_fetch_array($result)) {
		// Localize 
		foreach($row as $key=>$value) { 
			${$key} = $value;
		}
	}

	$campaign_code = $parameter_data;

	switch($lang) {
		case 'en':
			$page_title = $page_title_en;
			$meta_description = $meta_description_en;
			$meta_keyword = $meta_keyword_en;
			$og_image = $og_image_en;
			$content_file = $content_file_en;
			$content_search = $content_search_en;
			break;
			
		case 'sc':
			$page_title = $page_title_sc;
			$meta_description = $meta_description_sc;
			$meta_keyword = $meta_keyword_sc;
			$og_image = $og_image_sc;
			$content_file = $content_file_sc;
			$content_search = $content_search_sc;
			break;
	}

	$core_url = $real_root_directory . $lang . '/event/' . $semantic;
	$og_image = $root_directory . 'img_lib/' . $og_image;

	$metaTitle = $page_title . ' - ' . $site_name;
	$metaSiteName = $site_name;
	$metadescription = $meta_description;
	$metaType = $og_type;
	$metaUrl = $core_url;
	$metaImage = $og_image;
	$canonicalUrl = $core_url;

	include_once ('include/header.php');

	include('phase1/file_lib/' . $content_file);
?>



<?php include_once ('include/contactus_widget_desktop.php'); ?>
<?php include_once ('include/footer.php'); ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyqyAi4hcvYPwoZSLJ7L-w437bJ6LKE_A"></script>
	<script type="text/javascript">
	var myOptions, map;

	function init() {
		$('.map').each(function (index, Element) {
				var coords = $(Element).text().split(",");
				if (coords.length != 3) {
						$(this).display = "none";
						return;
				}
				var latlng = new google.maps.LatLng(parseFloat(coords[0]), parseFloat(coords[1]));

				var myOptions = {
						zoom: 17,
						center: latlng,
						linksControl: false,
						panControl: false,
						addressControl: false,
						enableCloseButton: false,
						zoomControl: false,
						fullscreenControl: false,
						gestureHandling: 'greedy',
						styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c7eced"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#fac8a8"},{"lightness":40}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#44828f"},{"lightness":10}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
				};
				var map = new google.maps.Map(Element, myOptions);

				var marker = new google.maps.Marker({
	        position: new google.maps.LatLng(parseFloat(coords[0]), parseFloat(coords[1])),
	        map: map,
					icon: 'dist/images/page_template/pin.png',
	        title: 'Hello World!'
	      });

		});
	}


	$(document).ready(function(){
		init();
	});
</script>
