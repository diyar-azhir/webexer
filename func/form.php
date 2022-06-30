<?php

	namespace Dar;

	// define variables and set to empty values
	$name = $email = $message = "";
	$nameErr = $emailErr = $msgErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
			$nameErr = "Only letters and white space allowed";
		}
	  
	  
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format";
		}
	  
	  
		$msg = $_POST["message"];
		$msg_2 = trim($msg);
		$bol = empty($msg_2);
		// $message = test_input($_POST["message"]);
		if ($bol) {
			$msgErr = " (Message is required)";
		} else {
			$message = test_input($_POST["message"]);
			save_memo($message);
		}
	  
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	function save_memo($message)
	{
		
		// include 'Dar.php';
		
		$user_2 = new User();
	
		$user_ip_2 = $user_2->getUserIP();
	
		// $user->appendToMem($user_ip);
		
		$fp = fopen('func/msg.txt', 'a');//opens file in append mode.
		$strr = $message . "\n" . $user_ip_2 . " - " . date('Y-m-d') . " - " . date('H:i') . "\n\n\n";
		fwrite($fp, $strr);
		fclose($fp);
		
	}
	
?>