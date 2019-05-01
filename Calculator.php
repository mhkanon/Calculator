<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
	
	<style type="text/css">
	
		body{
			background:lightblue;
			text-align:center;
		}
		h2{
			color:;
			font-size:45px;
			
		}
		.foter{
			margin-top:170px;
			color: #f109e3;
			font-size:45px;
		}
		
	</style>
</head>
<body>
	
	<form action="" method="post">
		
		<p style="color:red; font-size:45px;"><i>Calculator</i></p>
		
		<input type="text" name="box1" placeholder="Enter Number Only" required="required" style="background:#cbf328; font-size:15px;" onkeyup="this.value=this.value.replace(/[^\d]/,'')" />
		<input type="text" name="box2" placeholder="Enter Number Only" required="required" style="background:#cbf328; font-size:15px;" onkeyup="this.value=this.value.replace(/[^\d]/,'')" />
		
		<input style="background:red; font-size:15px;" type="submit" name="p1" value="+" />
		<input style="background:yellow; font-size:15px;" type="submit" name="p1" value="-" />
		<input style="background:green; font-size:15px;" type="submit" name="p1" value="*" />
		<input style="background:blue; font-size:15px;" type="submit" name="p1" value="/" />

	</form>
	
	<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
	$box1 = $_POST['box1'];
	$box2 = $_POST['box2'];
		
	$p1 = $_POST['p1'];
	
	$plus = $box1 + $box2;
	$minus = $box1 - $box2;
	$dot = $box1 * $box2;
	$divition = $box1 / $box2;
		
		if($p1 == "+"){
		echo "<h2>$box1 + $box2 = $plus</h2>";
		}elseif
			($p1 == "-"){
			echo "<h2>$box1 - $box2 = $minus</h2>";	
		}elseif
			($p1 == "*"){
			echo "<h2>$box1 x $box2 = $dot</h2>";	
		}elseif
			($p1 == "/"){
			echo "<h2>$box1 / $box2 = $divition</h2>";	
		}

	}	
?>
	<p class="foter"><i>Created by kanon</i></p>
</body>
</html>


