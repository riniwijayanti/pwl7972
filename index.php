<?php
	if(!empty($_POST['submit']))
	{
		$in_usr = 'admin123';
		$in_psw = 'rahasia';
		
		if(($_POST['usr'] == $in_usr && ($_POST['psw']) == $in_psw)){
			setcookie('usr',$in_usr,time()+3600);
			setcookie('psw',$in_psw,time()+3600);
			
			header ('location:admin.php');
		} else {
			echo '<h1> Login Gagal </h1>';
		}
	}
?>

<html>
	<head>
		<title> Form Login </title>
	</head>
	<h1> Form Login </h1>
	<body>
		<form name = "login" method = "POST" action = "login.php">
			<br> Username : <input type = "text" name = "usr">
			<br>
			<br> Password : <input type = "password" name = "psw">
			<br>
			<input type = "submit" name = "login" value = "Login">
		</form>
	</body>
</html>