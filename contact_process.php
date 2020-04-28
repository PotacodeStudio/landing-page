<?php
    $reciever_1 = "potacode.studio@gmail.com";
    $reciever_2 = "tresnadery@gmail.com";
    $reciever_3 = "rahmatthea5@gmail.com";
    $reciever_4 = "franslevi008@gmail.com";
    $reciever_5 = "pripuni824@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // $subject = "You have a message from your Bitmap Photography.";

    $logo = 'img/logo.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $status_1 = mail($reciever_1, $subject, $body, $headers);
    if (!$status_1) {
        $errorMessage = error_get_last()['message'];
        return $errorMessage;
    }
    
    $status_2 = mail($reciever_2, $subject, $body, $headers);
    if (!$status_2) {
        $errorMessage = error_get_last()['message'];
        return $errorMessage;
    }
    
    $status_3 = mail($reciever_3, $subject, $body, $headers);
    if (!$status_3) {
        $errorMessage = error_get_last()['message'];
        return $errorMessage;
    }
    
    $status_4 = mail($reciever_4, $subject, $body, $headers);    
    if (!$status_4) {
        $errorMessage = error_get_last()['message'];
        return $errorMessage;
    }
    
    $status_5 = mail($reciever_5, $subject, $body, $headers);
    if (!$status_5) {
        $errorMessage = error_get_last()['message'];
        return $errorMessage;
    }                
    ?>

?>