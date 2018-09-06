<?php
	include('include_security.php'); 
	$error = FALSE;
	
	// Localize GET variables
	foreach($_GET as $key=>$value) { 
		${strip_tags(mysqli_real_escape_string($conn, $key))} = strip_tags(mysqli_real_escape_string($conn, $value));
		// identifier, target_table, target_colum
	}
	
	// Check if data exists and not removed
	$result = mysqli_query($conn, "
		SELECT
			*
		FROM
			" . $target_table . "
		WHERE
			remove = '0' AND
			id = " . $identifier . "
		LIMIT
			1
	");
	$count = mysqli_num_rows($result);
	if($count==1) {
		// Update cell with blank 
		$update = mysqli_query($conn, "
			UPDATE
				" . $target_table . "
			SET
				" . $target_column . " = '', 
				last_modified = '$current_time', 
				modifier = '$user_id'
			WHERE
				id='$identifier'
		") or die (mysqli_error($conn));
		
		if(!$update) {
			$error = TRUE;
			goto finish_up;
		}
	}
	else {
		$error = TRUE;	
		goto finish_up;
	}
	
	finish_up:
	
	if($error==TRUE) {
		echo '
			<!doctype html>
			<html>
				<head>
					<meta charset="UTF-8">
					<meta name="robots" content="noindex">
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
				</head>
				
				<body>
					' . $error . '
					<script type="text/javascript">
						$(document).ready(function(){
							alert("That\'s strange... The file could not be removed. Better try again.");
						});
					</script>
				</body>
			</html>

		';
	}
?>