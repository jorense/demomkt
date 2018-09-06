<?php
	include('../include/global_var.php');
	include('../include/connect_to_mysql.php'); 
	
	// Character count for lanugages
	$char_en = 100;
	$char_sc = 50;
	
	// Get current time in HK time zone
	date_default_timezone_set('Asia/Hong_Kong');
	$date = date("Y-m-d H:i:s");
	
	// Get current URL and convert 
	$current_url = "http://" . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
	$url = rawurlencode(strip_tags($current_url));
	
	// Check if log in session exists and not yet expired
	session_start();
	if (isset($_SESSION["pccws_cms_user_id"]) && $_SESSION["pccws_cms_token"] && $_SESSION["pccws_cms_timeout"] && $unix_epoch < $_SESSION["pccws_cms_timeout"]) {
		// Localize variables
		$user_id = $_SESSION["pccws_cms_user_id"];
		$token = $_SESSION["pccws_cms_token"];
		$timeout = $_SESSION["pccws_cms_timeout"];
		// Check if token is still valid
		$sql = mysqli_query($conn, "
			SELECT 
				* 
			FROM 
				cms_token
			WHERE 
				active='1' AND
				user_id='$user_id' AND
				token='$token' AND
				time_out='$timeout'
		");
		$count = mysqli_num_rows($sql);
		if($count==1) { // Token is still active
			$_SESSION["pccws_cms_timeout"] = $cms_time_out;
			// Update new timeout in db
			$update = mysqli_query($conn, "
				UPDATE
					cms_token
				SET
					time_out='$cms_time_out'
				WHERE
					token='$token' AND
					user_id='$user_id'
			");
		}
		else {
			header("location: admin_form.php?url=" . $url); 
			exit();
		}
	}
	else {
		header("location: admin_form.php?url=" . $url); 
		exit();
	}
?>