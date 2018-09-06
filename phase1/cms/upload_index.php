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
            <h1>List of uploaded files</h1>
            <div id="divider">&nbsp;</div>
          	<h3 id="profile">Uploaded Files</h3>
            <p>If you need to link to a file in the body text of your content, upload the file here and copy the link to apply to your body text.</p>
            <?php 
				// Table variables
				$db_table = 'cms_upload';
				$input_form_id = '5';
				$reference_column = '';
				$reference_id = '';
				// Bulkremove Variables
				$br_form = '';
				$br_button = '';
				$br_checkbox = '';
			?>
            <a href="form.php?task=add&form_id=<?php echo $input_form_id; ?>&identifier=&reference_id=<?php echo $reference_id; ?>&return_link=<?php echo $url; ?>">
                <div class="button">
                    + Add an item
                </div>
            </a>
            <div id="table_wrap" class="no_scroll">
                <table id="table_dump">
                    <thead>
                        <tr>
                            <th scope="col" class="sort">ID <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Upload Date <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Uploader <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Description <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Absolute Path <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
							<th scope="col" class="sort">Relative Path <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
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
                                ORDER BY
                                    last_modified DESC
                            ");
                            $i = 1;
                            while($row = mysqli_fetch_array($result)) {
								// ID
								$upload_id = $row['id'];
								
								// Upload Date
								$last_modified = $row['last_modified'];
								if($last_modified=='0000-00-00 00:00:00') {
									$last_modified = '';
								}
								else {
									$last_modified = '<!--' . date('U', strtotime($last_modified)) . '-->' . date('F d, Y g:i A', strtotime($last_modified));
								}
								
								// Modified By
								$modifier = $row['modifier'];
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
								
								// Description
								$description = $row['description'];
								
								// Absolute Path
								$new_name = $row['new_name'];
								$absolute_path = '<a href="' . $root_directory . 'file_lib/' . $new_name . '" target="_blank">' . $root_directory . 'file_lib/' . $new_name . '</a>';
								
								// Relative Path
								$new_name = $row['new_name'];
								$relative_path = '<a href="../../phase1/file_lib/' . $new_name . '" target="_blank">phase1/file_lib/' . $new_name . '</a>';
								
								// Row Background
								if($i % 2 == 0) {
									$bkg = 'dark';
								}
								else {
									$bkg = 'light';
								}
								
                                echo '
                                    <tr class="' . $bkg . '">
                                        <td>' . $upload_id . '</td>
                                        <td>' . $last_modified . '</td>
                                        <td>' . $modifier . '</td>
                                        <td>' . $description . '</td>
                                        <td>' . $absolute_path . '</td>
										<td>' . $relative_path . '</td>
                                        <td><a href="' . $root_directory . 'file_lib/' . $new_name . '">Download</a></td>
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