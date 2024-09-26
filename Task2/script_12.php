<html>
<body>

	<form action="#" method="get">
		Enter string : <input type="text" name="s1"><br>
		enter string : <input type="text" name=" s2"><br>
		<input type="submit" name="s">

	</form>

</body>
</html>

<?php
	if(isset($_REQUEST['s'])){
		$s1=$_REQUEST['s1'];
		$s2=$_REQUEST['s2'];
		echo $s1.$s2;
}
?>