<?php 
	include('include_security.php'); 
	
	// Localize and sanitize id
	$form_id = strip_tags(mysqli_real_escape_string($conn, $_GET['form_id']));
	$back = strip_tags(mysqli_real_escape_string($conn, $_GET['back']));
	if($back=='') {
		$back = 'form_index.php';
	}
	
	// Table variables
	$db_table = 'cms_form';
	$input_form_id = '3';
	$reference_column = '';
	$reference_id = '';
	
	$result = mysqli_query($conn, "							
		SELECT 
			*
		FROM 
			" . $db_table . "
		WHERE
			remove='0' AND
			id = '$form_id'			
		LIMIT
			1
	");
	$exist = mysqli_num_rows($result);
	if($exist!=1) {
		header('Location: ' . $back);
		exit();
	}
	
	while($row = mysqli_fetch_array($result)) {
		// Localize variables
		foreach($row as $key=>$value) { 
			${$key} = strip_tags($value);
		}

		// ID
		$form_id = $id; 
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

		// Allow Edit
		if($task_edit==1) {
			$task_edit = 'Yes';
		}
		elseif($task_edit==0) {
			$task_edit = 'No';
		}
		
		// Allow Add
		if($task_add==1) {
			$task_add = 'Yes';
		}
		elseif($task_add==0) {
			$task_add = 'No';
		}
		
		// Sequence Required
		if($require_sequence==1) {
			$require_sequence = 'Yes';
		}
		elseif($require_sequence==0) {
			$require_sequence = 'No';
		}
		
		// Default Return Location
		$default_return = '<a href="' . $default_return . '">' . $default_return . '</a>';
		
		// Row Background
		$bkg = 'light';	
	}
?>

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
            <h1>Edit the parameters and fields of "<?php echo $name; ?>" form</h1>
            <div id="divider">&nbsp;</div>
          	<h3>Parameters</h3>
            <p>The settings and parameters of this form.</p>
            <div id="table_wrap">
                <table id="table_dump">
                    <thead>
                        <tr>
                            <th scope="col" class="sort">ID <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Last Modified <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Modified By <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Form Name <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Heading (Edit Item) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Description (Edit Item) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Heading (Add Item) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Description (Add Item) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Core Table <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Allow Edit <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Allow Add <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Reference ID Column <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Sequence Required <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Default Return Location <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Remarks <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
							echo '
								<tr class="' . $bkg . '">
									<td>' . $form_id . '</td>
									<td>' . $last_modified . '</td>
									<td>' . $modifier . '</td>
									<td>' . $name . '</td>
									<td>' . $edit_title . '</td>
									<td>' . $edit_description . '</td>
									<td>' . $add_title . '</td>
									<td>' . $add_description . '</td>
									<td>' . $core_table . '</td>
									<td>' . $task_edit . '</td>
									<td>' . $task_add . '</td>
									<td>' . $reference_id_column . '</td>
									<td>' . $require_sequence . '</td>
									<td>' . $default_return . '</td>
									<td>' . $remark . '</td>
									<td><a href="form.php?task=edit&form_id=' . $input_form_id . '&identifier=' . $identifier . '&reference_id' . $reference_id . '=&return_link=' . $url .'">Edit</a></td>
								</tr>
							';
                        ?>
                  </tbody>
                </table>
            </div>
            
            <div id="divider">&nbsp;</div>
          	<h3 id="navigation_menu">Form Fields</h3>
            <p>The fields available to this form.</p>
            <?php 
				// Table variables
				$db_table = 'cms_field';
				$input_form_id = '4';
				$reference_column = 'form_id';
				$reference_id = $form_id;
				// Bulkremove Variables
				$br_form = 'cmsfield_bulkremove';
				$br_button = 'cmsfield_button';
				$br_checkbox = 'cmsfield_check';
			?>
            <a href="form.php?task=add&form_id=<?php echo $input_form_id; ?>&identifier=&reference_id=<?php echo $reference_id; ?>&return_link=<?php echo $url; ?>">
                <div class="button">
                    + Add an item
                </div>
            </a>
            <a href="javascript:void(0)">
                <div class="button <?php echo $br_button; ?>">
                    Remove Selected
                </div>
            </a>
            <div id="table_wrap">
                <table id="table_dump">
                    <thead>
                        <tr>
                        	<th scope="col"></th>
                            <th scope="col" class="sort">ID <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sequence">Sequence</th>
                            <th scope="col" class="sort">Last Modified <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Modified By <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Form Name <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Input Type <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Field Label <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Value Data <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Instructions <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Compulsory Field <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Special Requirements <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Target Table <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Target Column <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Remarks <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<form class="<?php echo $br_form; ?>" method="post" action="bulkremove.php">
                            <input type="hidden" name="br_target_table" value="<?php echo $db_table; ?>" />
                            <input type="hidden" name="br_return_link" value="<?php echo $url; ?>" />
							<?php
                                $result = mysqli_query($conn, "							
                                    SELECT 
                                        *
                                    FROM 
                                        " . $db_table . "
                                    WHERE
                                        " . $reference_column . " = '$reference_id' AND
										remove = '0'
                                    ORDER BY
                                        sequence
                                ");
                                $i = 1;
                                while($row = mysqli_fetch_array($result)) {
                                    // Localize variables
                                    foreach($row as $key=>$value) { 
                                        ${$key} = strip_tags($value);
                                    }
									
                                    // ID
                                    $field_id = $id;
                                    $identifier = $id;
                                    
                                    // Sequence
                                    $count = mysqli_num_rows($result);
                                    if($i==1) { // First
                                        $sequence_row = '
                                            <i class="fa fa-chevron-circle-up fa-lg greyed_out"></i>
                                            ' . $sequence . '
                                            <a href="sequence.php?identifier=' . $identifier . '&db_table=' . $db_table . '&reference_column=' . $reference_column . '&reference_id=' . $reference_id . '&action=down&back=' . $url . '">
                                                <i class="fa fa-chevron-circle-down fa-lg"></i>
                                            </a>
                                        ';
                                    }
                                    elseif($i==$count) { // Last
                                        $sequence_row = '
                                            <a href="sequence.php?identifier=' . $identifier . '&db_table=' . $db_table . '&reference_column=' . $reference_column . '&reference_id=' . $reference_id . '&action=up&back=' . $url . '">
                                                <i class="fa fa-chevron-circle-up fa-lg"></i>
                                            </a>
                                            ' . $sequence . '
                                            <i class="fa fa-chevron-circle-down fa-lg greyed_out"></i>
                                        ';
                                    }
                                    else {
                                        $sequence_row = '
                                            <a href="sequence.php?identifier=' . $identifier . '&db_table=' . $db_table . '&reference_column=' . $reference_column . '&reference_id=' . $reference_id . '&action=up&back=' . $url . '">
                                                <i class="fa fa-chevron-circle-up fa-lg"></i>
                                            </a>
                                            ' . $sequence . '
                                            <a href="sequence.php?identifier=' . $identifier . '&db_table=' . $db_table . '&reference_column=' . $reference_column . '&reference_id=' . $reference_id . '&action=down&back=' . $url . '">
                                                <i class="fa fa-chevron-circle-down fa-lg"></i>
                                            </a>
                                        ';
                                    }
                                    
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
									
                                    // Form Name
                                    $form_result = mysqli_query($conn, "
                                        SELECT
                                            *
                                        FROM
                                            cms_form
                                        WHERE
                                            id = '$form_id'
                                    ");
                                    while($form_row=mysqli_fetch_array($form_result)) {
                                        $form_name = $form_row['name'];
                                    }
									
									// Compulsory Field
									if($compulsory==1) {
										$compulsory = 'Yes';
									}
									else {
										$compulsory = 'No';
									}

                                    
                                    // Row Background
                                    if($i % 2 == 0) {
                                        $bkg = 'dark';
                                    }
                                    else {
                                        $bkg = 'light';
                                    }
                                    
                                    echo '
                                        <input type="hidden" name="bulk_remove[]" class="check' . $identifier . '" value="" />
                                        <script>
                                            $(document).ready(function(){
                                                $(".' . $br_checkbox . '.' . $identifier . '").click(function() {
                                                    var value' . $identifier . ' = $(".check' . $identifier . '").val();
                                                    if(value' . $identifier . '=="") {
                                                        $(".check' . $identifier . '").val("' . $identifier . '");
                                                    }
                                                    else {
                                                        $(".check' . $identifier . '").val("");
                                                    }
                                                });
                                            });
                                        </script>
                                        <tr class="' . $bkg . '">
                                            <td><input type="checkbox" class="' . $br_checkbox . ' ' . $identifier . '" /></td>
                                            <td>' . $field_id . '</td>
                                            <td class="sequence">' . $sequence_row . '</td>
                                            <td>' . $last_modified . '</td>
                                            <td>' . $modifier . '</td>
                                            <td>' . $form_name . '</td>
                                            <td>' . $type . '</td>
                                            <td>' . $label . '</td>
                                            <td>' . $value_data . '</td>
                                            <td>' . $instruction . '</td>
                                            <td>' . $compulsory . '</td>
                                            <td>' . $requirement . '</td>
                                            <td>' . $target_table . '</td>
                                            <td>' . $target_column . '</td>
                                            <td>' . $remark . '</td>
                                            <td><a href="form.php?task=edit&form_id=' . $input_form_id . '&identifier=' . $identifier . '&reference_id=' . $reference_id . '&return_link=' . $url .'">Edit</a></td>
                                        </tr>
                                    ';
                                    $i++;
                                }
                            ?>
                        </form>
                        <script>
							$(document).ready(function(){
								// Update these 3 variables for each table
								var button = '.<?php echo $br_button; ?>';
								var checkbox = '.<?php echo $br_checkbox; ?>';
								var form = '.<?php echo $br_form;?>';
								
								var checked = checkbox + ':checked';
								
								$(button).hide();
								
								$(checkbox).click(function() {
									if ( $(checked).length > 0) {
										$(button).show();
									} else {
										$(button).hide();
									}
								}); 

								$(button).click(function(){
									var removeConfirm = confirm("Are you sure you want to remove the selected items? This cannot be undone. If you want to hide the items on the website, simply set \"Public\" to \"No\"");
									if (removeConfirm){
										$(form).submit();
									}
								});
							});
						</script>
                  </tbody>
                </table>
            </div>
            
            <div id="divider">&nbsp;</div>
            <a href="<?php echo $back; ?>">
                <div class="button">
                    Back
                </div>
            </a>

        </div>
	</div>
    <?php include('include_sitewidebody.php'); ?>
</body>
</html>