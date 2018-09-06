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
		// Not god
		$mortal = ' style="display:none;"';
	}
	else {
		// Is god
		$mortal = '';
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
            <h1>Manage user accounts for this CMS</h1>
            <div id="divider">&nbsp;</div>
          	<h3 id="accounts">Accounts</h3>
            <p>The accounts that can log in to this CMS and modify the content of the website.</p>
            <a href="account_form.php?task=add"<?php echo $mortal; ?>>
                <div class="button"<?php echo $mortal; ?>>
                    + Add an user
                </div>
            </a>
            <a href="javascript:void(0)"<?php echo $mortal; ?>>
                <div class="button account_button"<?php echo $mortal; ?>>
                    Remove Selected
                </div>
            </a>
            <div id="table_wrap">
                <table id="table_dump">
                    <thead>
                        <tr>
                            <th scope="col"<?php echo $mortal; ?>></th>
                            <th scope="col" class="sort">ID <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Active <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Date Created <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Master Account <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Last Login <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                         	<th scope="col" class="sort">First Name <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                         	<th scope="col" class="sort">Last Name <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                         	<th scope="col" class="sort">Email <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                         	<th scope="col" class="sort">Status <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<form class="account_bulkremove" method="post" action="account_bulkremove.php">
                        <?php
                            $result = mysqli_query($conn, "							
                                SELECT 
                                    *
                                FROM 
                                    cms_user
                                WHERE 
									remove='0'
								ORDER BY
									last_name
                            ");
                            $i = 1;
                            while($row = mysqli_fetch_array($result)) {
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
	                                $date_created = '<!--' . date('U', strtotime($row['date_created'])) . '-->' . date('F d, Y g:i A', strtotime($row['date_created']));
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
								$token_count = mysqli_num_rows($token_result);
								while($token_row=mysqli_fetch_array($token_result)) {
									$last_login = $token_row['date_created'];
									$token_active = $token_row['active'];
									$token_timeout = $token_row['time_out'];
								}
								if($last_login=='0000-00-00 00:00:00' || $token_count=='0') {
									$last_login = '';
								}
								else {
	                                $last_login = '<!--' . date('U', strtotime($last_login)) . '-->' . date('F d, Y g:i A', strtotime($last_login));
								}
								
								// First Name
								$first_name = $row['first_name'];
								
								// Last Name
								$last_name = $row['last_name'];
								
								// Email
								$email = $row['user_name'];
								
								// Status
								if($token_active=='1' && $unix_epoch < $token_timeout && $token_count!='0' && $active=='Yes') {
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
								
                                echo '
									<input type="hidden" name="bulk_remove[]" class="check' . $account_id . '" value="" />
									<script>
										$(document).ready(function(){
											$(".account_check.' . $account_id . '").click(function() {
												var value' . $account_id . ' = $(".check' . $account_id . '").val();
												if(value' . $account_id . '=="") {
													$(".check' . $account_id . '").val("' . $account_id . '");
												}
												else {
													$(".check' . $account_id . '").val("");
												}
											});
										});
									</script>
                                    <tr class="' . $bkg . '">
										<td' . $mortal . '><input type="checkbox" class="account_check ' . $account_id . '" /></td>
                                        <td>' . $account_id . '</td>
                                        <td>' . $active . '</td>
                                        <td>' . $date_created . '</td>
                                        <td>' . $god . '</td>
                                        <td>' . $last_login . '</td>
                                        <td>' . $first_name. '</td>
                                        <td>' . $last_name. '</td>
                                        <td>' . $email. '</td>
                                        <td>' . $status. '</td>
                                        <td><a href="account_edit.php?account_id=' . $account_id . '">View</a></td>
                                    </tr>
                                ';
                                $i++;
                            }
                        ?>
                        </form>
                        <script>
							$(document).ready(function(){
								// Update these 3 variables for each table
								var button = '.account_button';
								var checkbox = '.account_check';
								var form = '.account_bulkremove';
								
								var checked = checkbox + ':checked';
								
								$(button).hide();
								
								$(checkbox).click(function() {
									if ( $(checked).length > 0) {
										$(button).show();
									} else {
										$(button).hide();
									}
								}); 

								$(button).click(function(){
									var removeConfirm = confirm("Are you sure you want to remove the selected items? This cannot be undone. If you want to hide the items on the website, simply set \"Public\" to \"No\"");
									if (removeConfirm){
										$(form).submit();
									}
								});
							});
						</script>
                  </tbody>
                </table>
            </div>
            

        </div>
	</div>
    <?php include('include_sitewidebody.php'); ?>
</body>
</html>