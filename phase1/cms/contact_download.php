<?php
	include('include_security.php'); 
	
	$range = strip_tags(mysqli_real_escape_string($conn, $_GET['range']));

	if($range=='all') {
		$sql_where = '';
	}
	else {
		$date_range = date('Y-m-d H:i:s', strtotime('-' . $range . ' days'));
		$sql_where = "
			WHERE
				date_sent > '$date_range'
		";
	}

	$filename = 'received_messages_' . $range;
	header('Content-type: application/vnd.xls');
	header('Content-Disposition: attachment; filename="' . $filename . '_(' . $current_time . ').xls"');
	echo '
		<table>
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Date Received</th>
					<th scope="col">Name</th>
					<th scope="col">Title</th>
					<th scope="col">Company</th>
					<th scope="col">Email</th>
					<th scope="col">Telephone</th>
					<th scope="col">Message</th>
					<th scope="col">Agreement (Step 1)</th>
					<th scope="col">Industry</th>
					<th scope="col">Where sender learnt about company</th>
					<th scope="col">Agreement (Step 2)</th>
					<th scope="col">Referral URL</th>
					<th scope="col">Source</th>
				</tr>
			</thead>
			<tbody>
	';

	$result = mysqli_query($conn, "							
		SELECT 
			*
		FROM 
			contact_record
		" . $sql_where . "
		ORDER BY
			date_sent DESC
	");
	$i = 1;
	while($row = mysqli_fetch_array($result)) {
		// Localize variables
		foreach($row as $key=>$value) { 
			${$key} = strip_tags($value);
		}

		// ID
		$message_id = $id;

		// Last Modified
		if($date_sent=='0000-00-00 00:00:00') {
			$date_sent = '';
		}
		else {
			$date_sent = date('F d, Y g:i A', strtotime($date_sent));
		}

		// Row Background
		if($i % 2 == 0) {
			$bkg = 'dark';
		}
		else {
			$bkg = 'light';
		}

		echo '
			<tr class="' . $bkg . '">
				<td>' . $message_id . '</td>
				<td>' . $date_sent . '</td>
				<td>' . $name . '</td>
				<td>' . $title . '</td>
				<td>' . $company . '</td>
				<td>' . $email . '</td>
				<td>' . $telephone . '</td>
				<td>' . $message . '</td>
				<td>' . $agree1 . '</td>
				<td>' . $industry . '</td>
				<td>' . $hear_about . '</td>
				<td>' . $agree2 . '</td>
				<td>' . $referer . '</td>
				<td>' . $source . '</td>
			</tr>
		';
		$i++;
	}
	
	echo '
		  </tbody>
		</table>
	';
	
?>
