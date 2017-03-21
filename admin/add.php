<?php 

	include_once(dirname(__FILE__).'/../config.php');

        
		$title = $_POST['title'];
		$m_desc = $_POST['m_desc'];
		$full = $_POST['full'];
        $date = date(Y."-".m."-".d);
		

		$query = "INSERT INTO `articles` (`id`, `title`, `m_desc`, `full`, `date`) VALUES (NULL, '$title', '$m_desc', '$full', '$date')";
        mysqli_query($connection, $query);



		if($_POST['submit'])
		{
			header("Location:admin.php");
		}

		


 ?>