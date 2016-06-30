<?php

	session_start();
	@ini_set('display_errors', 0);
	@ini_set('track_errors', 0);
	@date_default_timezone_set('America/Chicago');
    require_once('config.inc.php');
    $config=getConfig();

	if($_REQUEST['action'] = 'email_send') {

        $array['contact_first_name'] = !empty($_REQUEST['contact_first_name']) ? strip_tags(trim($_REQUEST['contact_first_name'])) : '';
        $array['contact_last_name'] = !empty($_REQUEST['contact_last_name']) ? strip_tags(trim($_REQUEST['contact_last_name'])) : '';
        $array['contact_country'] = !empty($_REQUEST['contact_country']) ? strip_tags(trim($_REQUEST['contact_country'])) : '';
        $array['contact_company'] = !empty($_REQUEST['contact_company']) ? strip_tags(trim($_REQUEST['contact_company'])) : '';
        $array['contact_email'] = !empty($_REQUEST['contact_email']) ? strip_tags(trim(strtolower($_REQUEST['contact_email']))) : '';
        $array['contact_phone'] = !empty($_REQUEST['contact_phone']) ? strip_tags(trim($_REQUEST['contact_phone'])) : '';
        $array['contact_subject'] = !empty($_REQUEST['contact_subject']) ? $config['subject'].' - '.strip_tags(trim($_REQUEST['contact_subject'])) : $config['subject'];
        $array['contact_message'] = !empty($_REQUEST['contact_message']) ? strip_tags(nl2br($_REQUEST['contact_message']), '<b><a><strong><br><p>') : '';
        $array['contact_captcha'] = !empty($_REQUEST['contact_captcha']) ? strip_tags(trim($_REQUEST['contact_captcha'])) : '';
        $array['agreement_checkbox'] = $_REQUEST['agreement_checkbox'];

		if($array['contact_captcha'] != $_SESSION['captcha'])
			die('_invalid_captcha_');

        if($array['agreement_checkbox']=='true')
            die('Please enable CSS for your browser.');


		$IP = getIP();
//        $IP = getenv("REMOTE_ADDR");
        $proxy = $HTTP_SERVER_VARS["REMOTE_ADDR"];
        $domain = @gethostbyaddr($IP);

		$date = date('D, M j, Y \a\t h:i A T');

        $mail_body = "
			<b>Date:</b> 	{$date} 							<br> 
			<b>First Name:</b> 	{$array['contact_first_name']}	<br>
            <b>Last Name:</b> 	{$array['contact_last_name']}   <br>
            <b>Company:</b> {$array['contact_company']}         <br>
            <b>Country:</b> {$array['contact_country']}         <br>
			<b>Email:</b> 	{$array['contact_email']}			<br>
			<b>Phone:</b> 	{$array['contact_phone']}			<br>
			---------------------------------------------------	<br>
			<b>Subject:</b> {$_REQUEST['contact_subject']}		<br>
			<b>Message:</b>                                     <br>
			{$array['contact_message']}			                <br>
			---------------------------------------------------	<br>
			IP: {$IP} | Proxy: {$proxy} | Domain: {$domain}
		";

		if(!isset($config['use_smtp']) || isset($config['use_smtp']) && $config['use_smtp'] === true) {

			require('phpmailer/5.1/class.phpmailer.php');

			$m = new PHPMailer();
			$m->IsSMTP();
			$m->SMTPDebug  	= false;					// enable SMTP debug information (for testing) [default: 2]
			$m->SMTPAuth   	= false;
			$m->Host       	= $config['smtp_host'];
			$m->Port       	= $config['smtp_port'];
			$m->Username   	= $config['smtp_user'];
			$m->Password   	= $config['smtp_pass'];
			$m->SingleTo   	= true;
			$m->CharSet    	= "UTF-8";
			$m->Subject 	= $array['contact_subject'];
			$m->AltBody 	= 'To view this message, please use a HTML compatible email viewer.';
            $m->isHTML(true);

			$m->AddAddress($config['send_to'], 'Admin');
			$m->AddReplyTo($array['contact_email'], $array['contact_first_name'].' '.$array['contact_last_name']);
			$m->SetFrom('root@localhost.storage.smartburn.com', 'Message Server');
            $m->MsgHTML($mail_body);

			if($config['smtp_ssl'] === true)
				$m->SMTPSecure = 'ssl';

			if($m->Send()) {
                session_unset();
                session_destroy();
                unset($array, $m);
				die('_sent_ok_');
			} else {
//				die($m->ErrorInfo);
                die('Internal Server Error. Please contact administrator at info@smartburn.com.');
			}
		} 
		
		else {
            die('SMTP Server Error. Please contact administrator at info@smartburn.com.');
        }
	}

	function getIP() {
		if     (getenv('HTTP_CLIENT_IP'))       { $ip = getenv('HTTP_CLIENT_IP');       } 
		elseif (getenv('HTTP_X_FORWARDED_FOR')) { $ip = getenv('HTTP_X_FORWARDED_FOR'); } 
		elseif (getenv('HTTP_X_FORWARDED'))     { $ip = getenv('HTTP_X_FORWARDED');     } 
		elseif (getenv('HTTP_FORWARDED_FOR'))   { $ip = getenv('HTTP_FORWARDED_FOR');   } 
		elseif (getenv('HTTP_FORWARDED'))       { $ip = getenv('HTTP_FORWARDED');       } 
										   else { $ip = $_SERVER['REMOTE_ADDR'];        } 
		return $ip;
	}
?>