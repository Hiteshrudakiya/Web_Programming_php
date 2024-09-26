<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<input type="number" name="f">
		<input type="submit" name="s">
	</form>

</body>
</html>
<?php 

	if(isset($_REQUEST['s'])){
				$f=$_REQUEST['f'];
				$factorial=1;

				for($a=$f;$a>=1;$a--)
				{
					$factorial=$factorial*$a;

				}
				echo $factorial;
	}


?>