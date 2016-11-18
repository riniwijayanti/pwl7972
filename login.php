<?php
	setcookie('usr','admin123',time()+3600);
	setcookie('psw','rahasia',time()+3600);
	
	echo '<h1> Cookie </h1>';
	echo 'Seta Data Cookie Berhasil!!!';
?>