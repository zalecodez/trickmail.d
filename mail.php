<!DOCTYPE HTML>

<html>
	<head>
	<head>
	
	<body>
		<?php
			$mailfrom = $_POST["sender"];
			$rcptto = $_POST["receiver"];
			$subject = $_POST["subject"];
			$data = $_POST["data"]."\n\n\n[SENT FROM TRICKMAIL - NOT REAL EMAIL - FOR THE LOLZ]";

			$headers = "From: ".$mailfrom;

			mail($rcptto, $subject, $data, $headers);
		?>
	<body>
</html>
