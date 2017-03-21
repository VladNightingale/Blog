<?php
require "auth.php";


?>
<title>Admin's panel</title>
<link rel="shortcut icon" href="/images/main.png" type="image/x-icon">
<a href="/index.php">Main</a> 
<a href="admin.php?do=logout">Sign out</a>

<br />

<br>
<h2>Add note</h2>
<form action="add.php" method="post">
	
	<input type="text" name="title" placeholder="title" ><br>
	<textarea name="m_desc" placeholder="Desc"></textarea><br>
	<textarea name="full" placeholder="Text" ></textarea><br>
	<input type="submit" name="submit" value="Add">

</form>
<br>
<h2>Delete note</h2>
<form action="/handlers/delete.php" method="post">
	<label>Title: <input type="text" name="title"></label>
	<input type="submit" name="submit" value="Delete">
</form>



