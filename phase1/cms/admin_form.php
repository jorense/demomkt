<?php 
	include('../include/global_var.php');
	include('../include/connect_to_mysql.php'); 
	
	// Get current time in HK time zone
	date_default_timezone_set('Asia/Hong_Kong');
	$date = date("Y-m-d H:i:s");
	
	// Check if log in session exists
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
			if(isset($_GET['url'])) {
				$url = $_GET['url'];
				header("location: " . $url); 
				exit();
			}
			else {
				header("location: index.php"); 
				exit();
			}
		}
	}
	
	// Check if post variables exists
	if (isset($_POST["user_name"]) && isset($_POST["password"])) {
		// Sanitize and localize post variables
		$user_name = strip_tags(mysqli_real_escape_string($conn, $_POST["user_name"]));
	    $submitted_password = strip_tags(mysqli_real_escape_string($conn, $_POST["password"]));
		// Check db to see if log in info is correct
		$sql = mysqli_query($conn,  "
			SELECT 
				* 
			FROM 
				cms_user
			WHERE 
				active='1' AND
				remove='0' AND
				user_name='$user_name'
			LIMIT
				1
		");
		$user_exist = mysqli_num_rows($sql);
		if($user_exist==1) {
			// User exists, retrieve info from db
			while($row = mysqli_fetch_array($sql)){ 
				$encrypted_password = $row["password_encrypt"];
				$user_id = $row['id'];
			}
			// Verify password
			if(password_verify($submitted_password, $encrypted_password)) {
				$exist = 1;
				// Make new cookie entry
				while($exist==1) {
					// Generate random token
					$token = generateRandomString();
					// Check token is unique
					$result = mysqli_query($conn, "
						SELECT
							*
						FROM
							cms_token
						WHERE
							active='1' AND
							token='$token'
						LIMIT
							1
					");
					$exist = mysqli_num_rows($result);
					if($exist==0) {
						// Insert into db
						$insert = mysqli_query($conn, "
							INSERT INTO
								cms_token (
									date_created,
									user_id,
									token,
									time_out
								)
							VALUES (
								'$current_time',
								'$user_id',
								'$token',
								'$cms_time_out'
							)
						") or die (mysqli_error());
					}
				}
			}
			$_SESSION["pccws_cms_user_id"] = $user_id;
			$_SESSION["pccws_cms_token"] = $token;
			$_SESSION["pccws_cms_timeout"] = $cms_time_out;
			// Redirect to index or the previous page
			if(isset($_POST['url'])) {
				$url = $_POST['url'];
				header("location: " . $url); 
				exit();
			}
			else {
				header("location: index.php"); 
				exit();
			}
		}
		else {
			// Wrong log in, display error
			$error = '<p>The user name and password you entered does not match. Please ensure the the information is entered correctly and try again.</p>';
		}
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
			<h1>Admin Login</h1>
            <p>Enter your email and password to login and manage the content on the website.</p>
            <?php echo $error; ?>
            <form method="post" enctype="multipart/form-data" action="admin_form.php" data-parsley-validate>
                <input type="hidden" name="url" value="<?php echo $_GET['url']; ?>" />
            	<div id="field_wrap">
                	<div id="label">
                    	Email: 
                    </div><!--
                	--><div id="field">
                    	<input class="form_field" type="text" name="user_name" value="" required />
                    </div><!--
                	--><div id="help">
                    	&nbsp;
                    </div>
                </div>
            	<div id="field_wrap">
                	<div id="label">
                    	Password: 
                    </div><!--
                	--><div id="field">
                    	<input class="form_field" type="password" name="password" value="" required />
                    </div><!--
                	--><div id="help">
                    	&nbsp; 
                    </div>
                </div>
            	<div id="field_wrap">
                	<div id="label">
                    	&nbsp; 
                    </div><!--
                	--><div id="field">
                    	<input class="button" type="submit" value="Log In">
                    </div><!--
                	--><div id="help">
                    	&nbsp;
                    </div>
                </div>
            </form>
        </div>
	</div>
    <?php include('include_sitewidebody.php'); ?>
</body>
</html>