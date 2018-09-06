<?php include('include_security.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>    
    <?php include('include_sitewidehead.php'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $cms_title; ?></title>
</head>

<body>
	<div id="wrap">
	    <?php include('include_menu.php'); ?>
        --><div id="content_wrap">
            <h1>Edit the content for the Search section</h1>
		
            <div id="divider">&nbsp;</div>
            <h3 id="navigation_menu">Search Query Record</h3>
            <p>The keywords that were entered into the search field.</p>
            <?php 
				// Table variables
				$db_table = 'search_record';
				$input_form_id = '';
				$reference_column = '';
				$reference_id = '';
				// Bulkremove Variables
				$br_form = '';
				$br_button = '';
				$br_checkbox = '';
			?>
            <div id="table_wrap">
                <table id="table_dump">
                    <thead>
                        <tr>
                            <th scope="col" class="sort">ID <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Date Added <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Keyword <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Language <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$result = mysqli_query($conn, "							
								SELECT 
									*
								FROM 
									" . $db_table . "
								ORDER BY
									date_added DESC
							");
							$i = 1;
							while($row = mysqli_fetch_array($result)) {
								// Localize variables
								foreach($row as $key=>$value) { 
									${$key} = strip_tags($value);
								}

								// ID
								$search_id = $id;
								$identifier = $id;

								// Last Modified
								if($date_added=='0000-00-00 00:00:00') {
									$date_added = '';
								}
								else {
									$date_added = '<!--' . date('U', strtotime($date_added)) . '-->' . date('F d, Y g:i A', strtotime($date_added));
								}

								// Published (EN)
								if($language=="en") {
									$language = 'English';
								}
								else {
									$language = 'Simplified Chinese';
								}

								// Row Background
								if($i % 2 == 0) {
									$bkg = 'dark';
								}
								else {
									$bkg = 'light';
								}

								echo '
									<tr class="' . $bkg . '">
										<td>' . $search_id . '</td>
										<td>' . $date_added . '</td>
										<td>' . $keyword . '</td>
										<td>' . $language . '</td>
									</tr>
								';
								$i++;
							}
						?>
                  </tbody>
                </table>
            </div>
		
            <div id="divider">&nbsp;</div>
            <h3 id="navigation_menu">Search General Text</h3>
            <p>The general text that appear on the search results page.</p>
            <?php 
				// Table variables
				$db_table = 'miscellaneous';
				$input_form_id = '56';
				$reference_column = 'cms_group';
				$reference_id = 'search_result_text';
				// Bulkremove Variables
				$br_form = '';
				$br_button = '';
				$br_checkbox = '';
			?>
            <div id="table_wrap">
                <table id="table_dump">
                    <thead>
                        <tr>
                            <th scope="col" class="sort">ID <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Last Modified <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Modified By <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">English <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Simplified Chinese <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Remarks <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$result = mysqli_query($conn, "							
								SELECT 
									*
								FROM 
									" . $db_table . "
								WHERE
									remove = '0' AND
									" . $reference_column . " = '$reference_id'
							");
							$i = 1;
							while($row = mysqli_fetch_array($result)) {
								// Localize variables
								foreach($row as $key=>$value) { 
									${$key} = strip_tags($value);
								}

								// ID
								$miscellaneous_copy_id = $id;
								$identifier = $id;

								// Last Modified
								if($last_modified=='0000-00-00 00:00:00') {
									$last_modified = '';
								}
								else {
									$last_modified = '<!--' . date('U', strtotime($last_modified)) . '-->' . date('F d, Y g:i A', strtotime($last_modified));
								}

								// Modified By
								if($modifier==0) {
									$modifier = '';
								}
								else {
									$modifier_result = mysqli_query($conn, "
										SELECT
											*
										FROM
											cms_user
										WHERE
											id='$modifier'
									");
									while($modifier_row = mysqli_fetch_array($modifier_result)) {
										$modifier = $modifier_row['first_name'] . ' ' . $modifier_row['last_name'];
									}
								}

								// English
								$copy_en = strip_tags($copy_en);

								// Simplified Chinese
								$copy_sc = strip_tags($copy_sc);

								// Remarks 
								$remark = strip_tags($remark);

								// Row Background
								if($i % 2 == 0) {
									$bkg = 'dark';
								}
								else {
									$bkg = 'light';
								}

								echo '
									<tr class="' . $bkg . '">
										<td>' . $miscellaneous_copy_id . '</td>
										<td>' . $last_modified . '</td>
										<td>' . $modifier . '</td>
										<td>' . $copy_en . '</td>
										<td>' . $copy_sc . '</td>
										<td>' . $remark . '</td>
										<td><a href="form.php?task=edit&form_id=' . $input_form_id . '&identifier=' . $identifier . '&reference_id=' . $reference_id . '&return_link=' . $url .'">Edit</a></td>
									</tr>
								';
								$i++;
							}
						?>
                  </tbody>
                </table>
            </div>
		
            <div id="divider">&nbsp;</div>
            <h3 id="navigation_menu">Search General Images</h3>
            <p>The general images that appear on the search results page.</p>
            <?php 
				// Table variables
				$db_table = 'miscellaneous';
				$input_form_id = '57';
				$reference_column = 'cms_group';
				$reference_id = 'search_result_img';
				// Bulkremove Variables
				$br_form = '';
				$br_button = '';
				$br_checkbox = '';
			?>
            <div id="table_wrap">
                <table id="table_dump">
                    <thead>
                        <tr>
                            <th scope="col" class="sort">ID <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Last Modified <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Modified By <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col">English</th>
							<th scope="col">Simplified Chinese</th>
							<th scope="col" class="sort">Remarks <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$result = mysqli_query($conn, "							
								SELECT 
									*
								FROM 
									" . $db_table . "
								WHERE
									remove = '0' AND
									" . $reference_column . " = '$reference_id'
							");
							$i = 1;
							while($row = mysqli_fetch_array($result)) {
								// Localize variables
								foreach($row as $key=>$value) { 
									${$key} = strip_tags($value);
								}

								// ID
								$miscellaneous_copy_id = $id;
								$identifier = $id;

								// Last Modified
								if($last_modified=='0000-00-00 00:00:00') {
									$last_modified = '';
								}
								else {
									$last_modified = '<!--' . date('U', strtotime($last_modified)) . '-->' . date('F d, Y g:i A', strtotime($last_modified));
								}

								// Modified By
								if($modifier==0) {
									$modifier = '';
								}
								else {
									$modifier_result = mysqli_query($conn, "
										SELECT
											*
										FROM
											cms_user
										WHERE
											id='$modifier'
									");
									while($modifier_row = mysqli_fetch_array($modifier_result)) {
										$modifier = $modifier_row['first_name'] . ' ' . $modifier_row['last_name'];
									}
								}

								// English
								$filename = '../img_lib/' . $copy_en;
								if($copy_en=='') {
									$copy_en = 'None';
								}
								elseif(file_exists($filename)) {
									$copy_en = '
										<a href="' . $filename . '" target="_blank">
											<img src="../include/imgresize.php?src=' . $filename . '&w=100&zc=0&q=40" />
										</a>
									';
								}
								else {
									$copy_en = 'None';
								}

								// Simplified Chinese
								$filename = '../img_lib/' . $copy_sc;
								if($copy_sc=='') {
									$copy_sc = 'None';
								}
								elseif(file_exists($filename)) {
									$copy_sc = '
										<a href="' . $filename . '" target="_blank">
											<img src="../include/imgresize.php?src=' . $filename . '&w=100&zc=0&q=40" />
										</a>
									';
								}
								else {
									$copy_sc = 'None';
								}

								// Remarks 
								$remark = strip_tags($remark);

								// Row Background
								if($i % 2 == 0) {
									$bkg = 'dark';
								}
								else {
									$bkg = 'light';
								}

								echo '
									<tr class="' . $bkg . '">
										<td>' . $miscellaneous_copy_id . '</td>
										<td>' . $last_modified . '</td>
										<td>' . $modifier . '</td>
										<td>' . $copy_en . '</td>
										<td>' . $copy_sc . '</td>
										<td>' . $remark . '</td>
										<td><a href="form.php?task=edit&form_id=' . $input_form_id . '&identifier=' . $identifier . '&reference_id=' . $reference_id . '&return_link=' . $url .'">Edit</a></td>
									</tr>
								';
								$i++;
							}
						?>
                  </tbody>
                </table>
            </div>
            

        </div>
	</div>
    <?php include('include_sitewidebody.php'); ?>
</body>
</html>