<?php 


	define('DOMEN', 'http://'.$_SERVER['HTTP_HOST'].'/');
	define('SYSTEM', 'system/');
	define('CONTROLLER', SYSTEM.'controller.php');
	define('LIBRARY', SYSTEM.'library.php');
	define('VIEWS', 'views/');
	define('PAGE', VIEWS.'page.php');
	


	define('HOST', '127.0.0.1:3306');
	define('USER', 'root');
	define('PASS', '');
	define('NAME', 'Nightingale');
	define('APP', 'Blog');

	$connection = mysqli_connect(HOST, USER, PASS, NAME);

	if($connection == false)
	{
		die('Невозможно подключиться к БД');
	}

//После подключения к БД нужно задать кодировку
	mysqli_query($connection,"SET NAMES UTF8");








 ?>