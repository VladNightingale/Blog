<?php 
	
	$to = 'nightingale.vlad@gmail.com';
	$subject = $_POST['subject'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	if (isset($message) && $message !== 0)
	{
		
		header("Location:/url/contact.php");

	}

	 mail(  '$to' , '$subject' ,  '$message',"From: '$name' , '$email' \r\n");







 ?>