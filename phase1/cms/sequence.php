<?php
	include('include_security.php'); 
	
	$success_heading = 'Got it!';
	$success_message = 'The sequence for the selected item has been updated.';
	$error = FALSE;
	$error_heading = 'Something\'s Wrong...';
	$error_message = 'A problem has occured, please try again. If the problem persists, please contact the administrator.';
	
	// Localize sanitize variables
	foreach($_GET as $key=>$value) { 
		${$key} = strip_tags(mysqli_real_escape_string($conn, $value));
		// identifier, db_table, reference_column, reference_id, action
	}
	
	// Set reference if available
	if($reference_column!='' && $reference_id!='') {
		$reference = 'AND ' . $reference_column . ' = \'' . $reference_id . '\'';
	}
	else {
		$reference = '';
	}
	
	// Validate variables
	if($identifier!='' && $db_table!='' && $action!='') {
		// Check if id exists
		$sql = mysqli_query($conn, "
			SELECT 
				* 
			FROM 
				" . $db_table . "
			WHERE 
				remove='0' AND
				id='$identifier'
		");
		$exist = mysqli_num_rows($sql);
		if($exist==1) {
			// Straighten sequence
			$result = mysqli_query($conn, "
				SELECT
					*
				FROM
					" . $db_table . "
				WHERE
					remove = '0' " . $reference . "
				ORDER BY
					sequence
			");
			$i = 1;
			while($row=mysqli_fetch_array($result)) {
				$current_id = $row['id'];
				$update=mysqli_query($conn, "
					UPDATE 
						" . $db_table . "
					SET 
						sequence = '$i'
					WHERE 
						remove = '0' AND
						id = '$current_id'
				") or die (mysqli_error());
				$i++;
			}
			
			// Get current sequence 
			$sql = mysqli_query($conn, "
				SELECT 
					* 
				FROM 
					" . $db_table . "
				WHERE 
					remove='0' AND
					id='$identifier'
			");
			while($row=mysqli_fetch_array($sql)) {
				$current_sequence = $row['sequence'];
			}
			// Up
			if($action == 'up') {
				// New sequence
				$new_sequence = $current_sequence - 1;
			}
			// Down
			if($action == 'down') {
				// New sequence
				$new_sequence = $current_sequence + 1;
			}
			// Update id with new sequence
			$update_original=mysqli_query($conn, "
				UPDATE 
					" . $db_table . "
				SET 
					sequence='$new_sequence',
					last_modified='$current_time',
					modifier='$user_id'
				WHERE 
					remove='0' AND
					id = '$identifier' " . $reference . "
			") or die (mysqli_error());
			// Update the sequence of the id that was replaced
			$update_replace=mysqli_query($conn, "
				UPDATE 
					" . $db_table . "
				SET 
					sequence='$current_sequence',
					last_modified='$current_time',
					modifier='$user_id'
				WHERE 
					remove='0' AND
					id!='$identifier' AND
					sequence='$new_sequence' " . $reference . "	
			") or die (mysqli_error());
			if(!$update_original || !$update_replace) {
				$error = TRUE;
				goto finish_up;
			}
		}
		else {
			$error_message = 'The item you tried to reorder does not exist.';
			$error = TRUE;
			goto finish_up;
		}
	}
	else {
		$error_message = 'Seems like some data went missing. Please try again.';
		$error = TRUE;
		goto finish_up;
	}
	
	finish_up:
	
	// If back link is not set for whatever reason..
	if($back=='') {
		$back = 'index.php';
	}
	
	// Feedback
	if($$error==FALSE) { // Success
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
?>