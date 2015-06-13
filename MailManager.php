<?php
namespace Lukasss93PHP;

class MailManager
{
	private function __construct() { }
	
	public static function send($email_to,$email_object,$email_content,$set_from_name,$set_from_email)
	{
		//$set_from_name="Phoenix Network User Panel";
		//$set_from_email="no-reply@phoenixnetwork.it";		
		
		$header = "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html; charset=UTF-8\r\n"; 
		$header .= "From: ".$set_from_name." <".$set_from_email.">\r\n";
		$header .= "Reply-To: ".$set_from_email."\r\n";
		$header .= "Return-Path: ".$set_from_email."\r\n";
		$header .= "CC: ".$set_from_email."\r\n";
		$header .= "BCC: ".$set_from_email."\r\n";     
		$destinatario = $email_to;
		$oggetto = $email_object;
		$messaggio = '<html>
						<head>
							<title>'.$email_object.'</title>
						</head>
						<body>
						'.$email_content.'
							<br>                                 
							<br>
							<b>Perfavore non rispondere a questa email perchè fa parte di un sistema automatico.</b>
						</body>
					</html>';
						
		$result=mail($destinatario, $oggetto, $messaggio, $header);
		
		return $result;
	}
}

?>