<?php

include('connect.php');

?>

<html>
<head>
	<meta charset="utf-8">
	<link rel ="stylesheet" type ="text/css" href = "animate.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel ="stylesheet" type ="text/css" href = "all.css">
	<link rel ="stylesheet" type ="text/css" href = "bootstrap.min.css">
	<script src ="popper.min.js"></script>
	<script src ="jquery.min.js"></script>

<!--   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> -->
 <style>
	.bimg{
	position:fixed;
	left:0;
	right:0;
	z-index:-1;
	background-image: url(aul.jpg);
	background-size:cover;
	height:700px;	
	-webkit-background-size:100%;
	filter:blur(5px);
	}
 	.img2{
		background-image:url("aul.jpg");
		background-size:cover;
	}
	input{
		width: 80%;
	}
 </style>
 <script>
	$(function(){
	
		$("#test").mouseover(function(){
			$("#test").addClass("animated tada");
			});
			
			$("#test").mouseout(function(){
			$("#test").removeClass("animated tada");
			});
	});
	
			
 </script>
 
 </head>
 <body>
 <div class ="bimg"></div>
 <div class ="row">
 <div class ="col-sm-4"></div>
 <div class ="col-sm-4">
 <div class="container">
<br><br>
 <div class ="card animated flipIny" style ="margin-top:20%">
 <h2><center style = "color:orange;">Login Here!</center></h2>
  <form  method ="post" action="loginphp.php"><br>
    	<center><i  class="fas fa-user-lock fa-7x"></i></center><br>	
	    <center>
	    	<input type="text" class="form-control"placeholder="Player1" style="width:80%" name="player1" required><br>
		    <input type="text" class="form-control" placeholder="Team ID" style="width:80%" name="teamid" required><br>
		    <button type="submit" name ="submit" class="btn btn-primary btn-block" style ="color:white;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;font-size:18;width:30%">Login</button>
	    </center>
		<div class ="row">
			<div class ="col-sm-1">
				</div>
				<div class ="col-sm-10" id ="test" style ="color:white;font-size:18;margin-top:0.7rem"><a href ="register.php">Register now ?</a>
				</div>
			</div>
		<br>
  </form>
</div>
</div>
 </div>
 
 </body>
 </html>