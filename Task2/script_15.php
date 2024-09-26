<html>
<body>

	<form action="#" method="get">
		Enter number : <input type="number" name="n1"><br>
		enter number : <input type="number" name="n2"><br>
		enter number : <input type="number" name="n3"><br>
		<input type="submit" name="s">

	</form>

</body>
</html>

<?php
	if(isset($_REQUEST['s'])){
		$no1=$_REQUEST['n1'];
		$no2=$_REQUEST['n2'];
		$no3=$_REQUEST['n3'];
		
		if($no1>$no2){
			if($no1>$no3)
			{
				echo "number $no1 is large";
			}
			else{
				echo "number $no3 is large";
			}
		}
		elseif($no2>$no3){
			echo "number $no2 is large";
		}
		else{
			echo "number $no3 is large";
		}
}
?>