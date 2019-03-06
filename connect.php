<?php
		$server = "localhost";
		$username = "root";
		$dbpass = "";
		$dbname = "login";

		$connect  = mysqli_connect($server,$username,$dbpass,$dbname) or die("Failed to Connect!");
		
		session_start();
?>