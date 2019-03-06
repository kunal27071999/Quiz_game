
<?php

include('connect.php');

	if(isset($_POST['submit'])){

		$array = array();
		$questions = array();
	    if(isset($_POST['ans'])){
	    	array_push($array, $_POST['ans']);
	    	array_push($questions,1);	    }
	    if(isset($_POST['ans1'])){
	    	array_push($array, $_POST['ans1']);
	    	array_push($questions,2);
	    }
	    if(isset($_POST['ans2'])){
	    	array_push($array, $_POST['ans2']);
	    	array_push($questions, 3);
	    }
	    if(isset($_POST['ans3'])){
	    	array_push($array, $_POST['ans3']);
	    	array_push($questions, 4);
	    }
	    if(isset($_POST['ans4'])){
	    	array_push($array, $_POST['ans4']);
	    	array_push($questions, 5);
	    }

	    $answer = array("sodium carbonate", "Venus", "ENIAC", "The Andes", "Diamond");
	 	$i = 0;
	 	$n = count($questions);
	 	echo "<script>alert('Questions Attempted : ".$n."');</script>";

		if (in_array("sodium carbonate", $array)) {
		 	$i = $i + 1;
	 	}
	 	if (in_array("Venus", $array)) {
		    $i = $i + 1;
	 	}
	 	if (in_array("ENIAC", $array)) {
	 		$i = $i + 1;
	 	}
	 	if (in_array("The Andes", $array)) {
	 		$i = $i + 1;
	 	}
	 	if (in_array("Diamond", $array)) {
	 		$i = $i + 1;
	 	}

	 	$id = $_SESSION['team'];
	 	$player = $_SESSION['player1'];
	 	date_default_timezone_set('Asia/Kolkata');
	 	$time = $_SESSION['logintime'];
	 	echo $id;
	 	echo $player;
	 	echo $time;


	 	$insert = mysqli_query($connect,"INSERT INTO fastfinger(player1,logintime,logouttime,answered) values('$player','$time',NOW(),'$i');") or die("Failed to Write!");
	 	if($insert){
	 		echo "<script>alert('Game scores Submitted!');
	 		window.location.assign('index.php');</script>";
	 	}
	 }

?>