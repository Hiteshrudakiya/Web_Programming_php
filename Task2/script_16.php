<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
		<form>
			<label>enter string</label>
			<input type="text" name="str">
			<input type="submit" name="s">

		</form>
</body>
</html>

<?php

	if(isset($_REQUEST['s'])){
		$str=$_REQUEST['str'];


$str=strtolower($str);
$vowelcount=0;

for($i=0;$i<strlen($str);$i++){
	if (in_array($str[$i],["a","i","u","e","o"])) {
		$vowelcount++;
	}
}

echo $vowelcount;
}

?>