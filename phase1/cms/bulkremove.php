<?php
	include('include_security.php'); 
	
	$success_heading = 'It\'s been done...';
	$success_message = 'The selected items have been successfully removed.';
	$error = FALSE;
	$error_heading = 'Something\'s Wrong...';
	$error_message = 'A problem has occured, please try again. If the problem persists, please contact the administrator.';
	
	// Localize variables
	if($_POST['bulk_remove']!='') {
		$br_target_table = strip_tags(mysqli_real_escape_string($conn, $_POST['br_target_table']));
		$back = urldecode(strip_tags(mysqli_real_escape_string($conn, $_POST['br_return_link'])));
		$bulk_remove = $_POST['bulk_remove'];

		// For loop for each checked item
		for($i=0; $i < count($bulk_remove); $i++){
			$remove_id = strip_tags(mysqli_real_escape_string($conn, $bulk_remove[$i]));
			if($remove_id!='') {
				// Check if id exists
				$sql = mysqli_query($conn, "
					SELECT 
						* 
					FROM 
						" . $br_target_table . "
					WHERE 
						id='$remove_id' AND
						remove='0'
				");
				$exist = mysqli_num_rows($sql);
				if($exist==1) {
					// Update table to set remove to 1 for id
					$update=mysqli_query($conn, "
						UPDATE 
							" . $br_target_table . "
						SET 
							remove='1'
						WHERE 
							id='$remove_id'
					") or die (mysqli_error());
					if(!$update) {
						$error_message = 'An item could not be removed.';
						$error = TRUE;
						goto finish_up;
					}
				}	
				else {
					$error_message = 'An item you tried to remove does not exist.';
					$error = TRUE;
					goto finish_up;
				}
			}
		}
	}
	else {
		$error_message = 'Seems like some data went missing. Please try again.';
		$error = TRUE;
		goto finish_up;
	}
	
	finish_up:
	
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