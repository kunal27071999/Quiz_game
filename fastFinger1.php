<?php

include('connect.php');
if($_SESSION['login'] == 0){
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
<link rel ="stylesheet" type ="text/css" href = "animate.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel ="stylesheet" type ="text/css" href = "bootstrap.min.css">
	<script src ="popper.min.js"></script>
	<script src ="jquery.min.js"></script>
<link rel ="stylesheet" type ="text/css" href = "all.css">

<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> -->
<style>
/*input[type ='radio']{
	height
}*/
  input[type=radio] {
    border: 0;
    width: 3%;
    height: 1em;
}
input{
	margin-left:25px;
}

p{
	font-size:20px;
	font-weight:bold;
}

  .bimg{
	position:fixed;
	left:0;
	right:0;
	z-index:-1;
	background-image: url(mount.jpg);
	background-size:100%;
	height:100%;	
	-webkit-background-size:100%;
	filter:blur(5px);
}
	
	
</style>
	
	<script>
		$(function(){
			//$("#q1").css({"color":"#4a5f82"});
			$("#b,#c,#d,#e,#img2,#img3,#img4,#img5").hide();
		});

		$(function(){
			$("#q1").click(function(){
				$("#a,#img").show();

				$("#b,#c,#d,#e,#img3,#img2,#img5,#img4").hide();
				
			});

			$("#q1").mouseover(function(){
				$("#q1").addClass("animated pulse");
			});

				$("#q1").mouseout(function(){
				$("#q1").removeClass("animated pulse");
			});


		});

		$(function(){
			$("#q2").click(function(){
				$("#b,#img2").show();
				 //$("#q2").css({"color":"#4a5f82"});
				// $("#q1,#q3").css({"color":"#2e3238"});
				$("#a,#c,#d,#e,#img,#img3,#img4,#img5").hide();
			});

			$("#q2").mouseover(function(){
				$("#q2").addClass("animated pulse");
			});

				$("#q2").mouseout(function(){
				$("#q2").removeClass("animated pulse");
			});
		});

		$(function(){
			$("#q3").click(function(){
				$("#c,#img3").show();
				// $("#q2,#q1").css({"color":"#2e3238"});
				 //$("#q3").css({"color":"#4a5f82"});
				$("#b,#a,#e,#d,#img,#img2,#img4,#img5").hide();
			});

			$("#q3").mouseover(function(){
				$("#q3").addClass("animated pulse");
			});

				$("#q3").mouseout(function(){
				$("#q3").removeClass("animated pulse");
			});

		});

		$(function(){
			$("#q4").click(function(){
				$("#d,#img4").show();
				// $("#q2,#q1").css({"color":"#2e3238"});
				 //$("#q4").css({"color":"#4a5f82"});
				$("#b,#a,#e,#c,#img,#img2,#img3,#img5").hide();
			});

			$("#q4").mouseover(function(){
				$("#q4").addClass("animated pulse");
			});

				$("#q4").mouseout(function(){
				$("#q4").removeClass("animated pulse");
			});

		});

		$(function(){
			$("#q5").click(function(){
				$("#e,#img5").show();
				// $("#q2,#q1").css({"color":"#2e3238"});
				// $("#q5").css({"color":"#4a5f82"});
				$("#b,#a,#c,#d,#img,#img2,#img3,#img4").hide();
			});
			$("#q5").mouseover(function(){
				$("#q5").addClass("animated pulse");
			});

				$("#q5").mouseout(function(){
				$("#q5").removeClass("animated pulse");
			});

		});

		




	function test(){
		
		
		document.getElementById("q2").innerHTML = "Attempted";
		document.getElementById("q2").style.color ="green";
	}

	function test2(){
		document.getElementById("q1").innerHTML ="Attempted";
		document.getElementById("q1").style.color ="green";

	}

	function test3(){
		document.getElementById("q3").innerHTML ="Attempted";
		document.getElementById("q3").style.color ="green";

	}

	function test4(){
		document.getElementById("q4").innerHTML ="Attempted";
		document.getElementById("q4").style.color ="green";

	}

	function test5(){
		document.getElementById("q5").innerHTML ="Attempted";
		document.getElementById("q5").style.color ="green";

	}
	</script>
</head>


<body style ="overflow-x:hidden;">
<div class ="bimg"></div>	
	<div class = "row">
		<div class = "col-sm-1"></div>

		<div class = "col-sm-9" style="margin-left:60px;">			
<h2 class = "jumbotron" style = "margin-top:30px;text-shadow: 1px 1px 2px white, 0 0 25px red, 0 0 5px red;background-image:url('bk2.jpg');background-size:1280px 500px;font-size:60px;border-radius:      30px 30px 0px 0px;">
	<div class="row">
				<div class="col-sm-10" style="font-size: 4rem">
				Quick Clicks !
			</div>
			<div class="col-sm-2 animated flipInX" style ="animation-iteration-count:180;">
	<div id="timer" style="font-size: 4rem;">5:00</div>
					<script type="text/javascript">
						var timeoutHandle;
						function countdown(minutes) {
						    var seconds = 60;
						    var mins = minutes;
						    function tick() {
						        var counter = document.getElementById("timer");
						        var current_minutes = mins-1;
						        seconds--;
						        counter.innerHTML =
						        current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
						        if( seconds > 0 ) {
						            timeoutHandle=setTimeout(tick, 1000);
						        } else {

						            if(mins > 1){

						               // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
						               setTimeout(function () { countdown(mins - 1); }, 1000);

						            }
						        }
						    }


						    tick();
						}

						countdown(3);

						</script>
			</div>
</h2>
		<div class = "container" style = "margin-top:-32px;">
			<div class = "row" style ="background-image:url('wood6.png');background-size:1366px 768px;border-radius:0px 0px 30px 30px;">

				<div class = "col-sm-2.5">

			<h4 class = "container" style = "margin-top:25px;cursor:pointer;font-size:22px;" id = "q1">Question 1</h4>
			<hr style ="border-bottom:2px solid grey;">
			<h4 class = "container" id = "q2" style = "cursor:pointer;font-size:22px;">Question 2</h4>
			<hr style ="border-bottom:2px solid grey;">
			<h4 class = "container" id ="q3" style ="cursor:pointer;font-size:22px;">Question 3</h4>
			<hr style ="border-bottom:2px solid grey;">
			<h4 class = "container" id ="q4" style ="cursor:pointer;font-size:22px;">Question 4</h4>
			<hr style ="border-bottom:2px solid grey;">
			<h4 class = "container" id ="q5" style ="cursor:pointer;font-size:22px;">Question 5</h4>
			<hr style ="border-bottom:2px solid grey;">
					


		</div>
		<div class = "col-sm-1"></div>
		<div class = "col-sm-6"style = "margin-top:40px;">
			<form method="post" action="test1.php">
				<p id ="b" class = "animated jackInTheBox">Q2) Hottest Planet in solar system is:- <br><br> 
					<input  type ="radio" onclick="test();" name ="ans" value ="Venus"> Venus.<br><br>  
					<input type ="radio"  onclick="test();" name = "ans" value ="Earth"> Earth.<br><br> 
					<input type ="radio"  onclick="test();" name = "ans" value ="Sun"> Sun.<br><br> 
					<input type ="radio"  onclick ="test();" name = "ans" value ="Mercury"> Mercury.</p>

				 <p id ="a" class ="animated jackInTheBox" >Q1) Washing soda is ? <br><br> 
				 	<input type ='radio' onclick="test2();" name ='ans1' value ='sodium sulphate'> sodium sulphate .<br><br>  
				 	<input type ='radio' onclick="test2();" name = 'ans1' value ='sodium bicarbonate'> sodium bicarbonate.<br><br> 
				 	<input type ='radio' onclick="test2();" name = 'ans1' value ='sodium carbonate'> sodium carbonate.<br><br> 
				 	<input type ='radio' onclick="test2();" name = 'ans1' value ='soduim biosulphate'> sodium biosulphate.</p>

				<p id ="c"class ="animated jackInTheBox"> Q3)  What was the name of first computer designed  by Charlse Babbage? <br><br> 
					<input type ='radio' onclick="test3();" name ='ans2' value ='Analytical Engine'> Analytical Engine .<br> <br> 
					<input type ='radio' onclick ="test3();" name = 'ans2' value ='Difference Engine'> 
	                Difference Engine.<br><br> 
					<input type ='radio' onclick="test3();" name = 'ans2' value ='ENIAC'> ENIAC.<br><br> 
					<input type ='radio' onclick="test3();" name = 'ans2' value ='Colossus'> Colossus.</p>
			

				<p id ="d"class ="animated jackInTheBox"> Q4) The Longest mountain range in the world is:- <br><br>
					<input type ='radio' onclick="test4();" name ='ans3' value ='The Alps'> The Alps.<br><br>  
					<input type ='radio' onclick ="test4();" name = 'ans3' value ='The Himalayas'> The Himalayas.<br><br> 
					<input type ='radio' onclick="test4();" name = 'ans3' value ='The Andes'> The Andes.<br><br> 
					<input type ='radio' onclick="test4();" name = 'ans3' value ='The Rockies'> The Rockies.</p>

				<p id ="e"class ="animated jackInTheBox">Q5) Which one of the following is an element:- <br><br> 
					<input type ='radio' onclick="test5();" name ='ans4' value ='Topaz'> Topaz.<br><br>  
					<input type ='radio' onclick ="test5();" name = 'ans4' value ='Diamond'> Diamond.<br><br> 
					<input type ='radio' onclick="test5();" name = 'ans4' value ='Ruby'> Ruby.<br><br> 
					<input type ='radio' onclick="test5();" name = 'ans4' value ='Sapphire'> Sapphire.</p>
			
					 <div class = "row">
					<div class ="col-sm-5"></div>
					<div class ="col-sm-4">
						<br><br>
				<p id ="but"><button type="submit" name="submit" class ="btn btn-success btn-lg container">Submit</button></p>
				    </div>
				</div> 
			</form>

		</div>
		<div class ="col-sm-3" style = "margin-top:40px;"><img id="img" style ="height:300px;width:340px;border-radius:15px;margin-left:-40px;" src="1.gif">

			<img id="img2" style ="height:300px;width:340px;border-radius:15px;margin-left:-40px;" src="giphy.gif">

			<img id="img3" style ="height:300px;width:340px;border-radius:15px;margin-left:-40px;" src="sharin.gif">

			<img id="img4" style ="height:300px;width:340px;border-radius:15px;margin-left:-40px;" src="jim.gif">
			<img id="img5" style ="height:300px;width:340px;border-radius:15px;margin-left:-40px;" src="bean.gif">

		</div>
</div>
	</div>
</body>
</html>