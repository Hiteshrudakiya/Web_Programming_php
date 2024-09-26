<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<form method="post">
		<input type="text" name="value1">
		<input type="submit" name="submit">
		</form>

</body>
</html>
<?php 
	if (isset($_POST['submit'])) {
		$input=$_POST['value1'];
		$a=$input;
		$b=1;
		while($a>$b){
			$a=($a+$b)/2;
			$b=$input/$a;
		}
		echo $a;
	}

?>