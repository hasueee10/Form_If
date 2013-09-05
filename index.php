<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form handling with IF Satement</title>
	<style>

		body{
			background-color: #012e3e;
		}
		div {
			background-color: #0093F0;
			width: 500px;
			padding: 30px;
			margin: 50px auto;
			color: #fff;
			border: 1px solid #000;
				-moz-border-radius: 10px;
				-webkit-border-radius: 10px;
				-o-border-radius: 10px;
			border-radius: 10px;
			box-shadow: 5px 5px 10px #000;
		}

		div form fieldset{
			border: 2px solid #fff;
				-moz-border-radius: 10px;
				-webkit-border-radius: 10px;
				-o-border-radius: 10px;
			border-radius: 10px;
			padding: 15px;
		}
		div form fieldset legend{
			font-family: Arial, sans-serif;
			font-size: 20px;
			color: #fff;
		}
				
		h1 {
			font-family: Arial, sans-serif;
			font-size: 45px;
			color: #f97704;
			padding-left: 30px;
			width: 600px;
			margin: 0 auto;
			text-shadow: 3px 3px 5px #000;
		} 
	</style>
</head>
<body>
	<div>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<fieldset>
				<legend>Get Rsult</legend>
				<input type="text" name="mark" id="mrk" autofocus placeholder="Input number" title="Input Your Number">
				<input type="submit" value="Get Result">
			</fieldset>
		</form>
	</div>


<?php 

	if (isset($_POST["mark"]) && is_numeric($_POST["mark"])== true){ 
    $mark= $_POST["mark"];
	$pass= 33;
	$fullMark= 100;
	if($mark>=$pass && $mark<=$fullMark) {
		echo "<h1>You have passed the exam and obtained"." $mark"." numbers.</h1>";	
		}
	elseif($mark>$fullMark){
		echo "<h1>You have entered an invalid number.</h1>";
		}
	else {
		echo "<h1>You have failed the exam and obtained"." $mark"." numbers.</h1>";
		}
	}
?>
</body>
</html>
