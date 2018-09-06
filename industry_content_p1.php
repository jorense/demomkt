<?php
	include('phase1/include/global_var.php');

	$section = 'industry_content';

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

	$core_url = $real_root_directory . $lang . '/industry/' . $semantic;
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
