<?php 
	include('include_security.php');  
	
	// Deactivate token
	$token = $_SESSION["pccws_cms_token"];
	
	$update = mysqli_query($conn, "
		UPDATE
			cms_token
		SET
			active='0'
		WHERE
			token='$token' AND
			user_id='$user_id'
	");
	
	// Destroy session
	session_destroy(); 
	
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
			<h1>Log Out Successful</h1>
            <p>You have been logged out of the content management system. To log in, <a style="text-decoration: underline;" href="index.php">click here</a>.</p>
        </div>
	</div>
    <?php include('include_sitewidebody.php'); ?>
</body>
</html>