<?php
	include('phase1/include/global_var.php');

	// Miscellaneous
	$sql = "
		SELECT
			*
		FROM
			miscellaneous
		WHERE
			id IN(1, 2, 3)
	";
	$result = mysqli_query($conn, $sql);
	while($row=mysqli_fetch_array($result)) {
		// Localize 
		foreach($row as $key=>$value) { 
			${$key} = $value;
		}
		$copy = str_replace(["\r\n","\r","\n"], "", $row['copy_' . $lang]);
		
		switch($id) {
			case '1':
				$search_result_title = strip_tags($copy);
				break;
				
			case '2':
				$hero_image = strip_tags($copy);
				break;
				
			case '3':
				$no_result = strip_tags($copy);
				break;
		}
	}

	// Sanitize Keyword
	$keyword = preg_replace("/[^A-Za-z0-9-_\s]/", '', $_GET['keyword']);

	// Get search results
	$sql = "
		SELECT
			*
		FROM
			content_index
		WHERE
			remove = '0' AND
			active_" . $lang . " = '1' AND
			content_search_" . $lang . " LIKE '%$keyword%'
		GROUP BY
			content_search_" . $lang . "
		 ORDER BY CASE 
				WHEN content_search_" . $lang . " LIKE '$keyword%' THEN 0
				WHEN content_search_" . $lang . " LIKE '% %$keyword% %' THEN 1
				WHEN content_search_" . $lang . " LIKE '%$keyword' THEN 2
			ELSE 3
			END, content_search_" . $lang . "
	";

	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
	
	if($count==0) {
		$search_result = '
			<div class="result-list">
				<p style="color:#3f3f3f !important;">' . $no_result . ' <strong>' . $keyword . '</strong></p>
			</div>
		';
	}
	else {
		$search_result = '';
		while($row=mysqli_fetch_array($result)) {
			// Localize 
			foreach($row as $key=>$value) { 
				${$key} = $value;
			}

			// Build URL
			// Section
			switch($section) {
				case 'datacenter_content':
					$url_section = 'data-center';
					break;

				case 'event_content':
					$url_section = 'event';
					break;

				case 'industry_content':
					$url_section = 'industry';
					break;

				case 'infinitum_content':
					$url_section = 'infinitum';
					break;

				case 'insight_content':
					$url_section = 'insight';
					break;

				case 'news_content':
					$url_section = 'news-entry';
					break;

				case 'service_content':
					$url_section = 'service';
					break;

				case 'stories_content':
					$url_section = 'story';
					break;
			}
			$result_url = $lang . '/' . $url_section . '/' . $semantic_url . '/';

			// Language
			switch($lang) {
				case 'en':
					$page_title = $page_title_en;
					$meta_description = $meta_description_en;
					$character_limit = 350;
					break;

				case 'sc':
					$page_title = $page_title_sc;
					$meta_description = $meta_description_sc;
					$character_limit = 350;
					break;
			}

			$meta_description = (mb_strlen($meta_description, mb_detect_encoding($meta_description)) > $character_limit) ? mb_substr($meta_description,0,$character_limit,mb_detect_encoding($meta_description)) . '...' : $meta_description;

			$search_result .= '
				<div class="result-list">
					<a href="' . $result_url . '">
						<h3>' . $page_title . '</h3>
						<p style="color:#3f3f3f !important;">' . $meta_description . '</p>
					</a>
				</div>
			';
		}
	}

	$og_image = $root_directory . 'img_lib/' . $hero_image;

	$metaTitle = $search_result_title . ': ' . $keyword . ' - ' . $site_name;
	$metaSiteName = $site_name;
	$metadescription = $keyword . ' - ' . $site_name;
	$metaType = 'website';
	$metaUrl = $url;
	$metaImage = $og_image;
	$canonicalUrl = $url;
	$metakeyWords = $keyword;
	include_once ('include/header.php');
?>

	<section id="main-wrapper">
		<div class="search-container">
			<div class="inner-banner bp-rel">
				<div class="in-b-inner bp-rel" data-stellar-ratio="0.5">
					<img class="img-auto" src="phase1/img_lib/<?php echo $hero_image; ?>" width="1440" height="500" alt="" title="">
					<div class="in-title bp-ab text-center anim-content animUp text-center">
						<h1 class="border-none"><?php echo $search_result_title; ?></h1>
						<div class="row mt2">
							<div class="s-result-field col-sm-12 col-md-4 col-md-offset-4">
								<input class="search_query" type="text" name="search" value="<?php echo $keyword; ?>">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="s-result-content pt10 pb10">
				<div class="container-fluid">
					<div class="container">
<!--
						<div class="row filter bp-rel anim-content animUp zx2">
							<div class="col-sm-12 col-md-6 mb1 zx2">
								<select class="selectpicker" title="Filter By Industries">
									<option data-filter-value=".industry1">Industry 1</option>
									<option data-filter-value=".industry2">Industry 2</option>
									<option data-filter-value=".industry3">Industry 3</option>
								</select>
							</div>
							<div class="col-sm-12 col-md-6 mb1 zx1">
								<select class="selectpicker" title="Filter By Solutions">
									<option data-filter-value=".solutions1">Solutions 1</option>
									<option data-filter-value=".solutions2">Solutions 2</option>
									<option data-filter-value=".solutions3">Solutions 3</option>
								</select>
							</div>
						</div>
-->
						
						<div class="result-list-holder anim-content animUp">
							<?php echo $search_result; ?>
						</div>
<!--
						<div class="text-center anim-content animUp">
							<span class="button--bubble__container mt3 green">
								<a href="#" class="button button--bubble pccw-btn green">SHOW MORE RESULTS</a>
								<span class="button--bubble__effect-container">
									<span class="circle top-left"></span>
									<span class="circle top-left"></span>
									<span class="circle top-left"></span>
									<span class="circle bottom-right"></span>
									<span class="circle bottom-right"></span>
									<span class="circle bottom-right"></span>
								</span>
							</span>
						</div>
-->
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include_once ('include/contactus_widget_desktop.php'); ?>
<?php include_once ('include/footer.php'); ?>

<?php
	// Insert into search record
	mysqli_query($conn, "
		INSERT INTO 
			search_record (
				date_added,
				keyword,
				language
			)
			VALUES (
				'$current_time',
				'$keyword',
				'$lang'
			)
	");
?>
