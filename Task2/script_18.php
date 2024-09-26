<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body><form>
		<input type="number" name="first" placeholder="enter first no">
		<input type="number" name="last" placeholder="enter last no">
		<input type="submit" name="s">
	</form>
</body>
</html>
<?php

	if(isset($_REQUEST['s'])){
		$f=$_REQUEST['first'];
		$l=$_REQUEST['last'];

		
		$num2 =rand($f,$l);
		echo $num2;

		}
	?>