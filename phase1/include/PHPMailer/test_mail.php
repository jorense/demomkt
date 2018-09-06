<?php
	echo 'lala';

	$smtp_host = 'web1006.dataplugs.com';
	$smtp_username = 'no-reply@demomkt.net';
	$smtp_password = 'PRW&.{&*vk%P';
	$smtp_secure = 'ssl'; // SSL or TLS
	$smtp_port = '465';

	$recipient_email = 'joseph.st.mok@pccw.com';
	$recipient_name = 'Joseph Mok';

	$subject = 'test subject';
	$message = 'test message';

	include('run_mail.php');
?>