<?php 
	include('include_security.php'); 
	
	// Check if user is god
	$result = mysqli_query($conn, "
		SELECT	
			*
		FROM
			cms_user
		WHERE
			id='$user_id' AND
			god='1'
	");
	$count = mysqli_num_rows($result);
	if($count!=1) {
		header('Location: account_index.php');
		exit();
	}
	
	$task = strip_tags(mysqli_real_escape_string($conn, $_GET['task']));
	if($task=='edit') {
		$account_id = strip_tags(mysqli_real_escape_string($conn, $_GET['account_id']));
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
		$count = mysqli_num_rows($result);
		if($count==1) {
			while($row=mysqli_fetch_array($result)) {
				$active = $row['active'];
				$first_name = $row['first_name'];
				$last_name = $row['last_name'];
				$email = $row['user_name'];
				$god = $row['god'];
				
				// Active Menu
				if($active==1) {
					$active_menu = '
						<option value="1" selected>Yes</option>
						<option value="0">No</option>
					';
				}
				else {
					$active_menu = '
						<option value="1">Yes</option>
						<option value="0" selected>No</option>
					';
				}
				
				// God Menu
				if($god==1) {
					$god_menu = '
						<option value="1" selected>Yes</option>
						<option value="0">No</option>
					';
				}
				else {
					$god_menu = '
						<option value="1">Yes</option>
						<option value="0" selected>No</option>
					';
				}
			}
		}
		else {
			header('Location: account_index.php');
			exit();
		}
	}
	elseif($task=='add') {
		$heading = 'Add a user'; 
		
		$active_menu = '
			<option value="1">Yes</option>
			<option value="0">No</option>
		';
		
		$god_menu = '
			<option value="1">Yes</option>
			<option value="0">No</option>
		';
	}
	else {
		header('Location: account_index.php');
		exit();
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
			<h1><?php echo $heading; ?></h1>
            <p>Use the form below to compose the content. When you're done, click "Save"</p>
            <form method="post" enctype="multipart/form-data" action="account_user_submit.php" data-parsley-validate>
                <input type="hidden" name="task" value="<?php echo $task; ?>" />
                <input type="hidden" name="account_id" value="<?php echo $account_id; ?>" />
                <div id="field_wrap">
                    <div id="label">
                        First Name: 
                    </div><!--
                    --><div id="field">
                        <input class="form_field" type="text" name="first_name" value="<?php echo $first_name; ?>" required />
                    </div><!--
                    --><div id="help">
                        The the first name of this user.
                    </div>
                </div>
                <div id="field_wrap">
                    <div id="label">
                        Last Name: 
                    </div><!--
                    --><div id="field">
                        <input class="form_field" type="text" name="last_name" value="<?php echo $last_name; ?>" required />
                    </div><!--
                    --><div id="help">
                        The the last name of this user.
                    </div>
                </div>
                <div id="field_wrap">
                    <div id="label">
                        Email: 
                    </div><!--
                    --><div id="field">
                        <input class="form_field" type="text" name="email" value="<?php echo $email; ?>" data-parsley-type="email" required />
                    </div><!--
                    --><div id="help">
                        The email address this user will use to login. The account password will also be sent to this addess.
                    </div>
                </div>
            	<div id="field_wrap">
                	<div id="label">
                    	Master Account: 
                    </div><!--
                	--><div id="field">
                    	<select class="form_field" name="god" required>
                            <option value="">Please Select</option>
                            <?php echo $god_menu; ?>
						</select>
                    </div><!--
                	--><div id="help">
                    	A master account will be able to create new users and manage existing users.
                    </div>
                </div>
            	<div id="field_wrap">
                	<div id="label">
                    	Active: 
                    </div><!--
                	--><div id="field">
                    	<select class="form_field" name="active" required>
                            <option value="">Please Select</option>
                            <?php echo $active_menu; ?>
                        </select>
                    </div><!--
                	--><div id="help">
                    	If you would like to allow this account access to the CMS, choose "Yes". Otherwise, select "No". Only activated accounts will be able to login and modify the website.
                    </div>
                </div>
            	<div id="field_wrap">
                	<div id="label">
                    	&nbsp; 
                    </div><!--
                	--><div id="field">
                    	<input class="button" type="submit" value="Save">
                    </div><!--
                	--><div id="help">
                    	Sends the content you have entered to the server to be saved, which may take several minutes. Please be patient and do not click the button more than once.
                    </div>
                </div>
            </form>
            
            <div id="divider">&nbsp;</div>
            <a href="account_index.php">
                <div class="button">
                    Back
                </div>
            </a>
        </div>
	</div>
    <?php include('include_sitewidebody.php'); ?>
</body>
</html>