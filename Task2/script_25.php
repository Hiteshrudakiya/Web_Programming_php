<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<form method="post">
			<input type="number" name="value1">
			<input type="number" name="value2">
			<input type="submit" name="submit">
		</form>
</body>
</html>
<?php 
		if (isset($_POST['value1'])) {
			// code...
			$a=$_POST['value1'];
			$b=$_POST['value2'];

			$a=$a+$b;  
			$b=$a-$b;  
			$a=$a-$b;  
			echo "first is $a";
			echo "secord is $b";	
		}

?>