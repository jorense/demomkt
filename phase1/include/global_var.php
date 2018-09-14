<?php
	$stage = 'local';
	// $stage = 'development';
	// $stage = 'dataplug';
	// $stage = 'uat';
	// $stage = 'live';

	if($stage=='local') {
		$domain_en = 'localhost';
		$domain_sc = 'localhost';
		//*$root_directory = 'http://localhost/revamp/phase1/phase1/'; // this is for the cms
		/**$real_root_directory = 'http://localhost/revamp/phase1/'; // this is for the frontend**/
		$root_directory = 'http://localhost/phase1/phase1/'; // this is for the cms
		$real_root_directory = 'http://localhost/phase1/'; // this is for the frontend
		//*$nofollow = '<meta name="robots" content="noindex">';
		$google_analytics = '';

		// SMTP
		$smtp_host = '';
		$smtp_username = '';
		$smtp_password = '';
		$smtp_secure = ''; // ssl or tls
		$smtp_port = '';

		// Database credentials
		$db_username = 'root';
		$db_pass = '';
		$db_name = 'demomktn_revamp_phase1';

		// Facebook
		$fbapp_id = '1671103189777427';
	}
	elseif($stage=='development') {
		$domain_en = 'josephmok.me';
		$domain_sc = 'josephmok.me';
		// $root_directory = 'http://www.josephmok.me/_projects/pccw_solutions/revamp/phase1/phase1/'; // this is for the cms
		// $real_root_directory = 'http://www.josephmok.me/_projects/pccw_solutions/revamp/phase1/'; // this is for the frontend
		$root_directory = 'http://localhost/phase1/phase1/'; // this is for the cms
		$real_root_directory = 'http://localhost/phase1/'; // this is for the frontend
		$nofollow = '<meta name="robots" content="noindex">';
		$google_analytics = '';

		// SMTP
		$smtp_host = 'secure142.inmotionhosting.com';
		$smtp_username = 'noreply@josephmok.me';
		$smtp_password = 'aszxopkl';
		$smtp_secure = 'ssl'; // ssl or tls
		$smtp_port = '465';

		// Database credentials
		$db_username = 'joseph74_pccws1';
		$db_pass = 'lT3dhE^Am&2,';
		$db_name = 'joseph74_pccws_phase1';

		// Facebook
		$fbapp_id = '1671103189777427';
	}
	elseif($stage=='dataplug') {
		$domain_en = 'demomkt.net';
		$domain_sc = 'demomkt.net';
		// $root_directory = 'http://www.demomkt.net/revamp/phase1/phase1/'; // this is for the cms
		// $real_root_directory = 'http://www.demomkt.net/revamp/phase1/'; // this is for the frontend

		$root_directory = 'http://localhost/phase1/phase1/'; // this is for the cms
		$real_root_directory = 'http://localhost/phase1/'; // this is for the frontend
		$nofollow = '<meta name="robots" content="noindex">';
		$google_analytics = '';

		// SMTP
		$smtp_host = 'web1006.dataplugs.com';
		$smtp_username = 'no-reply@demomkt.net';
		$smtp_password = 'PRW&.{&*vk%P';
		$smtp_secure = 'ssl'; // ssl or tls
		$smtp_port = '465';

		// Database credentials
		$db_username = 'demomktn_p1user';
		$db_pass = 't_K61ecXF{Jl';
		$db_name = 'demomktn_revamp_phase1';

		// Facebook
		$fbapp_id = '';
	}
	elseif($stage=='uat') {
		$domain_en = '';
		$domain_sc = '';
		$root_directory = ''; // this is for the cms
		$real_root_directory = ''; // this is for the frontend
		$nofollow = '<meta name="robots" content="noindex">';
		$google_analytics = '';

		// SMTP
		$smtp_host = '';
		$smtp_username = '';
		$smtp_password = '';
		$smtp_secure = ''; // ssl or tls
		$smtp_port = '';

		// Database credentials
		$db_username = '';
		$db_pass = '';
		$db_name = '';

		// Facebook
		$fbapp_id = '';
	}
	elseif($stage=='live') {
		$domain_en = 'pccwsolutions.com';
		$domain_sc = 'pccwsolutions.com.cn';
		// $root_directory = ''; // this is for the cms
		// $real_root_directory = ''; // this is for the frontend
		$root_directory = 'http://localhost/phase1/phase1/'; // this is for the cms
		$real_root_directory = 'http://localhost/phase1/'; // this is for the frontend
		$google_analytics = "
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-60069613-1\"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());

			  gtag('config', 'UA-60069613-1');
			</script>
		";
		$nofollow = ''; // This should be empty for live

		// SMTP
		$smtp_host = '';
		$smtp_username = '';
		$smtp_password = '';
		$smtp_secure = ''; // ssl or tls
		$smtp_port = '';

		// Database credentials
		$db_username = '';
		$db_pass = '';
		$db_name = '';

		// Facebook
		$fbapp_id = '';
	}

	// Default variables
	$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$url = filter_var($url, FILTER_SANITIZE_URL);

	date_default_timezone_set('Asia/Hong_Kong');
	$current_time = date('Y-m-d H:i:s');
	$year = date('Y');
	$unix_epoch = date('U');

	$cms_title = 'PCCW Solutions Content Management System';
	$cms_time_out = $unix_epoch+(60*120); // 2 hours

	// Create random string
	function generateRandomString($length = 20) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	// Detect browser
	function getBrowser() {
		$u_agent = $_SERVER['HTTP_USER_AGENT'];
		$bname = 'Unknown';
		$platform = 'Unknown';
		$version= "";

		//First get the platform?
		if (preg_match('/linux/i', $u_agent)) {
			$platform = 'linux';
		}
		elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
			$platform = 'mac';
		}
		elseif (preg_match('/windows|win32/i', $u_agent)) {
			$platform = 'windows';
		}

		// Next get the name of the useragent yes seperately and for good reason
		if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
		{
			$bname = 'Internet Explorer';
			$ub = "MSIE";
		}
		elseif(preg_match('/Trident/i',$u_agent))
		{
			$bname = 'Internet Explorer';
			$ub = "MSIE";
		}
		elseif(preg_match('/Firefox/i',$u_agent))
		{
			$bname = 'Mozilla Firefox';
			$ub = "Firefox";
		}
		elseif(preg_match('/Chrome/i',$u_agent))
		{
			$bname = 'Google Chrome';
			$ub = "Chrome";
		}
		elseif(preg_match('/Safari/i',$u_agent))
		{
			$bname = 'Apple Safari';
			$ub = "Safari";
		}
		elseif(preg_match('/Opera/i',$u_agent))
		{
			$bname = 'Opera';
			$ub = "Opera";
		}
		elseif(preg_match('/Netscape/i',$u_agent))
		{
			$bname = 'Netscape';
			$ub = "Netscape";
		}

		// finally get the correct version number
		$known = array('Version', $ub, 'other');
		$pattern = '#(?<browser>' . join('|', $known) .
		')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
		if (!preg_match_all($pattern, $u_agent, $matches)) {
			// we have no matching number just continue
		}

		// see how many we have
		$i = count($matches['browser']);
		if ($i != 1) {
			//we will have two since we are not using 'other' argument yet
			//see if version is before or after the name
			if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
				$version= $matches['version'][0];
			}
			else {
				$version= $matches['version'][1];
			}
		}
		else {
			$version= $matches['version'][0];
		}

		// check if we have a number
		if ($version==null || $version=="") {$version="?";}

		return array(
			'userAgent' => $u_agent,
			'name'      => $bname,
			'version'   => $version,
			'platform'  => $platform,
			'pattern'    => $pattern
		);
	}

/*
	// now try it
	$ua=getBrowser();
	if($ua['name']=='Internet Explorer') {
		$browser_upgrade = '
			<div style="position:fixed; bottom:0; left:0; z-index:100000; width:100%; padding:1em; box-sizing:border-box; background:#2f2f2f; color:#FFFFFF; text-align:center;">
				<a target="_blank" href="http://browsehappy.com/">Seems like you are using an outdated browser. Many features on this page may not function properly. Consider upgrading to a modern browser.</a>
			</div>
		';
	}
	else {
		$browser_upgrade = '';
	}
*/
	// Do not execute code after this line if there is "/cms/ in $url
	if (strpos($url, '/cms/') !== false) {
		return;
	}

	// Start session for various shit
	session_start();

	// Connect to mysql
	$custom_connect = '';
	if($custom_connect==FALSE) {
		include('connect_to_mysql.php');

		// Language
		$lang = preg_replace("/[^ensc]/", '', $_GET['lang']);
		if($lang=='en' || $lang=='sc') {
			// do nothing
		}
		else {
			header('Location: ' . $real_root_directory . 'en/home');
			exit();
		}
	}

	// Exclude from Ajax
	$ajax = '';
	if($ajax==FALSE) {
		switch($lang) {
			case 'en':
				// Check for correct domain
				if (strpos($url, $domain_en) === false) {
					header('Location: http://www.' . $domain_en . $_SERVER['REQUEST_URI']);
					exit();
				}

				// Site Name
				$site_name = 'PCCW Solutions';

				// Switch Language
				$switch_lang = str_replace('/en/', '/sc/', $_SERVER['REQUEST_URI']);
				$switch_lang = 'http://www.' . $domain_sc . $switch_lang;
				break;

			case 'sc':
				// Check for correct domain
				if (strpos($url, $domain_sc) === false) {
					header('Location: http://www.' . $domain_sc . $_SERVER['REQUEST_URI']);
					exit();
				}

				// Site Name
				$site_name = '电讯盈科企业方案';

				// Switch Language
				$switch_lang = str_replace('/sc/', '/en/', $_SERVER['REQUEST_URI']);
				$switch_lang = 'http://www.' . $domain_en . $switch_lang;
				break;

			default:
				if (strpos($url, $domain_en) !== false) {
					header('Location: ' . $real_root_directory . 'en/home');
					exit();
				}
				elseif (strpos($url, $domain_sc) !== false) {
					header('Location: ' . $real_root_directory . 'sc/home');
					exit();
				}
		}

		// Miscellaneous
		$sql = "
			SELECT
				*
			FROM
				miscellaneous
			WHERE
				id IN(4, 5, 6, 7, 8)
		";
		$result = mysqli_query($conn, $sql);
		while($row=mysqli_fetch_array($result)) {
			// Localize
			foreach($row as $key=>$value) {
				${$key} = $value;
			}
			$copy = str_replace(["\r\n","\r","\n"], "", $row['copy_' . $lang]);

			switch($id) {
				case '4':
					$footer_file = strip_tags($copy);
					break;

				case '5':
					$nav_desktop = strip_tags($copy);
					break;

				case '6':
					$nav_mobile = strip_tags($copy);
					break;

				case '7':
					$contact_widget_desktop = strip_tags($copy);
					break;

				case '8':
					$contact_widget_mobile = strip_tags($copy);
					break;
			}
		}
	}


?>
