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
  	<script type="text/javascript">
	function noenter() {
	  return !(window.event && window.event.keyCode == 13); 
	}
</script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<style>
/*input[type ='radio']{
	height
}*/
input{
	margin-left:30px;
}

p{
	font-size:20px;
	font-weight:bold;
}

</style>
	
	<script>
		$(function(){
			$("#q1").css({"color":"#4a5f82"});
			$("#b,#c").hide();
		});

		$(function(){
			$("#q1").click(function(){
				$("#a").show();
				$("#b,#c").hide();
				
			});

		});

		$(function(){
			$("#q2").click(function(){
				$("#b").show();
				 $("#q2").css({"color":"#4a5f82"});
				// $("#q1,#q3").css({"color":"#2e3238"});
				$("#a,#c").hide();
			});
		});

		$(function(){
			$("#q3").click(function(){
				$("#c").show();
				// $("#q2,#q1").css({"color":"#2e3238"});
				 $("#q3").css({"color":"#4a5f82"});
				$("#b,#a").hide();
			});
		});
	</script>
</head>


<body style = "background-image:url('mod.jpg');background-size:cover;">	
	<div class = "row">
		<div class = "col-1"></div>

		<div class = "col-10">

			
<h2 class = "jumbotron bg-info rounded" style = "margin-top:60px;text-shadow: 1px 1px 2px white, 0 0 25px blue, 0 0 5px darkblue;">
		<div class="row">
			<div class="col-10" style="font-size: 4rem">
				Fastest Finger First
			</div>

			<div class="col-2">
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

						countdown(1);

						</script>
			</div>
		</div>
		</h2>
		<div class = "card container" style = "margin-top:-32px;">
			<div class = "row" >
				<div class = "col-2.5 card">

			<h4 class = "container" style = "margin-top:40px;cursor:pointer;" id = "q1">Question 1</h4>
			<hr>
			<h4 class = "container" id = "q2" style = "cursor:pointer;">Question 2</h4>
			<hr>
			<h4 class = "container" id ="q3" style ="cursor:pointer;">Question 3</h4>
			<hr>
			<h4 class = "container" class = "container" id ="q3" style ="cursor:pointer;">Question 3</h4>
					


		</div>
		<div class = "col-1"></div>
		<div class = "col-8"style = "margin-top:40px;">
				<form method="post" action="test1.php">

					<p id ="a">Q1) Hottest Planet in solar system is:- <br><br>
					<input onkeypress="return noenter()" type ="radio" name ="radio" value ="Venus"> Venus.<br><br>  
					<input onkeypress="return noenter()" type ="radio" name = "radio" value ="Earth"> Earth.<br><br> 
					<input onkeypress="return noenter()" type ="radio" name = "radio" value ="Sun"> Sun.<br><br> 
					<input onkeypress="return noenter()" type ="radio" name = "radio" value ="Mercury"> Mercury.</p>

				 	<p id ="b">Q2) Hottest Planet in solar system is:- <br><br> 
				 	<input onkeypress="return noenter()" type ='radio' onclick="test2();" name ='radio1' value ='venus'> Venus.<br><br>  
				 	<input onkeypress="return noenter()" type ='radio' onclick="test2();" name = 'radio1' value ='Earth'> Earth.<br><br> 
				 	<input onkeypress="return noenter()" type ='radio' onclick="test2();" name = 'radio1' value ='Sun'> Sun.<br><br> 
				 	<input type ='radio' onclick="test2();" name = 'radio1' value ='Mercury'> Mercury.</p>

					<p id ="c"> Q3) Hottest Planet in solar system is:- <br><br> 
					<input onkeypress="return noenter()" type ='radio' onclick="test3();" name ='radio2' value ='venus'> Venus.<br><br>  
					<input onkeypress="return noenter()" type ='radio' onclick ="test3();" name = 'radio2' value ='Earth'> Earth.<br><br> 
					<input onkeypress="return noenter()" type ='radio' onclick="test3();" name = 'radio2' value ='Sun'> Sun.<br><br> 
					<input onkeypress="return noenter()" type ='radio' onclick="test3();" name = 'radio2' value ='Mercury'> Mercury.</p>

					<p id ="c"> Q3) Hottest Planet in solar system is:- <br><br> 
					<input onkeypress="return noenter()" type ='radio' onclick="test3();" name ='radio3' value ='venus'> Venus.<br><br>  
					<input onkeypress="return noenter()" type ='radio' onclick ="test3();" name = 'radio3' value ='Earth'> Earth.<br><br> 
					<input onkeypress="return noenter()" type ='radio' onclick="test3();" name = 'radio3' value ='Sun'> Sun.<br><br> 
					<input onkeypress="return noenter()" type ='radio' onclick="test3();" name = 'radio3' value ='Mercury'> Mercury.</p>

					<p id ="c"> Q3) Hottest Planet in solar system is:- <br><br> 
					<input onkeypress="return noenter()" type ='radio' onclick="test3();" name ='radio4' value ='venus'> Venus.<br><br>  
					<input onkeypress="return noenter()" type ='radio' onclick ="test3();" name = 'radio4' value ='Earth'> Earth.<br><br> 
					<input onkeypress="return noenter()" type ='radio' onclick="test3();" name = 'radio4' value ='Sun'> Sun.<br><br> 
					<input onkeypress="return noenter()" type ='radio' onclick="test3();" name = 'radio4' value ='Mercury'> Mercury.</p>
					<button type="submit" name="submit" class="btn btn-outline-success" style="margin-bottom:20px">Submit</button>
				</form>

		</div>
	</div>
</div>
	</div>
</div></div>

</body>
</html>