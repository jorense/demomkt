<?php
	include('include_security.php'); 
	
	$success_heading = 'It\'s been done...';
	$success_message = 'The selected items have been successfully removed.';
	$error = FALSE;
	$error_heading = 'Something\'s Wrong...';
	$error_message = 'A problem has occured, please try again. If the problem persists, please contact the administrator.';
	
	$back = 'account_index.php#accounts';
	
	// Localize variables
	if($_POST['bulk_remove']!='') {
		$bulk_remove = $_POST['bulk_remove'];
		
		// For loop for each checked item
		for($i=0; $i < count($bulk_remove); $i++){
			$remove_id = strip_tags(mysqli_real_escape_string($conn, $bulk_remove[$i]));
			
			// Check if id exists
			$sql = mysqli_query($conn, "
				SELECT 
					* 
				FROM 
					cms_user
				WHERE 
					id='$remove_id' AND
					remove='0'
			");
			$exist = mysqli_num_rows($sql);
			if($exist==1) {
				// Update table to set remove to 1 for id
				$update=mysqli_query($conn, "
					UPDATE 
						cms_user
					SET 
						active='0',
						remove='1'
					WHERE 
						id='$remove_id'
				") or die (mysqli_error());
			}	
			else {
				$error_message = 'An item you tried to remove does not exist.';
				$error = TRUE;
			}
		}
	}
	else {
		$error = TRUE;
		$error_message = 'Seems like some data went missing. Please try again.';
	}
	
	// Feedback
	if($$error==FALSE) { // Success
		$_SESSION['interspace_feedback'] = TRUE;
		$_SESSION['interspace_feedback_status'] = 'success';
		$_SESSION['interspace_feedback_heading'] = $success_heading;
		$_SESSION['interspace_feedback_message'] = $success_message;
		header('Location: ' . $back);
	}
	elseif ($error==TRUE) { // Error
		$_SESSION['interspace_feedback'] = TRUE;
		$_SESSION['interspace_feedback_status'] = 'error';
		$_SESSION['interspace_feedback_heading'] = $error_heading;
		$_SESSION['interspace_feedback_message'] = $error_message;
		header('Location: ' . $back);
	}
?>