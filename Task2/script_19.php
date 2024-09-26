<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form">
		<input type="text" name="a">
		<input type="submit" name="s">
	</form>
</body>
</html>
<?php 
		if(isset($_REQUEST['s'])){

				$a=$_REQUEST['a'];


					if ($a>0) {
					echo "positive";
					}
					if ($a<2) {
							echo "not prime";					
					}
					else{
						$res=0;
						for($i=2;$i<$a*$a;$i++)
						{
							if($a%$i==0 && $a!=$i){
							$res=$a;
						
							}
						}
							if ($res!=0) {
						echo "not prime";
								
						}else{
							echo "prime number";
						}
					

					}

				

		}
?>
