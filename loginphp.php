<?php

	include('connect.php');
	if(isset($_POST['submit'])){
		$player1 = $_POST['player1'];
		$teamid = $_POST['teamid'];
		$row = mysqli_query($connect,"SELECT * from login where player1='$player1' and teamid='$teamid'") or die("failed : ".mysqli_error($row));
		$data = mysqli_fetch_array($row);
		if(($data['player1'] == $player1)&&($data['teamid'] == $teamid))
		{
			$_SESSION['login'] = 1;
			$_SESSION['team'] = $teamid;
			$name = $_SESSION['player1'];
			$_SESSION['player1'] = $player1;
		 	date_default_timezone_set('Asia/Kolkata');
		 	$time = date("Y-m-d  H:i:sa");
		 	$_SESSION['logintime'] = $time;
			header("location:fastFinger1.php");
		}
		else
		{
			$_SESSION['login'] = 0;
			echo "<script type='text/javascript'>alert('Incorrect Username and Password');
			window.location.assign('index.php');</script>";
		}
	}

?>