<?php 
	include('include_security.php'); 
	
	$success_heading = 'Got it!';
	$success_message = 'The content you entered have been successfully saved.';
	$error = FALSE;
	$error_heading = 'Something\'s Wrong...';
	$error_message = 'A problem has occured, please try again. If the problem persists, please contact the administrator.';
	
	// Localize essential variables first
	foreach($_POST as $key=>$value) { 
		if(!is_numeric($key)) { // not numeric, meaning the essential variables (task, form_id, identifier, reference_id, return_link)
			${strip_tags(mysqli_real_escape_string($conn, $key))} = strip_tags(mysqli_real_escape_string($conn, $value));
		}
	}
	
	if($task=='' || $form_id=='' || $return_link=='') {
		$return_link = 'index.php';
		$error = TRUE;
		$debug = 1;
		goto finish_up;
	}

	// Get the form info
	$result = mysqli_query($conn, "
		SELECT
			*
		FROM
			cms_form
		WHERE
			id='$form_id' AND
			remove='0'
		LIMIT 
			1
	");
	$exist = mysqli_num_rows($result);
	if($exist==1) {
		while($row=mysqli_fetch_array($result)) {
			foreach($row as $key=>$value) { 
				${$key} = $value;
			}
		}
	}
	else {
		$error = TRUE;
		$error_message = 'The form you tried to sumbit does not exist. Please contact the administrator.';
		$debug = 2;
		goto finish_up;
	}
	
	// Check if the current task is allowed
	if($task=='edit' && $task_edit==0) {
		// Edit not allowed
		$error = TRUE;
		$error_message = 'You are not allowed to edit this item.';
		$debug = 3;
		goto finish_up;
	}
	elseif($task=='add' && $task_add==0) {
		// Add not allowed
		$error = TRUE;
		$error_message = 'You are not allowed to add an item.';
		$debug = 4;
		goto finish_up;
	}
	
	// Create row in core table first if task is add and identifier not set
	if($task=='add' && $identifier=='') {
		// Insert row
		$insert = mysqli_query($conn, "
			INSERT INTO 
				" . $core_table . " (
					last_modified,
					modifier
				)
				VALUES (
					'$current_time',
					'$user_id'
				)
		");
		if($insert) {
			$identifier = mysqli_insert_id($conn);
		}
		else {
			$error = TRUE;
			$error_message = 'An error occured when trying to add the item. Please try again.';
			$debug = 5;
			goto finish_up;
		}
	}
	// Update last_modified and modifier if task is edit
	elseif($task=='edit' && $identifier!='') {
		// Update row
		$update = mysqli_query($conn, "
			UPDATE 
				" . $core_table . "
			SET 
				last_modified = '$current_time',
				modifier = '$user_id' 
			WHERE 
				id='$identifier'
		");
		if(!$update) {
			$error = TRUE;
			$debug = 13;
			goto finish_up;
		}
	}
	
	
	// Final check for indentifier
	if(!is_numeric($identifier)) {
		$error = TRUE;
		$debug = 6;
		goto finish_up;
	}
	
	// Set Reference ID if available
	if($task=='add' && $reference_id_column!='') {
		// Reference ID can't be empty
		if($reference_id=='') {
			$error = TRUE;
			$debug = 12;
			goto finish_up;
		}
		// Update row with Reference ID
		$update = mysqli_query($conn, "
			UPDATE
				" . $core_table . "
			SET
				" . $reference_id_column . " = '$reference_id'
			WHERE
				id='$identifier'
		");
		if(!$update) {
			$error = TRUE;
			$debug = 14;
			goto finish_up;
		}
	}
	
	// Update each field into its target cell (uploads not included here...)
	foreach($_POST as $key=>$value) { 
		if(is_numeric($key)) { // numeric keys only (field id)
			$field_id = mysqli_real_escape_string($conn, $key);
			$cell_data = mysqli_real_escape_string($conn, $value);
			
			// Get field info from db
			$result = mysqli_query($conn, "
				SELECT
					*
				FROM
					cms_field
				WHERE
					id = '$field_id' AND
					remove= '0'
			");
			while($row=mysqli_fetch_array($result)) {
				foreach($row as $key=>$value) { 
					${$key} = $value;
				}
			}
			
			// Validate required fields
			if($compulsory==1 && $cell_data=='') {
				$error = TRUE;
				$error_message = 'Please ensure all required fields have been filled in properly and try again.';
				$debug = 7;
				goto finish_up;
			}
			
			// Validate data type
			switch($requirement) {
				case 'email':
					if(!filter_var($cell_data, FILTER_VALIDATE_EMAIL)) {
						$error = TRUE;
						$error_message = 'An email address you entered is invalid. Please ensure the data is entered properly and try again.';
						$debug = 8;
						goto finish_up;
					}
					break;
					
				case 'number':
					if(!is_numeric($cell_data)) {
						$error = TRUE;
						$error_message = 'A number you entered is invalid. Please ensure the data is entered properly and try again.';
						$debug = 9;
						goto finish_up;
					}
					break;
					
				case 'url':
					if(!filter_var($cell_data, FILTER_VALIDATE_URL)) {
						$error = TRUE;
						$error_message = 'A website address (URL) you entered is invalid. Please ensure the data is entered properly and try again.';
						$debug = 10;
						goto finish_up;
					}
					break;
			}
			
			// Enter cell data into target cell
			$update = mysqli_query($conn, "
				UPDATE 
					" . $target_table . "
				SET 
					" . $target_column . " = '$cell_data'
				WHERE 
					id='$identifier'
			");
			if(!$update) {
				$error = TRUE;
				$error_message = 'An error occured when saving the data. Please try again.';
				$debug = 11;
				goto finish_up;
			}
		}
	}
	
	// Check for uploaded files
	if(!empty($_FILES)) {
		foreach($_FILES as $field_id=>$value) {
			$field_id = strip_tags(mysqli_real_escape_string($conn, $field_id));
			
			// Get field info from db
			$result = mysqli_query($conn, "
				SELECT
					*
				FROM
					cms_field
				WHERE
					id = '$field_id' AND
					remove= '0'
			");
			while($row=mysqli_fetch_array($result)) {
				foreach($row as $key=>$value) { 
					${$key} = $value;
				}
			}
			
			// Check if file is really uploaded
			$file_name = '';
			$file_name = strip_tags(mysqli_real_escape_string($conn, $_FILES[$field_id]['name']));
			if($file_name=='') {
				goto skip;
			}
			
			// Get old file name
			$old_name = strtolower(reset((explode('.', $file_name))));
			$old_name = preg_replace('/[^a-zA-Z0-9]+/', '-', $old_name);
			
			// Get file format
			$file_format = strtolower(end((explode('.', $file_name))));
			$file_format = strip_tags(mysqli_real_escape_string($conn, $file_format));
			// $file_format = preg_replace('/[^a-zA-Z0-9]+/', '', $file_format);
			
			// Generate unique random name
			$unique = '';
			while($unique!=1) {
				$new_name = generateRandomString();
				$new_name = $old_name . '_' . $new_name . '.' . $file_format;
				if(!file_exists('../file_lib/' . $new_name) && !file_exists('../img_lib/' . $new_name)){
					$unique = 1;
				}
			}
			
			// set upload directory based on upload type
			switch($type) {
				case 'Upload (File)':
					$upload_dir = 'file_lib';
					break;
					
				case 'Upload (Image)':
					$upload_dir = 'img_lib';
					break;
			}
			
			// Move and rename file
			move_uploaded_file($_FILES[$field_id]['tmp_name'], '../' . $upload_dir . '/' . $new_name);					
			$cell_data = $new_name;
			
			// Enter cell data into target cell
			$update = mysqli_query($conn, "
				UPDATE 
					" . $target_table . "
				SET 
					" . $target_column . " = '$cell_data'
				WHERE 
					id='$identifier'
			");
			if(!$update) {
				$error = TRUE;
				$error_message = 'An error occured when saving the data. Please try again.';
				$debug = 11;
				
				goto finish_up;
			}
			
			skip:
		}
	}
	
	//  Set sequence if needed
	if($task=='add' && $require_sequence==1) {
		// Determine sequence column if needed
		if($reference_id_column!='') {
			// Find reference id based on identifier
			$result = mysqli_query($conn, "
				SELECT
					*
				FROM
					" . $core_table . "
				WHERE
					id = '$identifier'
				LIMIT
					1
			");
			while($row=mysqli_fetch_array($result)) {
				$reference_id = $row[$reference_id_column];
			}
			$reference_id_column = ' AND ' . $reference_id_column . ' = \'' .  $reference_id . '\'';
		}
		
		// Find biggest sequence
		$result = mysqli_query($conn, "
			SELECT
				*
			FROM
				" . $core_table . "
			WHERE
				remove = '0'
				" . $reference_id_column . "
			ORDER BY
				sequence DESC
			LIMIT
				1
		");
		while($row=mysqli_fetch_array($result)) {
			$sequence = $row['sequence'] + 1;
		}
		
		// Update sequence on db
		$update = mysqli_query($conn, "
			UPDATE
				" . $core_table . "
			SET
				sequence = '$sequence'
			WHERE
				id='$identifier'
		");
	}

	finish_up:
	
	$back = $return_link;
	
	// Feedback
	if($error==FALSE) { // Success
		$_SESSION['pccws_feedback'] = TRUE;
		$_SESSION['pccws_feedback_status'] = 'success';
		$_SESSION['pccws_feedback_heading'] = $success_heading;
		$_SESSION['pccws_feedback_message'] = $success_message;
	}
	elseif ($error==TRUE) { // Error
		$_SESSION['pccws_feedback'] = TRUE;
		$_SESSION['pccws_feedback_status'] = 'error';
		$_SESSION['pccws_feedback_heading'] = $error_heading;
		$_SESSION['pccws_feedback_message'] = $error_message;
	}
	
	header('Location: ' . $back);
	// echo $debug .  ' ' . $field_id; 
?>