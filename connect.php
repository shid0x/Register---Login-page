<?php
$connection = mysqli_connect('localhost', 'root','','osirose');
// checking if it works

if (mysqli_connect_errno()) {
	
	printf("could not connect to the database",mysqli_connect_error());
	exit();
	
}



?>