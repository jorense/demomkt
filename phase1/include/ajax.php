<?php
	$ajax = TRUE;
	$custom_connect = TRUE;
	include('global_var.php');
	include('connect_to_mysql.php');

	// Localize variables
	foreach($_POST as $key=>$value) { 
		${$key} = strip_tags($value);
	}
	
	switch($task) {
		case "event_rsvp":
			// Insert RSVP info into DB
			$insert = mysqli_query($conn, "
				INSERT INTO 
					event_rsvp (
						date_added,
						campaign_code,
						source,
						name,
						title,
						company,
						email,
						telephone,
						agree
					)
					VALUES (
						'$current_time',
						'$campaign_code',
						'$source',
						'$name',
						'$title',
						'$company',
						'$email',
						'$telephone',
						'$agree'
					)
			");
			if($insert) {
				echo "Success!";
			}
			else {
				echo "Fail";
			}
			break;
		
		case "contact_step_1":
			// Insert Contact Request into DB
			$insert = mysqli_query($conn, "
				INSERT INTO 
					contact_record (
						date_sent,
						name,
						title,
						company,
						email,
						telephone,
						message,
						agree1,
						referer,
						source
					)
					VALUES (
						'$current_time',
						'$name',
						'$title',
						'$company',
						'$email',
						'$telephone',
						'$message',
						'$agree1',
						'$referer',
						'$source'
					)
			");
			if($insert) {
				$new_id = mysqli_insert_id($conn);
				
				// Actually send the email
				
				//Set Recipient
				// Miscellaneous
				$sql = "
					SELECT
						*
					FROM
						miscellaneous
					WHERE
						id IN(9)
				";
				$result = mysqli_query($conn, $sql);
				while($row=mysqli_fetch_array($result)) {
					// Localize 
					foreach($row as $key=>$value) { 
						${$key} = $value;
					}
					$copy = str_replace(["\r\n","\r","\n"], "", $row['copy_' . $lang]);

					switch($id) {
						case '9':
							$contact_recipient = strip_tags($copy);
							break;
					}
				}
				$recipient_name = 'PCCW Solutions Representative';
				$recipient_email = $contact_recipient;

				// Set Email Content
				$subject = 'General Enquiry (Website Contact Form)';
				$message = '
					Hi,<br>
					<br>
					Great news! We received a new message from ' . $name . ' through the contact form on the company website. Here\'s what the message says:<br>
					<br>
					<i>' . $message . '</i><br>
					<br>
					<br>
					Here\'s the sender\'s contact info if you want to send a reply:<br>
					<br>
					' . $name . '<br>
					' . $title . '<br>
					' . $company . '<br>
					<a href="mailto:' . $email . '">' . $email . '</a><br>
					' . $telephone . '<br>
				';

				include('PHPMailer/run_mail.php');
				
				echo $new_id;
			}
			break;
		case "contact_step_2":
			$hear_about = strip_tags(implode(", ", $_POST['hear_about']));
			
			// Update additional info into db
			$update = mysqli_query($conn, "
				UPDATE 
					contact_record
				SET 
					industry='$industry', 
					hear_about='$hear_about', 
					agree2='$agree2'
				WHERE 
					id='$prev_id'
			") or die (mysqli_error());
			
			break;
	}
?>