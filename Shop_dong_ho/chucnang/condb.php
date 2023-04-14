<?php
	$host ="localhost";
	$root ="root";
	$password = "";
	$database = "web2";
	$conn = mysqli_connect($host,$root,$password,$database);
	 if(mysqli_connect_errno()){
	 	echo "connect" .mysqli_connect_errno();
	 }

	 
  ?>