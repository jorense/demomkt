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
            <h1>Edit the content for the Contact Us section</h1>
		
            <div id="divider">&nbsp;</div>
            <h3 id="navigation_menu">Contact Us Page</h3>
            <p>The content of the Contact Us page</p>
            <?php 
				// Table variables
				$db_table = 'content_index';
				$input_form_id = '54';
				$reference_column = 'section';
				$reference_id = 'contact_index';
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
							<th scope="col" class="sort">Published (EN) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Published (SC) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Title (EN) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Title (SC) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Description (EN) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Description (SC) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Absolute Path (EN) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Absolute Path (SC) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Relative Path (EN) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Relative Path (SC) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Uploaded Content File (EN) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Uploaded Content File (SC) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Keywords (EN) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Keywords (SC) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Open Graph Type <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col">Open Graph Image (EN)</th>
							<th scope="col">Open Graph Image (SC)</th>
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
								LIMIT 
									1
							");
							$i = 1;
							while($row = mysqli_fetch_array($result)) {
								// Localize variables
								foreach($row as $key=>$value) { 
									${$key} = strip_tags($value);
								}

								// ID
								$contact_index_id = $id;
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
										LIMIT
											1
									");
									while($modifier_row = mysqli_fetch_array($modifier_result)) {
										$modifier = $modifier_row['first_name'] . ' ' . $modifier_row['last_name'];
									}
								}

								// Published (EN)
								if($active_en==1) {
									$active_en = 'Yes';
								}
								else {
									$active_en = 'No';
								}

								// Published (SC)
								if($active_sc==1) {
									$active_sc = 'Yes';
								}
								else {
									$active_sc = 'No';
								}

								// Description (EN)
								$meta_description_en = strip_tags($meta_description_en);
								$meta_description_en = (mb_strlen($meta_description_en, mb_detect_encoding($meta_description_en)) > $char_en) ? mb_substr($meta_description_en,0,$char_en,mb_detect_encoding($meta_description_en)) . '...' : $meta_description_en;

								// Description (SC)
								$meta_description_sc = strip_tags($meta_description_sc);
								$meta_description_sc = (mb_strlen($meta_description_sc, mb_detect_encoding($meta_description_sc)) > $char_sc) ? mb_substr($meta_description_sc,0,$char_sc,mb_detect_encoding($meta_description_sc)) . '...' : $meta_description_sc;

								// Absolute Path (EN)
								if($active_en=='Yes') {
									$ab_semantic_url_en = $real_root_directory . 'en/contact-us/';
									$ab_semantic_url_en = '<a href="' . $ab_semantic_url_en . '" target="_blank">' . $ab_semantic_url_en . '</a>';	
								}
								else {
									$ab_semantic_url_en = '';
								}

								// Absolute Path (SC)
								if($active_sc=='Yes') {
									$ab_semantic_url_sc = $real_root_directory . 'sc/contact-us/';
									$ab_semantic_url_sc = '<a href="' . $ab_semantic_url_sc . '" target="_blank">' . $ab_semantic_url_sc . '</a>';
								}
								else {
									$ab_semantic_url_sc = '';
								}
								
								// Relative Path (EN)
								if($active_en=='Yes') {
									$rel_semantic_url_en = 'en/contact-us/';
									$rel_semantic_url_en = '<a href="../../' . $rel_semantic_url_en . '" target="_blank">' . $rel_semantic_url_en . '</a>';	
								}
								else {
									$rel_semantic_url_en = '';
								}

								// Relative Path (SC)
								if($active_sc=='Yes') {
									$rel_semantic_url_sc = 'sc/contact-us/';
									$rel_semantic_url_sc = '<a href="../../' . $rel_semantic_url_sc . '" target="_blank">' . $rel_semantic_url_sc . '</a>';
								}
								else {
									$rel_semantic_url_en = '';
								}

								// Uploaded Content File (EN)
								$content_file_en = '<a href="../file_lib/' . $content_file_en . '" target="_blank">' . $content_file_en . '</a>';

								// Uploaded Content File (SC)
								$content_file_sc = '<a href="../file_lib/' . $content_file_sc . '" target="_blank">' . $content_file_sc . '</a>';

								// Keywords (EN)
								$meta_keyword_en = strip_tags($meta_keyword_en);
								$meta_keyword_en = (mb_strlen($meta_keyword_en, mb_detect_encoding($meta_keyword_en)) > $char_en) ? mb_substr($meta_keyword_en,0,$char_en,mb_detect_encoding($meta_keyword_en)) . '...' : $meta_keyword_en;

								// Keywords (SC)
								$meta_keyword_sc = strip_tags($meta_keyword_sc);
								$meta_keyword_sc = (mb_strlen($meta_keyword_sc, mb_detect_encoding($meta_keyword_sc)) > $char_sc) ? mb_substr($meta_keyword_sc,0,$char_sc,mb_detect_encoding($meta_keyword_sc)) . '...' : $meta_keyword_sc;

								// Open Graph Image (EN)
								$filename = '../img_lib/' . $og_image_en;
								if($og_image_en=='') {
									$og_image_en = 'None';
								}
								elseif(file_exists($filename)) {
									$og_image_en = '
										<a href="' . $filename . '" target="_blank">
											<img src="../include/imgresize.php?src=' . $filename . '&w=100&zc=0&q=40" />
										</a>
									';
								}
								else {
									$og_image_en = 'None';
								}

								// Open Graph Image (SC)
								$filename = '../img_lib/' . $og_image_sc;
								if($og_image_sc=='') {
									$og_image_sc = 'None';
								}
								elseif(file_exists($filename)) {
									$og_image_sc = '
										<a href="' . $filename . '" target="_blank">
											<img src="../include/imgresize.php?src=' . $filename . '&w=100&zc=0&q=40" />
										</a>
									';
								}
								else {
									$og_image_sc = 'None';
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
										<td>' . $contact_index_id . '</td>
										<td>' . $last_modified . '</td>
										<td>' . $modifier . '</td>
										<td>' . $active_en . '</td>
										<td>' . $active_sc . '</td>
										<td>' . $page_title_en . '</td>
										<td>' . $page_title_sc . '</td>
										<td>' . $meta_description_en . '</td>
										<td>' . $meta_description_sc . '</td>
										<td>' . $ab_semantic_url_en . '</td>
										<td>' . $ab_semantic_url_sc . '</td>
										<td>' . $rel_semantic_url_en . '</td>
										<td>' . $rel_semantic_url_sc . '</td>
										<td>' . $content_file_en . '</td>
										<td>' . $content_file_sc . '</td>
										<td>' . $meta_keyword_en . '</td>
										<td>' . $meta_keyword_sc . '</td>
										<td>' . $og_type . '</td>
										<td>' . $og_image_en . '</td>
										<td>' . $og_image_sc . '</td>
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
            <h3 id="navigation_menu">Received Messages</h3>
            <p>The messages we have received through the contact form.</p>
            <?php 
				// Table variables
				$db_table = 'contact_record';
				$input_form_id = '';
				$reference_column = '';
				$reference_id = '';
				// Bulkremove Variables
				$br_form = '';
				$br_button = '';
				$br_checkbox = '';
			?>
            <a href="contact_download.php?range=1" target="download">
                <div class="button">
                    Download .xls (Past 1 Day)
                </div>
            </a>
            <a href="contact_download.php?range=7" target="download">
                <div class="button">
                    Download .xls (Past 7 Days)
                </div>
            </a>
            <a href="contact_download.php?range=30" target="download">
                <div class="button">
                    Download .xls (Past 30 Days)
                </div>
            </a>
            <a href="contact_download.php?range=all" target="download">
                <div class="button">
                    Download .xls (All)
                </div>
            </a>
            <div id="table_wrap">
                <table id="table_dump">
                    <thead>
                        <tr>
                            <th scope="col" class="sort">ID <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Date Received <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Name <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Title <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Company <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Email <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Telephone <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Message <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Agreement (Step 1) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Industry <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Where sender learnt about company <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Agreement (Step 2) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Referral URL <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Source <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
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
									date_sent DESC
							");
							$i = 1;
							while($row = mysqli_fetch_array($result)) {
								// Localize variables
								foreach($row as $key=>$value) { 
									${$key} = strip_tags($value);
								}

								// ID
								$message_id = $id;
								$identifier = $id;

								// Last Modified
								if($date_sent=='0000-00-00 00:00:00') {
									$date_sent = '';
								}
								else {
									$date_sent = '<!--' . date('U', strtotime($date_sent)) . '-->' . date('F d, Y g:i A', strtotime($date_sent));
								}
								
								// Email
								if($email != '') {
									$email = '<a href="mailto:' . $email . '">' . $email . '</a>';
								}
								
								// Referral URL
								if($referer != '') {
									$referer = '<a href="' . $referer . '" target="_blank">' . $referer . '</a>';
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
										<td>' . $message_id . '</td>
										<td>' . $date_sent . '</td>
										<td>' . $name . '</td>
										<td>' . $title . '</td>
										<td>' . $company . '</td>
										<td>' . $email . '</td>
										<td>' . $telephone . '</td>
										<td>' . $message . '</td>
										<td>' . $agree1 . '</td>
										<td>' . $industry . '</td>
										<td>' . $hear_about . '</td>
										<td>' . $agree2 . '</td>
										<td>' . $referer . '</td>
										<td>' . $source . '</td>
									</tr>
								';
								$i++;
							}
						?>
                  </tbody>
                </table>
            </div>
		
            <div id="divider">&nbsp;</div>
            <h3 id="navigation_menu">Contact Us Widgets</h3>
            <p>The content file that will be used for contact us widgets.</p>
            <?php 
				// Table variables
				$db_table = 'miscellaneous';
				$input_form_id = '58';
				$reference_column = 'cms_group';
				$reference_id = 'contact interface';
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
								$copy_en = '<a href="../file_lib/' . $copy_en . '" target="_blank">' . $copy_en . '</a>';

								// Simplified Chinese
								$copy_sc = '<a href="../file_lib/' . $copy_sc . '" target="_blank">' . $copy_sc . '</a>';

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
            <h3 id="navigation_menu">Contact Us Message Recipient</h3>
            <p>The email address that the messages from the contact us forms will be sent to.</p>
            <?php 
				// Table variables
				$db_table = 'miscellaneous';
				$input_form_id = '56';
				$reference_column = 'cms_group';
				$reference_id = 'contact recipient';
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
								$copy_en = '<a href="../file_lib/' . $copy_en . '" target="_blank">' . $copy_en . '</a>';

								// Simplified Chinese
								$copy_sc = '<a href="../file_lib/' . $copy_sc . '" target="_blank">' . $copy_sc . '</a>';

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