<?php 
	include('include_security.php'); 
	
	// Check if id is set
	if(isset($_GET['account_id']) && !empty($_GET['account_id'])) {
		$account_id = preg_replace('#[^0-9]#i','',$_GET['account_id']);
		$account_id = mysqli_real_escape_string($conn, $account_id);
		
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
		if($user_id==$account_id || $god_count==1) {
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
			if($exist!=1) {
				header('Location: account_index.php');
				exit();
			}
		}
		else {
			header('Location: account_index.php');
			exit();
		}
	}
	else {
		header('Location: account_index.php');
		exit();
	}
	
	$heading = 'Change account password'; 
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
                <input type="hidden" name="task" value="change_password" />
                <input type="hidden" name="account_id" value="<?php echo $account_id; ?>" />
                <div id="field_wrap">
                    <div id="label">
                        Old Password: 
                    </div><!--
                    --><div id="field">
                        <input class="form_field" type="password" name="old_password" value="" data-parsley-minlength="8" required />
                    </div><!--
                    --><div id="help">
                        The password you are using now.
                    </div>
                </div>
                <div id="field_wrap">
                    <div id="label">
                        New Password: 
                    </div><!--
                    --><div id="field">
                        <input class="form_field" type="password" id="new_password" name="new_password" value="" data-parsley-minlength="8" required />
                    </div><!--
                    --><div id="help">
                        The new password that you want to use.
                    </div>
                </div>
                <div id="field_wrap">
                    <div id="label">
                        Confirm New Password: 
                    </div><!--
                    --><div id="field">
                        <input class="form_field" type="password" name="confirm_password" value="" data-parsley-equalto="#new_password" data-parsley-minlength="8" required />
                    </div><!--
                    --><div id="help">
                        Type your new password again to make sure there were no typos.
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