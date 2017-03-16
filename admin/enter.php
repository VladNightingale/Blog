<?php
session_start();

if($_SESSION['admin']){
	header("Location: admin.php");
	exit;
}

$admin = 'Nightingale';
$pass = '5f4dcc3b5aa765d61d8327deb882cf99';

if($_POST['submit']){
	if($admin == $_POST['user'] AND $pass == md5($_POST['pass'])){
		$_SESSION['admin'] = $admin;
		header("Location: admin.php");
		exit;
	}else echo '<p>Uncorrect</p>';
}
?>
<title>Sign up</title>
<link rel="shortcut icon" href="/images/main.png" type="image/x-icon">
<p><a href="/index.php">Main</a>
<hr />
Enter you login and password.
<br />
<form method="post">
	Username: <input type="text" name="user" /><br />
	Password: <input type="password" name="pass" /><br />
	<input type="submit" name="submit" value="Sign up" />
</form>