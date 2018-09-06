<?php
	include('include_security.php'); 

	// User Real Name
	$result = mysqli_query($conn, "
		SELECT
			*
		FROM
			cms_user
		WHERE
			active='1' AND
			remove='0' AND
			id='$user_id'
		LIMIT
			1
	") or die(mysqli_error());
	while($row = mysqli_fetch_array($result)) {
		$user_first_name = $row['first_name'];
	}

/*	
	// Dates
	$past_30 = date('Y-m-d H:i:s', strtotime('-30 days'));
	$past_7 = date('Y-m-d H:i:s', strtotime('-7 days'));
	
	// Package reservation (Past 7)
	$result = mysqli_query($conn, "
		SELECT
			*
		FROM 
			package_reserve
		WHERE
			remove = '0' AND
			reservation_time >= '$past_7'
	");
	$package_7 = mysqli_num_rows($result);
	
	// Package reservation (Past 30)
	$result = mysqli_query($conn, "
		SELECT
			*
		FROM 
			package_reserve
		WHERE
			remove = '0' AND
			reservation_time >= '$past_30'
	");
	$package_30 = mysqli_num_rows($result);
	
	// JR Pass purchase (Past 7)
	$result = mysqli_query($conn, "
		SELECT
			*
		FROM 
			jr_customer
		WHERE
			remove = '0' AND
			status != 'applying' AND
			date_receive >= '$past_7'
	");
	$jrpass_7 = mysqli_num_rows($result);
	
	// JR Pass purchase (Past 30)
	$result = mysqli_query($conn, "
		SELECT
			*
		FROM 
			jr_customer
		WHERE
			remove = '0' AND
			status != 'applying' AND
			date_receive >= '$past_30'
	");
	$jrpass_30 = mysqli_num_rows($result);
	*/
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
            <h1>Hi <?php echo $user_first_name; ?>!</h1>
            <!--p>Begin managing the website's content by clicking on the section you'd like to change from the menu on the left.</p-->
			<p>I'm too lazy to make a dashboard. Just click on the links on the left to update stuff.</p>
      
<?php /*		
            <!-- Package -->
            <div id="module">
                <h3 class="no_margin"><a href="video_index.php">Package Reservations</a></h3>
                <div id="divider">&nbsp;</div>
                <div id="module_half" class="left fyi_label">
                    Number of reservations in the past 7 days
                </div><!--
                --><div id="module_half" class="right fyi_figure">
                    <?php echo $package_7; ?>
                </div>
                <div id="divider">&nbsp;</div>
                <div id="module_half" class="left fyi_label">
                    Number of reservations in the past 30 days
                </div><!--
                --><div id="module_half" class="right fyi_figure">
                    <?php echo $package_30; ?>
                </div>
                <div id="divider">&nbsp;</div>
                <a href="package_index.php">Manage Packages</a>
            </div>
            
            <!-- JR Pass -->
            <div id="module">
                <h3 class="no_margin"><a href="video_index.php">JR Pass Purchases</a></h3>
                <div id="divider">&nbsp;</div>
                <div id="module_half" class="left fyi_label">
                    Number of purchases in the past 7 days
                </div><!--
                --><div id="module_half" class="right fyi_figure">
                    <?php echo $jrpass_7; ?>
                </div>
                <div id="divider">&nbsp;</div>
                <div id="module_half" class="left fyi_label">
                    Number of purchases in the past 30 days
                </div><!--
                --><div id="module_half" class="right fyi_figure">
                    <?php echo $jrpass_30; ?>
                </div>
                <div id="divider">&nbsp;</div>
                <a href="jrpass_index.php">Manage JR Pass</a>
            </div>
            
*/ ?>

			
        </div>
	</div>
    <?php include('include_sitewidebody.php'); ?>
</body>
</html>