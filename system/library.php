<?php 

//Функция заносит данные из БД в массив all
	function withdraw($connection, $table, $order, $quantity)
	{
		$query = "SELECT * FROM `$table` ORDER BY `$table`.`$order` DESC LIMIT $quantity";
		$gotta = mysqli_query($connection, $query);

		while($result = mysqli_fetch_assoc($gotta))
		{
			$withdraw[] = $result;
		};

		return $withdraw;
	}




//Функция выбирает из БД статью с нужным id и записывает в массив full
	function full($connection)
	{
		if(!isset($_GET['id']))
		{
			$id = 1;
		}
		else
		{
			$id = $_GET['id'];
		}

		$query = "SELECT * FROM `articles` WHERE `id`=$id";
		$gotta = mysqli_query($connection,$query);


		$full = mysqli_fetch_assoc($gotta);

		return $full;
	}

	function comments($connection)
	{
		$name = $_POST['name'];
		$comment = $_POST['comment'];

		$firstQuery = "INSERT INTO `reports` (`id`, `name`, `report`, `date`) VALUES (NULL, '$name', '$comment', NULL)";
		mysqli_query($connection, $firstQuery);

		$table = "reports";
		$order = "id";
		$quantity = 1000000;

		$comments = withdraw($connection, $table, $order, $quantity);
		return $comments;

	}

	

 ?>