<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form>
		<input type="enter year" name="year">
		<input type="submit" name="s">
	</form>

</body>
</html>
<?php

	if(isset($_REQUEST['s'])){
		$year=$_REQUEST['year'];

		if ($year % 4 == 0) {
			echo "leap";
		}
		else{
			echo " not leap";
		}

}
?>