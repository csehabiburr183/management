<?php
$host= "localhost";
$user= "root";
$pass= '';
$db= "management";
	$conn= mysqli_connect($host, $user, $pass, $db);
	if (!$conn)
	{
	 	die("Error To Connected Database" . mysqli_connect_error());
    }
?>