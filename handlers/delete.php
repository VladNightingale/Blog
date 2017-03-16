<?php 

	include_once(dirname(__FILE__).'/../config.php');


		$title = $_POST['title'];
		



		if($_POST['submit'])
		{
	
			header("Location:/admin/admin.php");
		}

		$query = "DELETE FROM `articles` WHERE `title` = '$title'";
		mysqli_query($connection, $query);


 ?>