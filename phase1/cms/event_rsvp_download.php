<?php
	include('include_security.php'); 
	
	$campaign_code = strip_tags(mysqli_real_escape_string($conn, $_GET['parameter_data']));

	if($campaign_code=='all') {
		$sql_where = '';
	}
	else {
		$sql_where = "
			WHERE
				campaign_code = '$campaign_code'
		";
	}

	$filename = 'event_rsvp_' . $campaign_code;
	header('Content-type: application/vnd.xls');
	header('Content-Disposition: attachment; filename="' . $filename . '_(' . $current_time . ').xls"');
	echo '
		<table>
			<thead>
				<tr>
					<th scope="col" class="sort">ID <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
					<th scope="col" class="sort">Registration Date <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
					<th scope="col" class="sort">Campaign Code <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
					<th scope="col" class="sort">Referral Source <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
					<th scope="col" class="sort">Name <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
					<th scope="col" class="sort">Title <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
					<th scope="col" class="sort">Company <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
					<th scope="col" class="sort">Email <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
					<th scope="col" class="sort">Telephone <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
					<th scope="col" class="sort">Agreement <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
				</tr>
			</thead>
			<tbody>
	';

	$result = mysqli_query($conn, "							
		SELECT 
			*
		FROM 
			event_rsvp
		" . $sql_where . "
		ORDER BY
			date_added DESC
	");
	$i = 1;
	while($row = mysqli_fetch_array($result)) {
		// Localize variables
		foreach($row as $key=>$value) { 
			${$key} = strip_tags($value);
		}

		// ID
		$event_rsvp_id = $id;
		$identifier = $id;

		// Last Modified
		if($date_added=='0000-00-00 00:00:00') {
			$date_added = '';
		}
		else {
			$date_added = '<!--' . date('U', strtotime($date_added)) . '-->' . date('F d, Y g:i A', strtotime($date_added));
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
				<td>' . $event_rsvp_id . '</td>
				<td>' . $date_added . '</td>
				<td>' . $campaign_code . '</td>
				<td>' . $source . '</td>
				<td>' . $name . '</td>
				<td>' . $title . '</td>
				<td>' . $company . '</td>
				<td>' . $email . '</td>
				<td>' . $telephone . '</td>
				<td>' . $agree . '</td>
			</tr>
		';
		$i++;
	}
	
	echo '
		  </tbody>
		</table>
	';
	
?>
