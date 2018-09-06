<?php 
	include('include_security.php'); 
	
	$account_id = strip_tags(mysqli_real_escape_string($conn, $_GET['account_id']));
	
	// Check if user is owner
	if($user_id==$account_id) {
		// Is owner
		$owner = '';
	}
	else {
		// Not owner
		$owner = ' style="display:none;"';
	}
	
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
		// Not god
		$mortal = ' style="display:none;"';
	}
	else {
		// Is god
		$mortal = '';
		$owner = '';
	}
	
	// Check if profile exist
	$result = mysqli_query($conn, "
		SELECT
			*
		FROM
			cms_user
		WHERE
			remove='0' AND
			id='$account_id'
		LIMIT
			1
	");
	$count = mysqli_num_rows($result);
	if($count==1) {
		while($row=mysqli_fetch_array($result)) {
			// ID
			$account_id = $row['id'];
			
			// Publish
			if($row['active']==1) {
				$active = 'Yes';
			}
			else {
				$active = 'No';
			}
			
			// Date Created
			$date_created = $row['date_created'];
			if($date_created=='0000-00-00 00:00:00') {
				$date_created = '';
			}
			else {
				$date_created = date('F d, Y g:i A', strtotime($row['date_created']));
			}
			
			// Master Account
			if($row['god']==1) {
				$god = 'Yes';
			}
			else {
				$god = 'No';
			}
			
			// Last Login
			$token_result = mysqli_query($conn, "
				SELECT
					*
				FROM
					cms_token
				WHERE
					user_id='$account_id'
				ORDER BY
					date_created DESC
				LIMIT
					1
			");
			while($token_row=mysqli_fetch_array($token_result)) {
				$last_login = $token_row['date_created'];
				$token_active = $token_row['active'];
				$token_timeout = $token_row['time_out'];
			}
			if($last_login=='0000-00-00 00:00:00') {
				$last_login = '';
			}
			else {
				$last_login = date('F d, Y g:i A', strtotime($last_login));
			}
			
			// First Name
			$first_name = $row['first_name'];
			
			// Last Name
			$last_name = $row['last_name'];
			
			// Email
			$email = $row['user_name'];
			
			// Status
			if($token_active=='1' && $unix_epoch < $token_timeout && $active=='Yes') {
				$status = 'Logged In';
			}
			else {
				$status = 'Logged Out';
			}
			
			// Row Background
			if($i % 2 == 0) {
				$bkg = 'dark';
			}
			else {
				$bkg = 'light';
			}
			
			$account_info = '
				<tr class="' . $bkg . '">
					<td>' . $account_id . '</td>
					<td>' . $active . '</td>
					<td>' . $date_created . '</td>
					<td>' . $god . '</td>
					<td>' . $last_login . '</td>
					<td>' . $first_name. '</td>
					<td>' . $last_name. '</td>
					<td>' . $email. '</td>
					<td>' . $status. '</td>
					<td' . $mortal . '><a href="account_form.php?task=edit&account_id=' . $account_id . '">Edit</a></td>
					<td' . $mortal . '><a href="account_user_submit.php?task=reset_password&account_id=' . $account_id . '">Reset Password</a></td>
					<td' . $owner . '><a href="account_changepassword.php?account_id=' . $account_id . '">Change Password</a></td>
				</tr>
			';
			$i++;
		}
	}
	else {
		header('Location: category_index.php');
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
            <h1>Edit <?php echo $first_name . ' ' . $last_name . '\'s'; ?> account</h1>
            <div id="divider">&nbsp;</div>
          	<h3 id="profile"><?php echo $first_name . ' ' . $last_name . '\'s'; ?> Account Information</h3>
            <p>The information of this account.</p>
            <div id="table_wrap" class="no_scroll">
                <table id="table_dump">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Active</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Master Account</th>
                            <th scope="col">Last Login</th>
                         	<th scope="col">First Name</th>
                         	<th scope="col">Last Name</th>
                         	<th scope="col">Email</th>
                         	<th scope="col">Status</th>
                            <th scope="col" colspan="3"<?php echo $owner; ?>>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<form class="profile_bulkremove" method="post" action="profile_bulkremove.php">
                            <?php echo $account_info; ?>
                        </form>
                  </tbody>
                </table>
            </div>
            <div id="divider">&nbsp;</div>
          	<h3 id="profile">Login Sessions</h3>
            <p>The login sessions of this account.</p>
            <div id="table_wrap">
                <table id="table_dump">
                    <thead>
                        <tr>
                            <th scope="col" class="sort">ID <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Login Time <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Token <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Session Timeout <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
                            $result = mysqli_query($conn, "							
                                SELECT 
                                    *
                                FROM 
                                    cms_token
                                WHERE 
                                    user_id='$account_id'
                                ORDER BY
                                    date_created DESC

                            ");
                            $i = 1;
                            while($row = mysqli_fetch_array($result)) {
                                // ID
                                $session_id = $row['id'];
                               
                                // Date Created
                                $login_time = $row['date_created'];
                                if($login_time=='0000-00-00 00:00:00') {
                                    $login_time = '';
                                }
                                else {
                                    $login_time = '<!--' . date('U', strtotime($login_time)) . '-->' . date('F d, Y g:i A', strtotime($login_time));
                                }
                                
                                // Last Modified
                                $token = $row['token'];
                                
                                // Session Timeout
                                $session_timeout = $row['time_out'];
								$session_timeout = '<!--' . date('U', strtotime($session_timeout)) . '-->' . date('F d, Y g:i A', $session_timeout);
                                
                                // Row Background
                                if($i % 2 == 0) {
                                    $bkg = 'dark';
                                }
                                else {
                                    $bkg = 'light';
                                }
                                
                                echo '
                                    <tr class="' . $bkg . '">
                                        <td>' . $session_id . '</td>
                                        <td>' . $login_time . '</td>
                                        <td>' . $token . '</td>
                                        <td>' . $session_timeout . '</td>
                                    </tr>
                                ';
                                $i++;
                            }
                        ?>
                  </tbody>
                </table>
            </div>
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