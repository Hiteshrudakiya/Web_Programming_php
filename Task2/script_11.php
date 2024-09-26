<html>
<body>

	<form action="#" method="get">
		Enter number : <input type="number" name="no"><br>
		
		<input type="submit" name="s">

	</form>

</body>
</html>

<?php
	if(isset($_REQUEST['s'])){
		$n=$_REQUEST['no'];
		if($n%2 == 0){
		echo "number $n is even";}
		else{
			echo "number $n is odd";
		}
}
?>