<html>
<body>

	<form action="#" method="get">
		Enter lenght : <input type="number" name="length"><br>
		enter widht : <input type="number" name=" width"><br>
		<input type="submit" name="s">

	</form>

</body>
</html>

<?php
	if(isset($_REQUEST['s'])){
		$l=$_REQUEST['length'];
		$w=$_REQUEST['width'];
		echo $l*$w;
}
?>