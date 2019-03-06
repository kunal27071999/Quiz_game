<?php

include('connect.php');

?>

<html>
<head>
	<meta charset="utf-8">
	<link rel ="stylesheet" type ="text/css" href = "animate.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel ="stylesheet" type ="text/css" href = "bootstrap.min.css">
	<script src ="popper.min.js"></script>
	<script src ="jquery.min.js"></script>
<link rel ="stylesheet" type ="text/css" href = "all.css">
	

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> -->
<style>

  .bimg{
	position:fixed;
	left:0;
	right:0;
	z-index:-1;
	background-image: url(grass2.jpg);
	background-size:100%;
	height:700px;	
	-webkit-background-size:100%;
	filter:blur(5px);
	
	}
.box{
   width:200px;
   height:35px;
	font-size:18px;
	border-radius:7px;
	padding-left:10px;
	}
.img{
	background-image:url("uni.jpg");
	background-size:cover;
	filter:blur(0px);
	}
	.img2{
			background-image:url("grass2.jpg");
	background-size:cover;
	}
	.blur{
		filter:blur(1px);
	}
	
	#test{
		animation-delay:0.2s;
		}
			
</style>
<script>
		 function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
	</script>
	<script>
		$(function(){
	
		$("#log").mouseover(function(){
			$("#log").addClass("animated pulse");
			});
			
			$("#log").mouseout(function(){
			$("#log").removeClass("animated pulse");
			});
	});
	</script>
</head>
<body>
<div class ="bimg"></div>

<div class = "row">
<div class = "col-sm-4">
</div>
<div class = "col-sm-5">
<div class="container">

  <div class = "card animated rubberBand" id ="test" style = "box-shaow: 1px 1px 10px 10px rgba(0, 0, 255, .2);margin-top:10%">
  	<center>
  	<h2 class = "site_title mega"><center style ="color:#007bff;margin-top:1.5rem;">Welcome To Registration!!</center></h2><br>
   <form method = "post" action="registerphp.php">
   <center><img src="register.png" style="height:150px;width:150px;margin-top:0.5rem;margin-bottom:0.5rem"></center>
   <div class="form-group animated bounceInLeft" id ="test"><br>
     <p style = "padding-left:12px;" class = "container"><input type="text" style ="opacity:0.8;width:80%" required title = "username must be lowercase and more than 5 characters"  class="form-control" id = "name" placeholder="Player 1" name="player1"></p>
    </div>
	
	<div class="form-group animated bounceInRight" id ="test">
      <p style = "padding-left:12px;"  class = "container"><input type="text" style ="opacity:0.8;width:80%" pattern = ".{6,}" title = "length of password must be six or more than six characters" required class="form-control" id="Password" placeholder="Player 2" name="player2"></p>
    </div>
	
	  <div class="form-group animated bounceInLeft" id ="test">
      <p style = "padding-left:12px;"  class = "container"><input type="text" style ="opacity:0.8;width:80%" class="form-control" required id = "Email" placeholder="Team ID" name="teamid"></p>
    </div>
    
	<div class="form-group animated bounceInRight" id = "test">
      <p style = "padding-left:12px;"  class = "container"><input type="number" style ="opacity:0.8;width:80%" required class="form-control" id="Phone" placeholder="Contact Number" name="contact"></p>
    </div>
    <div class = "container row">
	  <div class ="col-sm-1"></div>
    <p class = "col-sm-5"><button type="submit"  id ="test" name="submit" style ="text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;font-size:17px" class="btn btn-success btn-block animated flip">Submit</button></p>
	<p class = "col-sm-5"><button type="reset" id ="test" style = "margin-left:20px;background-color:#009688;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;font-size:17px" class="btn btn-primary btn-block animated flip">Reset</button></p>
  </div>
  <h6 id ="log" style = "color:white;font-size:19px;" ><a href ="index.php">Already Register? Login!</a></h6>
  </form>
</center>
  </div>
 </div>
</div>
</div>
<script src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script>
<script src ="dta.js"></script>
</body>
</html>