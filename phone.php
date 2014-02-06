<?php 
$break = '
';
$subject = '[Showtime Events]';
if(isset($_POST['email'])) {
	$name = @$_POST['name'];
	$phone = @$_POST['phn'];
	$id = @$_POST['email'];
	$email = @$_POST['message'];
	
	$message = $break; 
	$message .= 'Name: '.$name.$break;
	$message .= 'Phone Number: '.$phone.$break;
	$message .= 'Email id: '.$id.$break;
	$message .= 'Message: '.$email.$break; 
	$message .= 'IP: '.$_SERVER['REMOTE_ADDR'].$break; 
	$message .= 'Request URL: '.$_SERVER["HTTP_REFERER"].$break; 
	$result = mail('lovetohear@showtimegoup.me', $subject, $message);
	var_dump($result);
	if($result) {
		$url = 'Location: '.$_SERVER["HTTP_REFERER"].'?c=true';	
		header($url);
	}	
}
?>