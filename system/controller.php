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
                $img = "post-sample-image";
				$table = "articles";
				$order = "id";
				$quantity = 100;
                $h1 = "There is nothing here that you might not know";
				$span = "It's true";
				$all = withdraw($connection, $table, $order, $quantity);
				$title = 'All posts';
				break;
                
            case('full'):
                $img = "post-bg";
                $table = "articles";
				$order = "id";
				$quantity = 1;
                $full = full($connection, $table, $order, $quantity);
                $h1 = "Note";
                $span = "Look at that shit";
                $title = $full['title'];
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