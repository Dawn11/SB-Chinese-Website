<?php
//
//function getConfig(){
//
//// IF false : SMTP host/port/user/pass/ssl not used, leave empty or as it is!
//    $config['use_smtp']				= true;						// true|false
//    $config['smtp_host'] 			= 'smtp.gmail.com';
//    $config['smtp_port'] 			= 465;
//    $config['smtp_user'] 			= 'smartburn.message@gmail.com';
//    $config['smtp_pass'] 			= 'Mbj6Zr#wk#9DDxbm';
//    $config['smtp_ssl']				= true;
//    $config['subject']				= 'Web Message';	// default subject
//
//    $config['send_to']				= 'yichi.liu@smartburn.com';		// address to receive messages
//
//    return $config;
//}
//
//?>



<?php

function getConfig(){

// IF false : SMTP host/port/user/pass/ssl not used, leave empty or as it is!
    $config['use_smtp']				= true;						// true|false
    $config['smtp_host'] 			= 'localhost';
    $config['smtp_port'] 			= 25;
    $config['smtp_user'] 			= 'mailuser';
    $config['smtp_pass'] 			= 'Sb_Ml2015';
    $config['smtp_ssl']				= false;
    $config['subject']				= 'Web Message';	// default subject

    $config['send_to']				= 'yichi.liu@smartburn.com';		// address to receive messages

    return $config;
}

?>