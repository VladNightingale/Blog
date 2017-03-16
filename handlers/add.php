<?php 

	include_once(dirname(__FILE__).'/../config.php');


		$title = $_POST['title'];
		$m_desc = $_POST['m_desc'];
		$full = $_POST['full'];
		



		if($_POST['submit'])
		{
	
			header("Location:/admin/admin.php");
		}

		$query = "INSERT INTO `articles` (`id`, `title`, `m_desc`, `full`) VALUES (NULL, '$title', '$m_desc', '$full')";
		mysqli_query($connection, $query);


 ?>