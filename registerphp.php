<?php
	
	include('connect.php');

	 $player1 = $_POST['player1'];
	 $player2 = $_POST['player2'];
	 $teamid = $_POST['teamid'];
	 $contact = $_POST['contact'];


	$query = "INSERT INTO login(player1,player2,teamid,contact) VALUES('$player1','$player2','$teamid','$contact')";
	$insert = mysqli_query($connect,$query);
	if($insert){
		echo '<script>alert("Registered Successfully!!");
		window.location.assign("index.php");
		</script>';
	}else{
		 die('error inserting data'.mysqli_error($insert));	
	}


?>