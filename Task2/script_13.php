<html>
<body>

	<form action="#" method="get">
		Enter celsius : <input type="text" name="celsius"><br>
		
		<input type="submit" name="s">

	</form>

</body>
</html>

<?php
	if(isset($_REQUEST['s'])){
		$cl=$_REQUEST['celsius'];
		
		echo ($cl*(9/5)+32);
}
?>