<?php 
	include('include_security.php'); 
	
	// Check if task is set
	if(isset($_GET['task'])) {
		$task = strip_tags(mysqli_real_escape_string($conn, $_GET['task']));
		// Instructions for edit
		if($task == 'edit') {
			$heading = 'Edit your account';
			// Check if id is set
			if(isset($_GET['id']) && !empty($_GET['id'])) {
				$id = preg_replace('#[^0-9]#i','',$_GET['id']);
				$id = mysqli_real_escape_string($conn, $id);
				$sql = mysqli_query($conn, "
					SELECT 
						* 
					FROM 
						cms_user
					WHERE 
						id='$id' AND
						remove='0'
					LIMIT
						1
				");
				$exist = mysqli_num_rows($sql);
				// Check if id exists
				if($exist == 1) {
					while($row = mysqli_fetch_array($sql)) {
						// Localize variables
						$user_name = $row['user_name'];
						$active = $row['active'];
					}
					$change_password = '
						<div id="field_wrap">
							<div id="label">
								Change Password: 
							</div><!--
							--><div id="field">
								<select class="form_field" name="change_password" required>
									<option value="no" selected>No</option>
									<option value="yes">Yes</option>
								</select>
							</div><!--
							--><div id="help">
								Select "Yes" if you would like to change your existing password.
							</div>
						</div>
					';
					$old_password = '
						<div id="field_wrap">
							<div id="label">
								Current Password: 
							</div><!--
							--><div id="field">
								<input class="form_field" type="password" name="old_password" value="" />
							</div><!--
							--><div id="help">
								The password you are currently using.
							</div>
						</div>
					';
				}
				else {
					header('Location: account_index.php');
					exit();
				}
			}
		}
		// Instructions for add
		if($task == 'add') {
			$heading = 'Add a user';
			$require_password = ' required';
		}
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
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <?php 
					if($admin_id==$id || $task=='add') {
						echo '
							<div id="field_wrap">
								<div id="label">
									User Name: 
								</div><!--
								--><div id="field">
									<input class="form_field" type="text" name="user_name" value="' . $user_name . '" required />
								</div><!--
								--><div id="help">
									The the username of the account that will be used to login.
								</div>
							</div>
							' . $change_password . '
							<div id="chg_pwd">
								' . $old_password . '
								<div id="field_wrap">
									<div id="label">
										New Password: 
									</div><!--
									--><div id="field">
										<input class="form_field" type="password" name="new_password" id="new_password" value=""' . $require_password . ' data-parsley-minlength="8" data-parsley-error-message="Please ensure the password is at least 8 characters long." />
									</div><!--
									--><div id="help">
										The new password that will be used to login. It must be at least 8 characters long.
									</div>
								</div>
								<div id="field_wrap">
									<div id="label">
										Confirm New Password: 
									</div><!--
									--><div id="field">
										<input class="form_field" type="password" name="confirm_password" value=""' . $require_password . ' data-parsley-minlength="8" data-parsley-equalto="#new_password" data-parsley-error-message="Please ensure the new password has been entered correctly and at least 8 characters long." />
									</div><!--
									--><div id="help">
										Re-enter the new password to ensure it has been entered correctly.
									</div>
								</div>
							</div>
						';
					}
					else {
						echo '<input type="hidden" name="user_name" value="' . $user_name . '" />';
					}
				?>
            	<div id="field_wrap">
                	<div id="label">
                    	Active: 
                    </div><!--
                	--><div id="field">
                    	<select class="form_field" name="active" required>
                        <?php
							if($active == '1') {
								echo '
									<option value="">Please Select</option>
									<option value="1" selected>Yes</option>
									<option value="0">No</option>
								';
							}
							if($active == '0') {
								echo '
									<option value="">Please Select</option>
									<option value="1">Yes</option>
									<option value="0" selected>No</option>
								';
							}
							if($task == 'add') {
								echo '
									<option value="" selected>Please Select</option>
									<option value="1">Yes</option>
									<option value="0" >No</option>
								';
							}
						?>
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
                <script>
					// Change password selection
						// When the page first loads
						$(document).ready(function() {
							var text = $('select[name=change_password]').val();
							if(text == 'no') {
								$('#chg_pwd').hide();
							}
							else if(text == 'yes') {
								$('#chg_pwd').show();
							}
							else if(text == '') {
								$('#chg_pwd').hide();
							}
						});
						// When the selection is changed
						$('select[name=change_password]').change(function () {
							if ($(this).val() == 'no') {
								$('#chg_pwd').hide();
							} 
							else if($(this).val() == 'yes') {
								$('#chg_pwd').show();
							}
							else if($(this).val() == '') {
								$('#chg_pwd').show();
							}
						});
				
				</script>
            </form>
        </div>
	</div>
    <?php include('include_sitewidebody.php'); ?>
</body>
</html>