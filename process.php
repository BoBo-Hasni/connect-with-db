<?php
	require("db.php");
	mysql_connect("localhost","root","02021352") or die(mysql_error());
	mysql_select_db("login") or die(mysql_error());
	
	
		$email = $_POST['email'];
		$password = $_POST['pass'];
   
	mysql_query("insert into login (email,pass) values ('$email','$password')") or die(mysql_error());



?>
