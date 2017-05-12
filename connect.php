<?php
	$connect = mysqli_connect($host,$username,$password,$db);

	if(mysqli_connect_errno()){
		die("Nemozi da se konektiras " . mysqli_connect_error());
	}
?>