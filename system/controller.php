<?php 
	
	include LIBRARY;


	if(!$_GET['page'])
	{
		$view = 'main';
	}
	else
	{
		$view = $_GET['page'];
	}

		switch($view)
		{
			case('all'):
				$table = "articles";
				$order = "id";
				$quantity = 100;
				$all = withdraw($connection, $table, $order, $quantity);
				$title = 'All';
				break;

			case('best'):
				$img = "post-sample-image";
				$h1 = "Man who sold the world";
				$span = "It's true";
				$title = 'Best post';
				break;

			case('about'):
				$h1 = "About me";
				$title = "About me";
				$img = "about-bg";
				$span = "There is nothing interesting here";
				break;

			case('contact'):
				$h1 = "Contact";
				$title = "Contact";
				$img = "contact-bg";
				$span = "Do you have any questions for me?";
				break;

			default:
				$view = 'main';
				$table = "articles";
				$order = "id";
				$quantity = 4;
				$main = withdraw($connection, $table, $order, $quantity);
				$title = "Nightingale's diary";
				$h1 = "Blog";
				$img = "home-bg";
				$span = "How i stole the bootstrap template";
				break;
		}


	include PAGE;

 ?>