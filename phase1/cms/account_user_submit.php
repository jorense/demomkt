<?php 
	include('include_security.php'); 
	
	$success_heading = 'Got it!';
	$success_message = 'The content you entered have been successfully saved.';
	$error = FALSE;
	$error_heading = 'Something\'s Wrong...';
	$error_message = 'A problem has occured, please try again. If the problem persists, please contact the administrator.';
	
	$back = 'account_index.php#accounts';
	
	// Check if task is posted
	if(isset($_POST['task'])) {
		$task = $_POST['task'];
		// If task is edit
		if($task == 'edit') {
			//Check if id is posted
			if(isset($_POST['account_id'])) {
				// Santize id
				$account_id = preg_replace('#[^0-9]#i','',$_POST['account_id']);
				$account_id = mysqli_real_escape_string($conn, $account_id);
				$sql = mysqli_query($conn, "
					SELECT 
						* 
					FROM 
						cms_user
					WHERE 
						id='$account_id' AND
						remove='0'
				");
				$exist = mysqli_num_rows($sql);
				// Check if id exists
				if($exist == 1) {
					// Sanitize and localize posted variables
					$active = strip_tags(mysqli_real_escape_string($conn, $_POST['active']));
					$first_name = ucfirst(strip_tags(mysqli_real_escape_string($conn, $_POST['first_name'])));
					$last_name = ucfirst(strip_tags(mysqli_real_escape_string($conn, $_POST['last_name'])));
					$email = strip_tags(mysqli_real_escape_string($conn, $_POST['email']));
					$god = strip_tags(mysqli_real_escape_string($conn, $_POST['god']));
					// Validate required variables
					if(filter_var($email, FILTER_VALIDATE_EMAIL) && $first_name!='' && $last_name!='' && $god!='' && $active!='') {
						// Update in DB
						$update=mysqli_query($conn, "
							UPDATE 
								cms_user
							SET 
								active='$active', 
								first_name='$first_name', 
								last_name='$last_name', 
								user_name='$email', 
								god='$god'
							WHERE 
								id='$account_id'
						") or die (mysqli_error());
					}
					else {
						$error_message = 'Please ensure that all required fields have been filled in and try again.';
						$error = TRUE;
					}
				}
				else {
					$error_message = 'The item you are trying to edit does not exist.';
					$error = TRUE;
				}
			}
			else {
				$error = TRUE;
			}
		}
		elseif($task =='add') {
			// Sanitize and localize posted variables
			$active = strip_tags(mysqli_real_escape_string($conn, $_POST['active']));
			$first_name = ucfirst(strip_tags(mysqli_real_escape_string($conn, $_POST['first_name'])));
			$last_name = ucfirst(strip_tags(mysqli_real_escape_string($conn, $_POST['last_name'])));
			$email = strip_tags(mysqli_real_escape_string($conn, $_POST['email']));
			$god = strip_tags(mysqli_real_escape_string($conn, $_POST['god']));
			
			// Validate variables
			if(filter_var($email, FILTER_VALIDATE_EMAIL) && $first_name!='' && $last_name!='' && $god!='' && $active!='') {
				// Check if email exists
				$result = mysqli_query($conn, "
					SELECT
						*
					FROM
						cms_user
					WHERE
						remove='1' AND
						user_name='$email'
					LIMIT
						1
				");
				$count = mysqli_num_rows($result);
				if($count==0) {
					// Create new password
					$password = generateRandomString();
					
					// Salt & Hash Password
					$options = [
						'cost' => 11,
					];
					$password_encrypt = password_hash($password, PASSWORD_BCRYPT, $options);
					
					// Insert into DB
					$insert=mysqli_query($conn, "
						INSERT INTO 
							cms_user (
								active,
								date_created,
								first_name,
								last_name,
								user_name,
								password_encrypt,
								god
							)
						VALUES (
							'$active',
							'$current_time',
							'$first_name',
							'$last_name',
							'$email',
							'$password_encrypt',
							'$god'
						)
					") or die (mysqli_error());
					$account_id = mysqli_insert_id($conn);
					if($insert) {
						//Set Recipient
						$recipient_name = $first_name . ' ' . $last_name;
						$recipient_email = $email;
						
						// Set Email Content
						$subject = 'PCCW Solutions CMS Account Information';
						$message = '
							Hi ' . $first_name . ',<br><br>
							Your account for accessing the PCCW Solutions Website CMS is ready. Please accesss the link below to log in and change your password:<br>
							<a href="' . $root_directory . 'cms/account_changepassword.php?account_id=' . $account_id . '" target="_blank">' . $root_directory . 'cms/account_changepassword.php?account_id=' . $account_id . '</a><br><br>
							Email: ' . $email . '<br>
							Password: ' . $password . '
						';
						
						include('../include/PHPMailer/run_mail.php');
						/*
						// Send email
						$sender = 'Website CMS (PCCW Solutions)' . '<system@pccw-solutions.com>';
						$headers = "From:" . $sender . "\r\n";
						$headers .= "Content-type: text/html\r\n";
				
						$mail_result = mail($email,$subject,$message,$headers);
						*/
						if($mail_sent == FALSE) {
							$error_message = 'The password email could not be sent but the account was successfully created. You may have to reset the password for this account or create the account again.' . $password;
							$error = TRUE;
						}
					}
					else {
						$error = TRUE;
					}
				}
				else {
					$error_message = 'An account already exists with the entered email address. Please use a different email address. The user was not created.';
					$error = TRUE;
				}
			}
			else {
				$error_message = 'Please ensure that all required fields have been properly filled in. The user was not created.';
				$error = TRUE;
			}
		}
		elseif($task =='change_password') {
			// Sanitize and localize posted variables
			$account_id = strip_tags(mysqli_real_escape_string($conn, $_POST['account_id']));
			$old_password = strip_tags(mysqli_real_escape_string($conn, $_POST['old_password']));
			$new_password = strip_tags(mysqli_real_escape_string($conn, $_POST['new_password']));
			$confirm_password = strip_tags(mysqli_real_escape_string($conn, $_POST['confirm_password']));
			
			// Check if user exists
			$result = mysqli_query($conn, "
				SELECT
					*
				FROM
					cms_user
				WHERE
					id='$account_id' AND
					remove='0'
				LIMIT
					1
			");
			$exist = mysqli_num_rows($result);
			// Get encrypted password
			while($row=mysqli_fetch_array($result)) {
				$db_password = $row['password_encrypt'];
			}
			if($exist==1) {
				// Validate variables
				if($account_id!='' && $old_password!='' && $new_password!='' && $confirm_password!='' && $new_password==$confirm_password) {
					// Check password 
					if(password_verify($old_password, $db_password)) {
						// Salt & Hash Password
						$options = [
							'cost' => 11,
						];
						$password_encrypt = password_hash($new_password, PASSWORD_BCRYPT, $options);
						// Update DB
						$update=mysqli_query($conn, "
							UPDATE 
								cms_user
							SET 
								password_encrypt='$password_encrypt'
							WHERE 
								id='$account_id'
						") or die (mysqli_error());
					}
					else {
						$error_message = 'The old password you entered is incorrect. Your password was not changed.';
						$error = TRUE;
					}
				}
				else {
					$error_message = 'Please ensure that all required fields have been properly filled in.';
					$error = TRUE;
				}
			}
			else {
				$error_message = 'The user doesn\'t exist.';
				$error = TRUE;
			}
		}
	}
	elseif($_GET['task']=='reset_password') {
		// Sanitize and localize posted variables
		$account_id = strip_tags(mysqli_real_escape_string($conn, $_GET['account_id']));
		// Check user god status
		$result = mysqli_query($conn, "
			SELECT	
				*
			FROM
				cms_user
			WHERE
				id='$user_id' AND
				god='1'
		");
		$god_count = mysqli_num_rows($result);
		
		// Check if user owns this account or is god
		if($god_count==1) {
			// Check if user exists
			$result = mysqli_query($conn, "
				SELECT
					*
				FROM
					cms_user
				WHERE
					id='$account_id' AND
					remove='0'
				LIMIT
					1
			");
			$exist = mysqli_num_rows($result);
			// Get encrypted password
			while($row=mysqli_fetch_array($result)) {
				$first_name = $row['first_name'];
				$last_name = $row['last_name'];
				$email = $row['user_name'];
			}
			if($exist==1) {
				// Create new password
				$password = generateRandomString();
				
				// Salt & Hash Password
				$options = [
					'cost' => 11,
				];
				$password_encrypt = password_hash($password, PASSWORD_BCRYPT, $options);
				// Update DB
				$update=mysqli_query($conn, "
					UPDATE 
						cms_user
					SET 
						password_encrypt='$password_encrypt'
					WHERE 
						id='$account_id'
				") or die (mysqli_error());
				if($update) {
					//Set Recipient
					$recipient_name = $first_name . ' ' . $last_name;
					$recipient_email = $email;
					
					// Set Email Content
					$subject = 'PCCW Solutions CMS Password Reset';
					$message = '
						Hi ' . $first_name . ',<br><br>
						Your password for accessing the PCCW Solutions Website CMS has just been reset. Please accesss the link below to log in and change your password:<br>
						<a href="' . $root_directory . 'cms/account_changepassword.php?account_id=' . $account_id . '" target="_blank">' . $root_directory . 'cms/account_changepassword.php?account_id=' . $account_id . '</a><br><br>
						Email: ' . $email . '<br>
						New Password: ' . $password . '
					';
					
					include('../include/PHPMailer/run_mail.php');
					// Send email
					/*
					$sender = 'Website CMS (PCCW Solutions)' . '<system@pccw-solutions.com>';
					$headers = "From:" . $sender . "\r\n";
					$headers .= "Content-type: text/html\r\n";
			
					$mail_result = mail($email,$subject,$message,$headers);
					*/
					if($mail_sent == FALSE) {
						$error_message = 'The password email could not be sent but the account was successfully created. You may have to reset the password for this account or create the account again. ' . $password;
						$error = TRUE;
					}
				}
			}
			else {
				$error_message = 'The user doesn\'t exist.';
				$error = TRUE;
			}
		}
		else {
			header('Location: account_index.php');
			exit();
		}
	}
	else {
		$error = TRUE;
	}
	
	// Feedback
	if($error==FALSE) { // Success
		$_SESSION['pccws_feedback'] = TRUE;
		$_SESSION['pccws_feedback_status'] = 'success';
		$_SESSION['pccws_feedback_heading'] = $success_heading;
		$_SESSION['pccws_feedback_message'] = $success_message;
		header('Location: ' . $back);
	}
	elseif ($error==TRUE) { // Error
		$_SESSION['pccws_feedback'] = TRUE;
		$_SESSION['pccws_feedback_status'] = 'error';
		$_SESSION['pccws_feedback_heading'] = $error_heading;
		$_SESSION['pccws_feedback_message'] = $error_message;
		header('Location: ' . $back);
	}
?>