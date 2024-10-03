<?php  

$county = array('india' =>'delhi','uk'=> 'london', 'america' => 'wasington', 'ukrain'=> 'kiev', 'italy'=>'rome');
echo "before update";
print_r($county);
$county['germany']='berline';
$county['uk']='india';
echo "<br><br>after change ";
foreach ($county as $value1 => $value2) {
	echo "<br>$value1 capital is $value2";
	// code...
}


?>