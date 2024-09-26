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
			<input type="text" name="value2">
			<input type="text" name="value3">
			<input type="submit" name="submit">
		</form>
</body>
</html>
<?php 
		if (isset($_POST['submit'])) {
			$value1=$_REQUEST['value1'];
			$value2=$_REQUEST['value2'];
			$value3=$_REQUEST['value3'];

			$maxNumber = max($value1, $value2, $value3); 
			echo "The largest number among three is: $maxNumber\n"; 
  
		}

?>