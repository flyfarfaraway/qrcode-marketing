<?php 
	ini_set("SMTP", "smtp.qrcode-marketing.com");
	ini_set("sendmail_from", "ftp@qrcode-marketing.com");
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "ftp@qrcode-marketing.com";
    $to = "tungbk29@gmail.com";
    $subject = "PHP Mail Test script";
    $message = "This is a test to check the PHP Mail functionality";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Test email sent";
?>