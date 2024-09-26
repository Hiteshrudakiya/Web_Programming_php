<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<input type="number" name="value1">
		<input type="submit" name="submit">
	</form>

</body>
</html>
<?php
if(isset($_REQUEST['submit']))
$num=$_POST['value1'];
$p=$num;
$revnum = 0;
while ($num != 0)
{
$revnum = $revnum * 10 + $num % 10;
//below cast is essential to round remainder towards zero
$num = (int)($num / 10); 
}
 
if($revnum==$p)
{
echo $p," is Palindrome number";
}
else
{
echo $p." is not Palindrome number";
}

?>